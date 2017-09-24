<?php 
	$bem		= $this->session->userdata('bem');
	$senat 		= $this->session->userdata('senat');
	// $bem 	= $this->input->post('paslonbem');
	// $senat 	= $this->input->post('senator');
?>

<div class="container-fluid">
	<div class="vote-title text-center">
		<h2>Vote Review <br>Periksa Kembali Pilihan Anda</h2>
		<p><?php echo "$waktu, $nama ($nim)"; ?> |<a href="" class="btn btn-link" data-toggle="modal" data-target="#myModal">Petunjuk</a> <!-- |<a href="<?php echo base_url('logout'); ?>" class="btn btn-link" data-toggle="modal" data-target="#exitModal">Keluar</a> --></p>
	</div>
	<div class="row text-center">		
		<div class="col-md-11 line"></div>
	</div>
	<div class="row text-center vote-container">
	<h2 style="color: #F1F0FF;">Anda memilih</h2>
	<form action="" method="POST">
	<div class="col-vote col-md-3">
		<div class="row text-center" style="background: rgba(166, 75, 154, 1);">
			<div class="onreview">
				<p><?php echo $bem; ?></p>
			</div>
		</div>
		<div class="row ava-container">
			<div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/kabem<?php echo $bem;?>.png" name="kabem<?php echo $bem;?>">
			</div>
			<div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/bem/wakabem<?php echo $bem;?>.png" name="wakabem<?php echo $bem;?>">
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

	<div class="col-vote col-md-3 <?php 
			$list_senator = array("2015", "2016", "2017");
			if (!in_array($angkatan, $list_senator)) {
				echo "hidden";
			}?>">
		<div class="row text-center" style="background: rgba(166, 75, 154, 1);">
			<div class="onreview">
				<p><?php echo $senat; ?></p>
			</div>
		</div>
		<div class="row ava-container">
			<div class="col-md-12">
				<img class="avatar" src="<?php echo base_url();?>assets/img/senat/<?php echo $angkatan;?>/senat<?php echo $senat; ?>.png" name="senat<?php echo $senat;?>">
			</div>
		</div>
		<div class="row desc-container text-center">
			<div class="col-md-12">
				<p><strong>CALON<br>SENATOR</strong></p>
				<p>nama calon senator</p>
			</div>
		</div>
	</div>
	</form>
	</div>

	<div class="row text-center">
		<div class="col-md-3 line"></div>
		<div class="col-md-5 line transparent">
			<a href="<?php echo base_url('user/thanks');?>" class="btn btn-md"><strong>Simpan <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span></strong></a>
			<a href="<?php echo base_url('user/vote-bem');?>" class="btn btn-md"><strong>Ulangi Vote <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span></strong></a>
		</div>
		<div class="col-md-3 line"></div>
	</div>

	<div class="row text-center">
		<!-- <div class="col-md-3 line"></div> -->
		<div class="col-md-11 line footer">
			<img class="footer-img" src="<?php echo base_url();?>assets/img/footerlogo.png">
			<label id="copyright" class=""> 
				Copyright &copy; Pemiltas FKM 2017 <br>
				All Right Reserved
			</label>
		</div>
		<!-- <div class="col-md-3 line"></div> -->
	</div>
</div>