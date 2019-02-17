<?php $cache = new Cache("index", CACHE_EXPIRE_DATE ); ?>
<?php if($cache->readCacheFile() == false): ?>
<?php $cache->start(); ?>

	<?php require view("head", "layout/"); ?>
	<body>  	
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-8 mt-5">
					<a href="<?=site_url()?>" class="btn btn-warning"> <?=__("Geri")?></a>
					<hr>
					<form onsubmit="return false;" method="post">
						<div class="form-group">
							<input type="text" name="userName" class="form-control" placeholder="<?=__("Ad")?>">
						</div>
						<div class="form-group">
							<input type="text" name="userAge" class="form-control" placeholder="<?=__("Yaş")?>">
						</div>
						<div class="form-group">
							<button class="btn btn-block btn-success" onclick="sample()"> <?=__("Gönder")?></button>
						</div>
					</form>
				</div>
				<div class="col-12 col-sm-4 mt-5">
					<?=__("AJAX Cevap")?> :
					<div class="ajaxData"></div>
				</div>
			</div>
		</div>

		<?php require view("script-manager", "layout/"); ?>
		<script type="text/javascript">
		// OR CREATE EVENT LISTENER IN MAIN.JS
			function sample(){
				var userName = $("input[name='userName']").val().trim();
				var userAge = $("input[name='userAge']").val().trim();
				$.post(init.ajax, {type:"sample", name: userName, age: userAge}, function(response){
					console.log(response);
					if(response.status)
						$(".ajaxData").html(response.user + " | " + response.age + "<br>" + response.message);
					else
						$(".ajaxData").html(response.message);
				}, "json");
			}
		</script>
	</body>
	</html>

<?php $cache->finish() ?>
<?php endif ?>
