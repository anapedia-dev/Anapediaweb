<!--CODE BY : SIMPLY CODE-->
<!DOCTYPE html>
<html>
<head>
	<title>Anapedia | Result</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Bootstrap-->
	<link rel="stylesheet" href="<?=base_url(); ?>assets/flat-ui/dist/css/vendor/bootstrap/css/bootstrap.min.css">
	<!--FlatUI-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/flat-ui/dist/css/flat-ui.min.css">
	<!--FontAwesome-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<!--JQuery-->
	<script src="<?=base_url(); ?>assets/flat-ui/dist/js/vendor/jquery.min.js"></script>

	<style type="text/css">
		@font-face{
			font-family: "official";
			src: url(<?=base_url(); ?>assets/fonts/KGSecondChancesSketch.ttf) format("truetype");
		}
		.container-fluid{
			padding-top: 50px;
			padding-bottom: 50px;
		}
		.container-fluid.head{
			padding-left: 100px;
			padding-right: 100px;
		}
		.container-fluid.content{
			padding-left: 250px;
			padding-right: 250px;
		}
		.container-fluid.footer{
			text-align: center;
			font-size: 3em;
			padding: 0;
		}
		.bg-1{background: #1596E8; background: url(<?=base_url(); ?>assets/img/bg.png);}
		.bg-2{background: #eee;}

		.article-title{
			font-family: official;
			font-size: 2em;
			border-bottom: 1px solid #bbb;
			width: auto;
		}
		.article-content{
			padding-top: 50px;
			padding-left: 10px;padding-right: 10px;
		}
		.article-content p{
			font-family: sans-serif helvetica;
			text-align: justify;
		}

		.input-group-hg>.form-control, .input-group-hg>.input-group-addon, .input-group-hg>.input-group-btn>.btn, .input-group-hg>.select2-search input[type=text]{
			border-radius: 0px;
		}
		.form-control, .select2-search input[type=text]{
			border: none;
		}
		.input-group-btn .btn{
			border: none;
			color: #FF174F;
		}
		.form-group.focus .input-group-btn .btn,
		.input-group.focus .input-group-btn .btn {
			color: #ffffff;
			background-color: #E30037;
		}
		.form-group.focus .input-group-btn .btn:hover,
		.input-group.focus .input-group-btn .btn:hover {
			background-color: #FF174F;
		}

		@media (max-width: 768px) {
			.container-fluid{
				padding-top: 50px;
				padding-bottom: 50px;
			}
			.container-fluid.content{
				padding-left: 50px;
				padding-right: 50px;
			}
			.container-fluid.head{
				padding-left: 50px;
				padding-right: 50px;
			}
		}

		.back-btn {
			color: #FF8E3D;
			/* transition: transform 0.2s; */
		}
		.back-btn:hover {
			color: #FF8E3D;
			animation: shake .5s ease-in-out;
		}

		@keyframes shake {
			0% {
				transform: translateX(0);
			}

			20% {
				transform: translateX(-10px);
			}

			40% {
				transform: translateX(10px);
			}

			60% {
				transform: translateX(-10px);
			}

			80% {
				transform: translateX(10px);
			}

			100% {
				transform: translateX(0);
			}
		}
	</style>

	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/engine0/style.css" />
	<!--script type="text/javascript" src="engine0/jquery.js"></script-->
	<!-- End WOWSlider.com HEAD section --></head>

<body>
	<!--Head-->
	<div class="container-fluid head bg-1">
		<form role="form">
			<div class="form-group">
				<div class="input-group input-group-hg">
					<input type="text" class="form-control input-lg" placeholder="Masukkan kata untuk pencarian baru...">
					<span class="input-group-btn">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</div>
		</form>
	</div>
	<!--/Head-->

	<!--MainContent-->
	<div class="container-fluid content">
		<div class="article-title text-center" style="color: #FF8E3D;">
			<span><?php echo $words[0]['istilah'];?></span>
		</div>
		<div class="article-content">
			<p>
				<?php echo $words[0]['definisi'];?>
			</p>
		</div>
		<div class="col-md-6">
			<p class="lead">
				Gambar Terkait
			</p>
			<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
			<div id="wowslider-container0">
				<div class="ws_images"><ul>
					<li><img src="<?= base_url(); ?>assets/data0/images/wdl3emn.jpg" alt="wdl3emN" title="wdl3emN" id="wows0_0"/></li>
					<li><img src="<?= base_url(); ?>assets/data0/images/dota_2___drow_ranger_v2__by_sheron1030d7gha61.jpg" alt="dota_2___drow_ranger_v2__by_sheron1030-d7gha61" title="dota_2___drow_ranger_v2__by_sheron1030-d7gha61" id="wows0_1"/></li>
					<li><a href="http://wowslider.com/vi"><img src="<?= base_url(); ?>assets/data0/images/dota_2___drow_ranger_wallpaper_by_sheron1030d67nxtx.jpg" alt="bootstrap slider" title="dota_2___drow_ranger_wallpaper_by_sheron1030-d67nxtx" id="wows0_2"/></a></li>
					<li><img src="<?= base_url(); ?>assets/data0/images/flatwallpaperdesignwf1009.jpg" alt="FLAT-WALLPAPER-DESIGN-WF1009" title="FLAT-WALLPAPER-DESIGN-WF1009" id="wows0_3"/></li>
				</ul></div>
				<div class="ws_bullets"><div>
					<a href="#" title="wdl3emN"><span><img src="<?= base_url(); ?>assets/data0/tooltips/wdl3emn.jpg" alt="wdl3emN"/>1</span></a>
					<a href="#" title="dota_2___drow_ranger_v2__by_sheron1030-d7gha61"><span><img src="<?= base_url(); ?>assets/data0/tooltips/dota_2___drow_ranger_v2__by_sheron1030d7gha61.jpg" alt="dota_2___drow_ranger_v2__by_sheron1030-d7gha61"/>2</span></a>
					<a href="#" title="dota_2___drow_ranger_wallpaper_by_sheron1030-d67nxtx"><span><img src="<?= base_url(); ?>assets/data0/tooltips/dota_2___drow_ranger_wallpaper_by_sheron1030d67nxtx.jpg" alt="dota_2___drow_ranger_wallpaper_by_sheron1030-d67nxtx"/>3</span></a>
					<a href="#" title="FLAT-WALLPAPER-DESIGN-WF1009"><span><img src="<?= base_url(); ?>assets/data0/tooltips/flatwallpaperdesignwf1009.jpg" alt="FLAT-WALLPAPER-DESIGN-WF1009"/>4</span></a>
				</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery slider</a> by WOWSlider.com v8.7</div>
				<div class="ws_shadow"></div>
			</div>
			<script type="text/javascript" src="<?= base_url(); ?>assets/engine0/wowslider.js"></script>
			<script type="text/javascript" src="<?= base_url(); ?>assets/engine0/script.js"></script>
			<!-- End WOWSlider.com BODY section -->
		</div>
		<div class="col-md-6">
			<p class="lead">Video Terkait</p>
			<video class="video-js" preload="auto" poster="<?=base_url(); ?>assets/flat-ui/docs/assets/img/video/poster.jpg" data-setup="{}">
				<source src="<?=base_url(); ?>assets/flat-ui/docs/assets/img/video/poster.mp4" type="video/mp4">
			</video>
		</div>
	</div>
	<!--/MainContent-->

	<div class="container-fluid footer">
		<a href="<?= base_url();?>index.php" class="fa fa-arrow-circle-left back-btn"></a>
	</div>

	<!--FlatUI-->
	<script src="<?=base_url(); ?>assets/flat-ui/dist/js/flat-ui.min.js"></script>
	<script src="<?=base_url(); ?>assets/js/app.min.js"></script>
	<script src="<?=base_url(); ?>assets/flat-ui/dist/js/vendor/video.js"></script>

	<!--InputFocus-->
	<script>
		$(function () {
			// Focus state for append/prepend inputs
			$('.input-group').on('focus', '.form-control', function () {
				$(this).closest('.input-group').addClass('focus');
			}).on('blur', '.form-control', function () {
				$(this).closest('.input-group, .form-group').removeClass('focus');
			});
		});
	</script>
</body>
</html>
