<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGITRAMS | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">


  <!-- Header -->
  <?php $this->load->view('admin/include/header.php');?>  

  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/include/left.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
     <!-- Content Header (Page header) -->
    <?php $this->load->view('admin/include/nav.php');?>    

    <!-- Main content -->
    <section class="content">
     
      <!-- /.row -->
        <!-- Main row -->
          <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Nuevo Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('slider/add');?>">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nombre</label>
                  <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo set_value('nombres');?>" placeholder="Ingrese el nombre">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Descripción</label>
                  <textarea name="descripcion" class="form-control" id="descripcion" name="descripcion" /><?php echo set_value('descripcion');?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Imagen</label>
                  <input type="file" id="imagen" name="imagen" />
                  <p class="help-block">Formato .JPG - Tamaño recomendable: 1920x1080</p>
                </div>

                <div class="form-group">
                  <label for="exampleInput">URL</label>
                  <input type="text" class="form-control" id="url" name="url" value="<?php echo set_value('url');?>" placeholder="Ingrese la URL"/>
                </div>
              
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
      

                         <?php 
                              if (validation_errors()): 
                                echo '<div class="alert alert-danger">';
                                echo '<a class="close" data-dismiss="alert">×</a>';
                                echo validation_errors(); 
                                echo '</div>';
                              endif; 
                        ?>  

                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" onclick="window.location='<?php echo base_url('slider');?>'" class="btn btn-primary">Cancelar</button>                
              </div>
            </form>
          </div>
        </div>
        </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->  
  <?php $this->load->view('admin/include/footer.php');?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/admin/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
>
<!-- Slimscroll -->
<script src="<?php echo base_url();?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/admin/dist/js/demo.js"></script>
</body>
</html>
