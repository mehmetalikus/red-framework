<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome file</title>
  <link rel="stylesheet" href="https://stackedit.io/style.css" />
</head>

<body class="stackedit">
  <div class="stackedit__html"><h1 id="red-framework">RED FRAMEWORK</h1>
<p>LIGHTEST PHP FRAMEWORK THAT CAN SERVE YOU LIKE THE OTHERS.<br>
<img src="https://i.hizliresim.com/r03J1N.png" alt="enter image description here"></p>
<h1 id="installation">Installation</h1>
<pre><code>git clone https://github.com/mehmetalikus/red-framework.git
or download 
[github](https://github.com/mehmetalikus/red-framework/archive/master.zip)
</code></pre>
<h2 id="file-structure">File Structure</h2>
<ul>
<li>app/
<ul>
<li>ajax/</li>
<li>cache/</li>
<li>classes/
<ul>
<li>Model/</li>
</ul>
</li>
<li>controller/</li>
<li>helpers/</li>
<li>interfaces/</li>
<li>language/</li>
<li>system/</li>
<li>view/</li>
<li>init.php</li>
<li>route.php</li>
</ul>
</li>
<li>assets/
<ul>
<li>css/</li>
<li>js/</li>
<li>images/</li>
</ul>
</li>
<li>.htaccess</li>
<li>index.php</li>
</ul>
<h2 id="example-controller">Example Controller</h2>
<p>In your controller file your Home method always set as default. When you make a controller you should make a Home method.</p>
<pre><code>&lt;?php
class Index extends Controller
{
	public function Home() {
		$data = ["
			"user" =&gt; [
				"username" =&gt; "john",
				"lastname" =&gt; "doe"
			],
			"foo" =&gt; "bar"
		"];
		$this-&gt;view("master.sample", $data);
	}

	public function Welcome(){
		$this-&gt;view("master.welcome");
	}
 }
</code></pre>
<h2 id="views">Views</h2>
<p>RED Framework fully supports  Blade Templating. Thanks for the blade your views much more clear and readable.</p>
<blockquote>
<p>master/layout.blade.php</p>
</blockquote>
<pre><code>&lt;!DOCTYPE html&gt;
&lt;html lang="tr"&gt;
&lt;head&gt;
    &lt;meta charset="utf-8" /&gt;
    &lt;title&gt; @yield("title", "Default Value") - &lt;?=app("app_name")?&gt; &lt;/title&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"&gt;
   	&lt;!-- CSS --&gt;
   	&lt;link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"&gt;
   	@yield("styles")
&lt;/head&gt;
&lt;body&gt;

&lt;h1&gt;Sample Page&lt;/h1&gt;
&lt;p&gt;@yield("content")&lt;/p&gt;

&lt;script src="https://code.jquery.com/jquery-3.3.1.min.js"&gt;&lt;/script&gt;
&lt;script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="&lt;?=assets_url("js/main.js")?&gt;"&gt;&lt;/script&gt;
&lt;script type="text/javascript" src="&lt;?=assets_url("js/localization.js")?&gt;"&gt;&lt;/script&gt;
@yield("scripts")
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
<blockquote>
<p>index.view.blade</p>
</blockquote>
<pre><code>@extends('master.layout') use "." instead of "/"
@section("title")Dashboard@endsection
@section("content")
    Here is my content.
@endsection
</code></pre>
<h2 id="route-system">Route System</h2>
<p>RED Framework has own pattern if you dont like it, you can change it.</p>
<pre><code>https://example.com/ClassName/MethodName/param1/param2/param3/...
</code></pre>
<h2 id="custom-routing">Custom Routing</h2>
<p>Sometimes you need to make custom url patterns and its okay. You can set a path and runs anonymous functions or even better you can use methods.</p>
<blockquote>
<p>app/routes.php<br>
You should write this rules above Route::start()</p>
</blockquote>
<pre><code>Route::run("/", "Index@Welcome"); // overrides dynamic pattern
Route::run("/api/users/{id}", function($id){
    echo "Hello User" . $id;
}, "GET|POST"); // accepts GET and POST request
Route::run("/api/users/getAll", "User@getAll", "post"); // User Class getAll method will run
Route::start();
</code></pre>
<h1 id="ajax-request">Ajax Request</h1>
<p>Ajax request example should be like this. When you send an ajax request you have to define type:filename parameter.</p>
<pre><code>$(".sendBtn").on("click", function(){	
	$.post(init.ajax, {type:login, foo:bar}, function(res){
		console.log("res");
	}, "json" /* optional */);
});
</code></pre>
<blockquote>
<p>request to  app/ajax/login.php</p>
</blockquote>
</div>
</body>

</html>
