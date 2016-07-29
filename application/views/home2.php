<!-- [{simplyCODE}] -->
<!DOCTYPE html>
<html>
<head>
	<title>Anapedia</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--SimpleSidebar-->
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/simple-sidebar.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="<?=base_url(); ?>assets/flat-ui/dist/css/vendor/bootstrap/css/bootstrap.min.css">
	<!--FlatUI-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/flat-ui/dist/css/flat-ui.min.css">

	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/custom.css">
	<!--SweetAlert-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/sweetalert/dist/sweetalert.css">
	<!--MenuHamburger-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/menu-hamburger/css/style.min.css">


	<style type="text/css">
		@font-face{
			font-family: "abeat";
			src: url(<?=base_url(); ?>assets/fonts/ABEAKRG.TTF) format("truetype");
		}
		input[type=text], .input-group-btn>.btn{
			border-color: #89C4F4;
		}
		.category-group{
			display: block;
		}
		.category-group a{
			display: inline-block;
			font-size: 15px;
			letter-spacing: 0.5px;
			margin-bottom: 10px;
			margin-right: 5px;
			padding: 5px 10px;
		}
		.category:hover{
			border-color: #DEDEDE;
		}

		html {
			position: relative;
			min-height: 100%;
		}

		.c-hamburger{
			z-index: 3000;
		}

		/*Color category*/
		.ipa{color: #E71A4B;border: 1px solid #E71A4B;}.ipa:hover{background: #E71A4B;color: #fff;}
		.ips{color: #BE90D4;border: 1px solid #BE90D4;}.ips:hover{background: #BE90D4;color: #fff;}
		.bahasa{color: #5F4F84;border: 1px solid #5F4F84;}.bahasa:hover{background: #5F4F84;color: #fff;}
		.agama{color: #89C4F4;border: 1px solid #89C4F4;}.agama:hover{background: #89C4F4;color: #fff;}
		.olahraga{color: #87D37C;border: 1px solid #87D37C;}.olahraga:hover{background: #87D37C;color: #fff;}
		.kesenian{color: #FCC600;border: 1px solid #FCC600;}.kesenian:hover{background: #FCC600;color: #fff;}
		.mulok{color: #EB974E;border: 1px solid #EB974E;}.mulok:hover{background: #EB974E;color: #fff;}

		.input-group-lg>.form-control, .input-group-lg>.input-group-addon, .input-group-lg>.input-group-btn>.btn, .input-group-lg>.select2-search input[type=text]{
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
	</style>
</head>

<body style="background: url(<?=base_url(); ?>assets/img/bg.png)" onload="$('#wrapper').toggleClass('toggled');">
	<div class="ui-ribbon-container" style="z-index: 1000;">
		<div class="ui-ribbon-wrapper">
			<div class="ui-ribbon">
				ALPHA 1
			</div>
		</div>
	</div>

	<div id="wrapper">
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li style="text-align: center; margin-right: 10px;"><a title="Tutup" href="#menu-toggle-remove" class="menu-toggle" id="menu-toggle-remove"><i class="fa fa-close"></i></a></li>
				<li><a href="<?=site_url('Admin/c_login')?>"><i class="fa fa-user"></i>&nbsp; Admin Login</a></li>
			</ul>
			<ul class="sidebar-nav-bottom" style="position: absolute; bottom: 0;">
				<li><a href="../about_page/index.html"><i class="fa fa-info"></i>&nbsp; Tentang</a></li>
			</ul>
		</div>
	</div>

	<div class="container-fluid">
		<div style="margin-top: 13px; position: absolute;">
			<a title="Menu" href="#menu-toggle" class="btn btn-danger btn-sm" id="menu-toggle"><i class="fa fa-navicon"></i></a>
		</div>
		<div class="panel-body" style="padding-top: 50px;">
			<!--Image-->
			<div class="row">
				<div class="col-lg-4 col-xs-3"></div>
				<div class="col-lg-4 col-xs-6 text-center">
					<a href="">
						<img src="<?=base_url(); ?>assets/img/logo.png" class="img-responsive" style="width: 200px; margin-left: auto; margin-right: auto;">
					</a>
					<p href="" class="text-center" style="font-size: 2em;">Fun ensiklopedia for Kid!</p>
				</div>
				<div class="col-lg-4 col-xs-3"></div>
			</div>
			<!--/Image-->

			<!--Input Area-->
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8 col-xs-12">
					<br>
					<form action="<?=site_url(); ?>/Pencarian/pencarian" method="post" role="form">
						<div class="form-group">
							<div class="input-group input-group-lg">
								<input type="text" class="form-control" name="judul" placeholder="Mau cari apa...">
								<span class="input-group-btn">
									<button class="btn" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								</span>
							</div><!-- /input-group -->
						</div>
						<div class="form-group text-center">
							<div class="category-group">
								<!-- new item, add new css color class -->
								<a href="" class="ipa">IPA</a>
								<a href="" class="ips">IPS</a>
								<a href="" class="bahasa">Bahasa</a>
								<a href="" class="agama">Agama</a>
								<a href="" class="olahraga">Olahraga</a>
								<a href="" class="kesenian">Kesenian</a>
								<a href="" class="mulok">Muatan Lokal</a>
							</div>
						</div>
						<div class="form-group text-center">
							<a href="" style="font-size: 0.8em;">Baru pertama kali ke sini ?</a>
						</div>
					</form>

				</div>
				<div class="col-lg-2"></div>
			</div>
			<!--/Input Area-->
		</div>
	</div>

	<!-- Modal Pop Up input not found-->

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Pencarian tidak ditemukan</h4>
				</div>
				<div class="modal-body">
					<p>Apa Maksud kamu <?=$word?> ??</p>
				</div>
				<div class="modal-footer">
					<a href="<?=site_url('Pencarian/pencarian/cariKata/'.$word)?>"><button type="button" class="btn btn-info">Yup!</button></a>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Bukan</button>
				</div>
			</div>

		</div>
	</div>
	<!--JQuery-->
	<script src="<?=base_url(); ?>assets/flat-ui/dist/js/vendor/jquery.min.js"></script>
	<!--FlatUI-->
	<script src="<?=base_url(); ?>assets/flat-ui/dist/js/flat-ui.min.js"></script>
	<!--SweetAlert-->
	<script src="<?=base_url(); ?>assets/sweetalert/dist/sweetalert.min.js"></script>
	<!-- <script src="<?=base_url(); ?>assets/js/app.min.js"></script> -->

	<script type="text/javascript">
		<?php if($warning){ ?>
			$(function(){
				$("#myModal").modal('show');
			});
			<?php } ?>
		</script>

	<!--ToolTip-->
	<script>
		$(function () {
			$('[data-toggle=tooltip]').tooltip();
		});
	</script>

	<script>
		$("#menu-toggle").click(function(event) {
			event.preventDefault();
			$('#wrapper').toggleClass('toggled');
		});

		$("#menu-toggle-remove").click(function(event) {
			event.preventDefault();
			$('#wrapper').toggleClass('toggled');
		});
	</script>

	<!--InputFocus-->
	<script>
		$(function () {
			// Focus state for append/prepend inputs
			$('.input-group').on('focus', '.form-control', function () {
				$(this).closest('.input-group, .form-group').addClass('focus');
			}).on('blur', '.form-control', function () {
				$(this).closest('.input-group, .form-group').removeClass('focus');
			});
		});
	</script>

	<!--SweetAlert-->
	<!-- <script>
		swal({   title: "Error!",   text: "Here's my error message!",   type: "error",   confirmButtonText: "Cool" });
	</script> -->
</body>
</html>
