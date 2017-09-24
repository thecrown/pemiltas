<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="refresh" content="1; URL=http://localhost/pemiltas/monitoring">
  <title>Pemiltas FKM | Monitoring</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- External css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/userlayout.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/monitoring.css">
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body style="overflow-x: hidden;">
<div class="container-fluid">
	<div class="text-center">
		<div class="col-md-10 col-monitoring">
			<!-- <br> -->
			<div class="col-md-10 col-md-offset-1">
			<div class="box">
	            <div class="box-header">
		            <h2 class="text-title text-upper">Lalulintas Suara <br><sub>Pemiltas FKM 2017</sub></h2>
	            </div>
	            <br>
	            <!-- /.box-header -->
	            <div class="box-body no-padding">
		          <table class="table text-left text-upper">
		            <tr>
		              <th class="col-md-4">Suara</th>
		              <th class="col-md-3">Masuk</th>
		              <th class="col-md-5">Progress</th>
		              <!-- <th class="col-md-2">Label</th> -->
		            </tr>
		            <tr>
		              <td>Total</td>
		              <td><?php echo "$bem_sudah / $bem_total"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
						  aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo round($bem_sudah/$bem_total, 2)."%"; ?>'>
						    <?php echo round($bem_sudah/$bem_total, 2)."%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Suara BEM</td>
		              <td><?php echo "$bem_sudah / $bem_total"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo round($bem_sudah/$bem_total, 2)."%"; ?>'>
						    <?php echo round($bem_sudah/$bem_total, 2)."%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Suara Senat</td>
		              <td><?php echo "$senat_sudah / $senat_total"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo round($senat_sudah/$senat_total, 2)."%"; ?>'>
						    <?php echo round($senat_sudah/$senat_total, 2)."%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Senat 2015</td>
		              <td><?php echo "$sudah15 / $total15"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo round($sudah15/$total15, 2)."%"; ?>'>
						    <?php echo round($sudah15/$total15, 2)."%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Senat 2016</td>
		              <td><?php echo "$sudah16 / $total16"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
						  aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo round($sudah16/$total16, 2)."%"; ?>'>
						    <?php echo round($sudah16/$total16, 2)."%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		            <tr>
		              <td>Senat 2017</td>
		              <td><?php echo "$sudah17 / $total17"; ?></td>
		              <td>
		                <div class="progress">
						  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar"
						  aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style='width:<?php echo round($sudah17/$total17, 2)."%"; ?>'>
						    <?php echo round($sudah17/$total17, 2)."%"; ?>
						  </div>
						</div>
		              </td>
		            </tr>
		          </table>
	            </div>
      		</div>
      		</div>
			<img class="footer-img t" src="<?php echo base_url();?>assets/img/footerlogo.png">
		</div>
	</div>
</div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url();?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
