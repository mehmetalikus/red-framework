# RED FRAMEWORK
<p align="center">
LIGHTEST PHP FRAMEWORK THAT CAN SERVE YOU LIKE THE OTHERS.
</p>
<img src="https://i.hizliresim.com/r03J1N.png">


# Installation

    git clone https://github.com/mehmetalikus/red-framework.git
    or download 
    [github](https://github.com/mehmetalikus/red-framework/archive/master.zip)

## File Structure

 - app/
	 - ajax/
	 - cache/
	 - classes/ 
		 - Model/	 
	 - controller/
	 - helpers/
	 - interfaces/
	 - language/
	 - system/
	 - view/
	 - init.php
	 - route.php	
 - assets/
	 - css/
	 - js/
	 - images/
 - .htaccess
 - index.php

## Example Controller

In your controller file your Home method always set as default. When you make a controller you should make a Home method.

    <?php
    class Index extends Controller
    {
		public function Home() {
			$data = ["
				"user" => [
					"username" => "john",
					"lastname" => "doe"
				],
				"foo" => "bar"
			"];
			$this->view("master.sample", $data);
		}

		public function Welcome(){
			$this->view("master.welcome");
		}
     }



## Views

RED Framework fully supports  Blade Templating. Thanks for the blade your views much more clear and readable.

> master/layout.blade.php

    <!DOCTYPE html>
	<html lang="tr">
	<head>
	    <meta charset="utf-8" />
	    <title> @yield("title", "Default Value") - <?=app("app_name")?> </title>
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	   	<!-- CSS -->
	   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	   	@yield("styles")
	</head>
	<body>
	
	<h1>Sample Page</h1>
	<p>@yield("content")</p>

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=assets_url("js/main.js")?>"></script>
	<script type="text/javascript" src="<?=assets_url("js/localization.js")?>"></script>
	@yield("scripts")
	</body>
	</html>

> index.view.blade 

    @extends('master.layout') use "." instead of "/"
    @section("title")Dashboard@endsection
    @section("content")
	    Here is my content.
    @endsection

## Route System
RED Framework has own pattern if you dont like it, you can change it.

    https://example.com/ClassName/MethodName/param1/param2/param3/...

## Custom Routing

Sometimes you need to make custom url patterns and its okay. You can set a path and runs anonymous functions or even better you can use methods.

> app/routes.php 
>  You should write this rules above Route::start()

    Route::run("/", "Index@Welcome"); // overrides dynamic pattern
    Route::run("/api/users/{id}", function($id){
	    echo "Hello User" . $id;
	}, "GET|POST"); // accepts GET and POST request
	Route::run("/api/users/getAll", "User@getAll", "post"); // User Class getAll method will run
    Route::start();


# Ajax Request

Ajax request example should be like this. When you send an ajax request you have to define type:filename parameter.  

	$(".sendBtn").on("click", function(){	
		$.post(init.ajax, {type:login, foo:bar}, function(res){
  			console.log("res");
   		}, "json" /* optional */);
	});
	

> request to  app/ajax/login.php
