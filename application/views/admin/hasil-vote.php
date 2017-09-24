<?php 
  $bem_sudah_persen = round($bem_sudah/$bem_total, 2);
  $bem_belum_persen = 100 - $bem_sudah_persen;

  $senat_sudah_persen = round($senat_sudah/$senat_total, 2);
  $senat_belum_persen = 100 - $senat_sudah_persen;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- <meta http-equiv="refresh" content="5; URL=http://localhost/pemiltas/hitung-vote"> -->
  <title>Pemiltas FKM | Perolehan Suara</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/admin.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets');?>/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            echo "['Paslon 1', {$no1}],";
            echo "['Paslon 2', {$no2}],";
            echo "['Paslon 3', {$no3}]";
          ?>
        ]);

        var options = {
          pieHole: 0.3,
          title: 'Grafik Perolehan Suara BEM'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_bem'));
        chart.draw(data, options);
      }

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart2);
      function drawChart2() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          <?php 
            echo "['Calon 1', {$nos1}],";
            echo "['Calon 2', {$nos2}],";
            echo "['Calon 3', {$nos3}],";
            echo "['Calon 4', {$nos4}]";
          ?>
        ]);

        var options = {
          pieHole: 0.3,
          title: 'Grafik Perolehan Suara Senat'
        };

        var chart = new google.visualization.PieChart(document.getElementById('donut_senat'));
        chart.draw(data, options);
      }

    </script> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="<?php echo base_url('assets');?>/index2.html" class="logo">
      <span class="logo-lg"><b>Pemiltas</b> FKM</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url('assets');?>/img/admin.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url('assets');?>/img/admin.png" class="img-circle" alt="User Image">
                <p>
                  Administrator
                  <small>Pemiltas FKM 2017</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?php echo base_url('dashboard/logout'); ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
  <section class="sidebar">
    <ul class="sidebar-menu">
      <li class="header">Menu Utama</li>
      <li><a href="<?php echo base_url('hitung-vote'); ?>"><i class="fa fa-pie-chart" aria-hidden="true"></i> <span>Perolehan Suara</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-bullhorn" aria-hidden="true"></i> <span>BEM</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kandidat-bem'); ?>"><i class="fa fa-circle-o"></i> Daftar Paslon BEM</a></li>
          <li><a href="<?php echo base_url('tambah-ketua-bem'); ?>"><i class="fa fa-circle-o"></i> Tambah Caka BEM</a></li>
          <li><a href="<?php echo base_url('tambah-wakil-bem'); ?>"><i class="fa fa-circle-o"></i> Tambah Cawaka BEM</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-comments" aria-hidden="true"></i> <span>Senator</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('kandidat-senat'); ?>"><i class="fa fa-circle-o"></i> Daftar Calon Senator</a></li>
          <li><a href="<?php echo base_url('tambah-senat'); ?>"><i class="fa fa-circle-o"></i> Tambah Calon Senator</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users" aria-hidden="true"></i> <span>Pemilih</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('daftar-pemilih'); ?>"><i class="fa fa-circle-o"></i> Daftar Pemilih</a></li>
          <li><a href="<?php echo base_url('tambah-pemilih'); ?>"><i class="fa fa-circle-o"></i> Tambah Pemilih</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Bagan Hasil Pemilihan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pie-chart"></i> Perolehan Suara</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-6">
        <!-- Donut chart -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-pie-chart" aria-hidden="true"></i>
              <h3 class="box-title">Grafik Perolehan Suara BEM</h3>
            </div>
            <div class="box-body">
                <div id="donut-bem" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
        <!-- Donut chart -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-pie-chart" aria-hidden="true"></i>
              <h3 class="box-title">Grafik Perolehan Suara Senat 2015</h3>
            </div>
            <div class="box-body">
                <div id="donut-senat15" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
        <!-- Donut chart -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-pie-chart" aria-hidden="true"></i>
              <h3 class="box-title">Grafik Perolehan Suara Senat 2016</h3>
            </div>
            <div class="box-body">
                <div id="donut-senat16" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
        <!-- Donut chart -->
        <div class="box box-primary">
            <div class="box-header with-border">
              <i class="fa fa-pie-chart" aria-hidden="true"></i>
              <h3 class="box-title">Grafik Perolehan Suara Senat 2017</h3>
            </div>
            <div class="box-body">
                <div id="donut-senat17" style="height: 300px;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
      <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h1 class="box-title"><i class="fa fa-database" aria-hidden="true"></i> Tabel Rekapitulasi Suara BEM</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table text-upper">
              <tr>
                  <th>NO</th>
                  <th colspan="2">Pasangan Calon</th>
                  <th>Perolehan Suara</th>
              </tr>
              <?php 
                $this->load->model('Admin_model');
                for ($i= 1; $i <= $xkandidat_bem; $i++) { 
                  $data = $this->Admin_model->get_data_kandidat_bem($i);
                  $e = $this->Admin_model->hitung_bem($i);
              ?>
                <tr>
                  <td class="text-center bigger"><?php echo $data->no_urut; ?></td>
                  <td class="foto">
                      <ul class="foto_paslon">
                        <li><img src="<?php echo base_url('assets');?>/img/bem/kabem<?php echo $data->no_urut;?>.png" style="width:40px"></li>
                        <li><img src="<?php echo base_url('assets');?>/img/bem/wakabem<?php echo $data->no_urut;?>.png" style="width:40px"></li>
                      </ul>
                  </td>
                  <td class="nama"><?php echo "$data->nama_ketua <br> $data->nama_wakil";?></td>
                  <td class="text-center bigger"><?php echo "$e / $bem_sudah"; ?></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      
      <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h1 class="box-title"><i class="fa fa-database" aria-hidden="true"></i> Tabel Rekapitulasi Suara Senat Angkatan 2015</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table text-upper">
              <tr>
                  <th>NO</th>
                  <th colspan="2">Calon Senat Angkatan</th>
                  <th>Perolehan Suara</th>
              </tr>
              <?php 
                $this->load->model('Admin_model');
                for ($i= 1; $i <= $xkandidat_senat15; $i++) {
                  $r = $this->Admin_model->get_data_kandidat_senat($i, "2015"); 
                  $e = $this->Admin_model->hitung_senat($i, "2015");
              ?>
                <tr>
                  <td class="text-center bigger"><?php echo $r->no_urut; ?></td>
                  <td class="foto">
                      <ul class="foto_paslon">
                        <li><img src="<?php echo base_url('assets');?>/img/senat/2015/senat<?php echo $r->no_urut;?>.png" style="width:40px"></li>
                      </ul>
                  </td>
                  <td class="nama-senat"><?php echo "$r->nama_kandidat";?></td>
                  <td class="text-center bigger"><?php echo "$e / $senat_sudah"; ?></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h1 class="box-title"><i class="fa fa-database" aria-hidden="true"></i> Tabel Rekapitulasi Suara Senat Angkatan 2016</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table text-upper">
              <tr>
                  <th>NO</th>
                  <th colspan="2">Calon Senat Angkatan</th>
                  <th>Perolehan Suara</th>
              </tr>
              <?php 
                $this->load->model('Admin_model');
                for ($i= 1; $i <= $xkandidat_senat16; $i++) {
                  $r = $this->Admin_model->get_data_kandidat_senat($i, "2016"); 
                  $e = $this->Admin_model->hitung_senat($i, "2016");
              ?>
                <tr>
                  <td class="text-center bigger"><?php echo $r->no_urut; ?></td>
                  <td class="foto">
                      <ul class="foto_paslon">
                        <li><img src="<?php echo base_url('assets');?>/img/senat/2016/senat<?php echo $r->no_urut;?>.png" style="width:40px"></li>
                      </ul>
                  </td>
                  <td class="nama-senat"><?php echo "$r->nama_kandidat";?></td>
                  <td class="text-center bigger"><?php echo "$e / $senat_sudah"; ?></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-12">
        <div class="box">
            <div class="box-header">
              <h1 class="box-title"><i class="fa fa-database" aria-hidden="true"></i> Tabel Rekapitulasi Suara Senat Angkatan 2017</h1>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table text-upper">
              <tr>
                  <th>NO</th>
                  <th colspan="2">Calon Senat Angkatan</th>
                  <th>Perolehan Suara</th>
              </tr>
              <?php 
                $this->load->model('Admin_model');
                for ($i= 1; $i <= $xkandidat_senat17; $i++) {
                  $r = $this->Admin_model->get_data_kandidat_senat($i, "2017"); 
                  $e = $this->Admin_model->hitung_senat($i, "2017");
              ?>
                <tr>
                  <td class="text-center bigger"><?php echo $r->no_urut; ?></td>
                  <td class="foto">
                      <ul class="foto_paslon">
                        <li><img src="<?php echo base_url('assets');?>/img/senat/2017/senat<?php echo $r->no_urut;?>.png" style="width:40px"></li>
                      </ul>
                  </td>
                  <td class="nama-senat"><?php echo "$r->nama_kandidat";?></td>
                  <td class="text-center bigger"><?php echo "$e / $senat_sudah"; ?></td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      </div>

    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets');?>/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets');?>/bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets');?>/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets');?>/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets');?>/dist/js/demo.js"></script>
<!-- FLOT CHARTS -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.min.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.resize.min.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.pie.min.js"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url('assets');?>/plugins/flot/jquery.flot.categories.min.js"></script>
<!-- Page script -->
<script>
  $(function () {

    var donutBEM = [
      {label: "Paslon 2", data: <?php echo "$no1"; ?>, color: "#8B0000"},
      {label: "Paslon 3", data: <?php echo "$no2"; ?>, color: "#008000"},
      {label: "Paslon 4", data: <?php echo "$no3"; ?>, color: "#FF8C00"}
    ];

    $.plot("#donut-bem", donutBEM, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2.2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });

    var donut15 = [
      {label: "Calon 1", data: <?php echo "$senat15_1"; ?>, color: "#000080"},
      {label: "Calon 2", data: <?php echo "$senat15_2"; ?>, color: "#8B0000"},
      {label: "Calon 3", data: <?php echo "$senat15_3"; ?>, color: "#008000"},
      {label: "Calon 4", data: <?php echo "$senat15_4"; ?>, color: "#FF8C00"}
    ];

    $.plot("#donut-senat15", donut15, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2.2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });

    var donut16 = [
      {label: "Calon 1", data: <?php echo "$senat16_1"; ?>, color: "#000080"},
      {label: "Calon 2", data: <?php echo "$senat16_2"; ?>, color: "#8B0000"},
      {label: "Calon 3", data: <?php echo "$senat16_3"; ?>, color: "#008000"},
      {label: "Calon 4", data: <?php echo "$senat16_4"; ?>, color: "#FF8C00"}
    ];

    $.plot("#donut-senat16", donut16, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2.2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });

    var donut17 = [
      {label: "Calon 1", data: <?php echo "$senat17_1"; ?>, color: "#000080"},
      {label: "Calon 2", data: <?php echo "$senat17_2"; ?>, color: "#8B0000"},
      {label: "Calon 3", data: <?php echo "$senat17_3"; ?>, color: "#008000"},
      {label: "Calon 4", data: <?php echo "$senat17_4"; ?>, color: "#FF8C00"}
    ];

    $.plot("#donut-senat17", donut17, {
      series: {
        pie: {
          show: true,
          radius: 1,
          innerRadius: 0.5,
          label: {
            show: true,
            radius: 2.2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    });  

  });

  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
        + label
        + "<br>"
        + Math.round(series.percent) + "%</div>";
  }
</script>
</body>
</html>
