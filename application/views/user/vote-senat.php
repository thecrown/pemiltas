<div class="container-fluid">
	<div class="vote-title text-center">
		<h2>Calon Senator Angkatan <?php echo $angkatan; ?> <br>SM FKM Undip 2018</h2>
		<p><?php echo "$waktu, $nama ($nim)"; ?> |<a href="" class="btn btn-link" data-toggle="modal" data-target="#myModal">Petunjuk</a> |<a href="" class="btn btn-link">Keluar</a></p>
	</div>
	<div class="row text-center">		
		<div class="col-md-11 line"></div>
	</div>
	<div class="row text-center">
	<form action="" method="POST">
	<?php for ($i=1; $i<5; $i++) { ?>
	<div class="col-vote col-md-2">
		<div class="row text-center" style="background: rgba(166, 75, 154, 1);">
			<input type="radio" class="option-input radio" name="senator" data-checked="<?php echo $i; ?>" value="<?php echo $i; ?>" data-toggle="tooltip" id="radio-vote"/>
		</div>
		<div class="row ava-container">
			<div class="col-md-12">
				<img class="avatar" src="<?php echo base_url();?>assets/img/senat/<?php echo $angkatan;?>/senat<?php echo $i;?>.png" name="senat<?php echo $i;?>">
			</div>
			<!-- <div class="col-md-6">
				<img class="avatar" src="<?php echo base_url();?>assets/img/wakabem<?php echo $i;?>.png" name="wakabem<?php echo $i;?>">
			</div> -->
		</div>
		<div class="row desc-container text-center">
			<div class="col-md-12">
				<p><strong>CALON SENATOR</strong></p>
				<p>nama calon senator</p>
			</div>
		</div>
	</div>
	<?php } ?>
	</form>
	</div>

	<div class="row text-center">
		<div class="col-md-3 line"></div>
		<div class="col-md-5 line transparent">
			<a href="" class="btn btn-md"><strong>Lanjut &raquo;</strong></a>
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