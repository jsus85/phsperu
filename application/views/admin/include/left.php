  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nombres');?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li >
          <a href="<?php echo base_url('slider');?>">
            <i class="fa fa-files-o"></i>
            <span>Slider Principal</span>            
          </a>          
        </li>
        <li >
          <a href="<?php echo base_url('contenidos');?>">
            <i class="fa fa-files-o"></i>
            <span>Contenidos</span>
          </a>          
        </li>                
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>