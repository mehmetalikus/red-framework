<?php

class Route extends Controller
{
	public static function parse(){
        $dirname = dirname($_SERVER['SCRIPT_NAME']);
        $dirname = $dirname != '/' ? $dirname : null;
        $basename = basename($_SERVER['SCRIPT_NAME']);
        $request_uri = str_replace([$dirname, $basename], null, $_SERVER['REQUEST_URI']);
        return $request_uri;
	}

	public static function run($url, $call, $method = "get"){
        $method = explode('|', strtoupper($method));
        if (in_array($_SERVER['REQUEST_METHOD'], $method)) {
            $patterns = [
                '{url}' => '([0-9a-zA-Z]+)',
                '{text}' => '([a-zA-Z]+)',
                '{id}' => '([0-9]+)'
            ];
            $url = str_replace(array_keys($patterns), array_values($patterns), $url);
            $request_uri = self::parse();
            if(preg_match('@^' . $url . '$@', $request_uri, $params)){
                unset($params[0]);
                if(is_callable($call)){
                    call_user_func_array($call, $params);
                    exit;
                }
                else {
                    $controller = explode('@', $call);
                    $className = explode('/', $controller[0]);
                    $className = end($className);
                    $controllerFile = DIRECTORY . '/app/controller/controller.' . strtolower($controller[0]) . '.php';
                    if (file_exists($controllerFile)) {
                        require $controllerFile;
                        call_user_func_array([new $className, $controller[1]], $params);
                        exit;
                    }                    
                }
            }
        }
    }

    public static function start($url = null, $call = null, $method = "get"){

        $x = ($_SERVER["REQUEST_URI"]);
        $x = explode("/", $x);
        
        if(end($x) == "")
            array_pop($x);

        if(count($x) > 2) {
                $className = $x[1];
                $methodName = $x[2];

                unset($x[0]);
                unset($x[1]);
                unset($x[2]);

                $controllerFile = DIRECTORY . "/app/controller/controller." . strtolower($className) . ".php";
                require $controllerFile;
                $class_methods = get_class_methods($className);
                if(in_array($methodName, $class_methods)){
                   call_user_func_array([new $className, $methodName], $x);
                }
                else {
                    if(is_callable($methodName)){
                        call_user_func($methodName);
                        exit;
                    }
                }
              
        }  
        else if(count($x) == 2 && $x[1] != ""){
            $className = strtolower($x[1]);
            $controllerFile = DIRECTORY . "/app/controller/controller.". $className .".php";
            if(file_exists($controllerFile)){
                require $controllerFile;
                call_user_func_array([new $className, "Home"], []);
            }
        }
        else {
            require DIRECTORY . "/app/controller/controller.index.php";
            call_user_func_array([new Index, "Home"], []);
        }           
    }
}