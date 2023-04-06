<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Momentum Biotechnologies</title>

	<link rel="icon" type="image/x-icon" href="<?= base_url('/assets/img/m-logo-black.png')?>">

  <!-- Google tag (gtag.js) --> 
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-RQB54SR123"> </script> 
  <script>   
  window.dataLayer = window.dataLayer || [];   function gtag(){dataLayer.push(arguments);}   gtag('js', new Date());   gtag('config', 'G-RQB54SR123'); 
  </script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- jQuery -->
	<script src="<?= base_url('/assets/js/jquery-3.6.0.min.js')?>"></script>
	<script src="<?= base_url('/assets/js/jquery.sticky.js')?>"></script>

	<script type="text/javascript">
		var baseURL = "<?php echo base_url()?>";
	</script>
	<script src="<?= base_url('/assets/js/global.js')?>"></script>
</head>
<body class="theme-<?= isset($color) && $color == 'dark' ? 'dark' : 'white' ?> <?= empty($page) ? '' : $page.'-page' ?>">
  <?php
  if(!empty($page) && $page != 'lock') {
	include('include/header.php');
  }

  if(isset($page)) {
	?>
	<div id="page_content_wrap">
		<?php
			include('page/'.$page.'.php');
		?>
  	</div>
	<?php
  }
  
  if(!empty($page) && $page != 'lock') {
	include('include/footer.php');
  }
  
  ?>
    <div class="alert" id="alert">
        <div class="alert-wrap">
            <div class="alert-message">
                <p>Thank you for your interesest in Momentum Biotechnologies.<br>We'll be in touch shortly.</p>
            </div>
            <div class="alert-foot">
                <span class="" id="btn_alert_ok">Ok</span>
            </div>
        </div>
    </div>
<script>
	function cbResize() {

		<?php
		if($page == 'lock') {
			?>
			var content_height = window.innerHeight;
			console.log('window.innerHeight:', window.innerHeight);
			console.log('content_height:', content_height);
			jQuery('#page_content_wrap .page-content').css('min-height', content_height + 'px');
			<?php
		}
		else {
			?>
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
		}
		?>
	}

	cbResize();
	jQuery(window).resize(cbResize);
	
	function idleLogout() {
		var t;
		window.onload = resetTimer;
		window.onmousemove = resetTimer;
		window.onmousedown = resetTimer;  // catches touchscreen presses as well      
		window.ontouchstart = resetTimer; // catches touchscreen swipes as well      
		window.ontouchmove = resetTimer;  // required by some devices 
		window.onclick = resetTimer;      // catches touchpad clicks as well
		window.onkeydown = resetTimer;   
		window.addEventListener('scroll', resetTimer, true); // improved; see comments

		function cbLogout() {
			location.href = '<?= base_url("/lock")?>';
		}

		function resetTimer() {
			clearTimeout(t);
			t = setTimeout(cbLogout, 1000 * 60 * 15);  // time is in milliseconds
		}
	}
	// idleLogout();

	if(jQuery('#header').length > 0) {
		jQuery("#header").sticky({topSpacing:0});
	}
	
</script>
</body>
</html>