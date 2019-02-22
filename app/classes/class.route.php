<?php 
// @author Tayfun ERBILEN

class Route
{
	public static function parse(){
        $dirname = dirname($_SERVER['SCRIPT_NAME']);
        $dirname = $dirname != '/' ? $dirname : null;
        $basename = basename($_SERVER['SCRIPT_NAME']);
        $request_uri = str_replace([$dirname, $basename], null, $_SERVER['REQUEST_URI']);
        return $request_uri;
	}

	public static function get($url, $call, $method = "get"){

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
                    }
                    
                }
			}
		}
	}
}