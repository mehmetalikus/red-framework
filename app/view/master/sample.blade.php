<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8" />
    <title> <?=app("app_name")?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   	<!-- CSS -->
   	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	
	<h1>Sample Page</h1>

	<script type="text/javascript">
		let init = {
			base_url: "<?=site_url()?>",
			ajax: "<?=site_url("ajax")?>",
			language: "<?=app("language")?>"
		};
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?=assets_url("js/main.js")?>"></script>
	<script type="text/javascript" src="<?=assets_url("js/localization.js")?>"></script>
</body>
</html>