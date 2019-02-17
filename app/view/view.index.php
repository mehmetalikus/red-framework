<?php require view("head", "layout/"); ?>
<body>
	<div class="container h-100 content">
	  <div class="row h-100 justify-content-center align-items-center text-center">
  		<blockquote>
  			“<?=__("DÜNYANIN EN BASİT MVC PHP <strike>FRAMEWORKU</strike>")?>” 
  			<br><hr>
  			<a href="https://github.com/mehmetalikus/custom-framework" class="btn btn-warning">
  				Github
  			</a>
  			<a href="<?=site_url("ajaxExample")?>" class="btn btn-warning"> <?=__("AJAX Örnekleri")?></a>
  			<?=changeLanguage();?>
  		</blockquote>
	  </div>
	</div>
	
	<?php require view("script-manager", "layout/"); ?>
</body>
</html>