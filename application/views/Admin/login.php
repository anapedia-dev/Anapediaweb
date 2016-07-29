<!--CODE BY : SIMPLY CODE-->
<!DOCTYPE html>
<html>
<head>
	<title>Anapedia | Admin Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--SimpleSidebar-->
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/simple-sidebar.css">
	<!--Bootstrap-->
	<link rel="stylesheet" href="<?=base_url(); ?>assets/css/bootstrap.min.css">
	<!--FlatUI-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/flat-ui/dist/css/flat-ui.min.css">
	<!--FontAwesome-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(); ?>assets/font-awesome/css/font-awesome.min.css">
	<!--JQuery-->
	<script src="<?=base_url(); ?>assets/js/jquery.min.js"></script>

	<style type="text/css">
		.container-fluid{
			padding-top: 50vh;
		}
		.bg-1{background: #098EB7;}
		.bg-2{background: #EEEEEE;}

		.input-group>.form-control, .input-group>.input-group-addon, .input-group>.input-group-btn>.btn, .input-group>.select2-search input[type=text]{
			border-radius: 0px;
		}
		.form-control, .select2-search input[type=text]{
			border: none;
			border-radius: 0px;
			border-left: none;
		}
		.input-group.focus .form-control,
		.input-group.focus .input-group-btn .btn,
		.input-group.focus .select2-search input[type="text"] {
			border-right: 1px solid #098EB7;
		}
		.input-group-addon{
			background: #fff;
			color: #888888;
			border: none;
		}
		.form-group.focus .input-group-addon,
		.input-group.focus .input-group-addon {
			background-color: #098EB7;
			color: #fff;
			border: none;
		}

		.login-form{
			background: rgba(0, 0, 0, 0);
			width: 400px;
			position: absolute;
			margin-left: auto;
			margin-right: auto;
			left: 0;
			right: 0;
			top: 30vh;
		}
	</style>
</head>

<body>

	<div class="container-fluid bg-1">

	</div>
	<div class="login-form">
		<form role="form" method="post" action="<?php echo site_url('Admin/c_login/getlogin')?>">
			<div class="panel-body" style="background: #fff; ">
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" placeholder="Username" name="username">
					</div>
				</div>
				<div class="form-group">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-shield"></i></span>
						<input type="Password" class="form-control" placeholder="Password" name="password">
					</div>
				</div>
			</div>
			<div class="panel-body" style="background: #F7F7F7;">
				<button type="submit" class="btn btn-info pull-right">Login</button>
			</div>
		</form>
	</div>
	<div class="container-fluid bg-2">

	</div>

	<!--FlatUI-->
	<script src="<?=base_url(); ?>assets/flat-ui/dist/js/flat-ui.min.js"></script>
	<script src="<?=base_url(); ?>assets/js/app.min.js"></script>

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
</body>
</html>
