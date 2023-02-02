<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MomentumBio</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- jQuery -->
	<script src="<?= base_url('/assets/js/jquery-3.6.0.min.js')?>"></script>

	<script type="text/javascript">
		var base_url = "<?php echo base_url()?>";
	</script>
	<script src="<?= base_url('/assets/js/global.js')?>"></script>
</head>
<body class="theme-<?= isset($color) && $color == 'dark' ? 'dark' : 'white' ?>">
  <?php
  include('include/header.php');

  if(isset($page)) {
	include('page/'.$page.'.php');
  }
  
  if(isset($page) && $page != 'home' && $page != 'contact') {
	include('include/footer.php');
  }
  
  ?>
</body>
</html>