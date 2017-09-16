<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pemiltas FKM | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- External css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userlayout.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body id="login" class="hold-transition login-page">
<div class="container-fluid">
	<div class="vote-title text-center">
		<h2>Pasangan Calon Ketua dan Wakil Ketua BEM FKM Undip 2018</h2>
	</div>
	<div class="row text-center">
	<form action="" method="POST">
	<?php for ($i=1; $i<4; $i++) { ?>
	<div class="col-vote col-md-3">
		<div class="row text-center" style="background: rgba(166, 75, 154, .7);">
			<input type="radio" class="option-input radio" name="paslon" data-checked="<?php echo $i; ?>" value="<?php echo $i; ?>"/>
		</div>
		<div class="row ava-container">
			<div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/kabem<?php echo $i;?>.png" name="kabem<?php echo $i;?>">
			</div>
			<div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/wakabem<?php echo $i;?>.png" name="wakabem<?php echo $i;?>">
			</div>
		</div>
		<div class="row desc-container text-center">
			<div class="col-md-6">
				<p><strong>CALON<br>KETUA</strong></p>
				<p>nama calon ketua</p>
			</div>
			<div class="col-md-6">
				<p><strong>CALON<br>WAKIL KETUA</strong></p>
				<p>nama calon wakil ketua</p>	
			</div>
		</div>
	</div>
	<?php } ?>
	</form>
	</div>
</div>
  

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	
	$('input[type=password]').focus(function() {
		$('#pswd_info').show();
	}).blur(function() {
		$('#pswd_info').hide();
	});

	$('input[type=text]').focus(function() {
		$('#uname_info').show();
	}).blur(function() {
		$('#uname_info').hide();
	});
	
});
</script>
</body>
</html>
