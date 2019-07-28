@php $cache = new Cache("welcomeView", app("cache.EXPIRE_DATE") ); @endphp
@if($cache->readCacheFile() == false)
@php $cache->start(); @endphp
<!-- CACHE START -->
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <title> <?=app("app_name")?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   	<!-- CSS -->
   	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
   	<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <style>
	    html, body {
	        background-color: rgba(246, 45, 81, 0.8);
	        color: white;
	        font-family: 'Nunito', sans-serif;
	        font-weight: 200;
	        height: 100vh;
	        margin: 0;
	    }
	    .full-height {
	        height: 100vh;
	    }
	    .flex-center {
	        align-items: center;
	        display: flex;
	        justify-content: center;
	    }
	    .position-ref {
	        position: relative;
	    }
	    .top-right {
	        position: absolute;
	        right: 10px;
	        top: 18px;
	    }
	    .content {
	        text-align: center;
	    }
	    .title {
	        font-size: 84px;
	    }
	    .links > a {
	        color: white;
	        padding: 0 25px;
	        font-size: 13px;
	        font-weight: 600;
	        letter-spacing: .1rem;
	        text-decoration: none;
	        text-transform: uppercase;
	    }
	    .m-b-md {
	        margin-bottom: 30px;
	    }
	</style>
</head>
<body>
	
	<div class="flex-center position-ref full-height">
		<div class="content">
		    <div class="title m-b-md">
		        <?=app("app_name")?>
		    </div>

		    <div class="links">
		        <a href="https://github.com/mehmetalikus/red-framework" target="_blank">GitHub</a>
		    </div>
		</div>
	</div>

	<!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=assets_url("js/main.js")?>"></script>
	<script type="text/javascript" src="<?=assets_url("js/localization.js")?>"></script>-->
</body>
</html>
@php $cache->finish() @endphp
@endif