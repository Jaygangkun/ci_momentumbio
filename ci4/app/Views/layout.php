<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Momentum Biotechnologies</title>

	<link rel="icon" type="image/x-icon" href="<?= base_url('/assets/img/m-logo-black.png')?>">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/aos.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- jQuery -->
	<script src="<?= base_url('/assets/js/jquery-3.6.0.min.js')?>"></script>
	<script src="<?= base_url('/assets/js/aos.js')?>"></script>

	<script type="text/javascript">
		var base_url = "<?php echo base_url()?>";
	</script>
	<script src="<?= base_url('/assets/js/global.js')?>"></script>
</head>
<body class="theme-<?= isset($color) && $color == 'dark' ? 'dark' : 'white' ?> <?= empty($page) ? '' : $page.'-page' ?>">
  <?php
  include('include/header.php');

  if(isset($page)) {
	?>
	<div id="page_content_wrap" data-aos="fade-in" data-aos-duration="1500">
		<?php
			include('page/'.$page.'.php');
		?>
  	</div>
	<?php
  }
  
  include('include/footer.php');
  
  ?>
<script>
	function cbResize() {
		var content_height = window.innerHeight - jQuery('#header').outerHeight() - jQuery('#footer').outerHeight();
		console.log('window.innerHeight:', window.innerHeight);
		console.log('header_height:', jQuery('#header').outerHeight());
		console.log('footer_height:', jQuery('#footer').outerHeight());
		console.log('content_height:', content_height);
		jQuery('#page_content_wrap').css('min-height', content_height + 'px');

		<?php
		if($page == 'home' || $page == 'about') {
			?>
			jQuery('#page_content_wrap').css('height', content_height + 'px');
			jQuery('#page_content_wrap').css('height', content_height + 'px');
			<?php
		}
		?>
	}

	cbResize();
	jQuery(window).resize(cbResize);
	
</script>
</body>
</html>