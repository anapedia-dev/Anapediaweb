<!-- <!DOCTYPE html>
<html>
<head>
	<title> Dashboard admin</title>
</head>
<body>
	Login admin sukses!
	<br>
	tapi dashboard adminnya belum jadi :D 
	<br>
	<a href="<?=site_url()?>">kembali ke page awal</a>
	<br> 
	<a href="<?=site_url()?>">update istilah</a>
</body>
</html> -->







 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/admin/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url(); ?>assets/admin/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?=base_url(); ?>assets/admin/plugins/datatables/dataTables.bootstrap.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
    /* The Modal (background) */

    /* Modal Content */
    .modal-content {
      
      -webkit-animation-name: animatetop;
      -webkit-animation-duration: 0.4s;
      animation-name: animatetop;
      animation-duration: 0.4s
    }

    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }

    /* The Close Button */
    .close {
      color: white;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }

  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">


     <header class="main-header" style="position : fixed; width : 100%">
    <!-- Logo -->
    <a href="<?=site_url('Admin/c_login/dashboard')?>" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>PE</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ana</b>pedia</span>
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
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="<?=base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">henri</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  henri - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <h3 class="text-center">Hai Admin</h3>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href='<?=site_url('Admin/c_login/logout')?>' class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar" style="position : fixed" >
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="<?=base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>henri</p>
          </div>
        </div>
        <!-- search form -->
        
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="<?=site_url('Admin/c_login/dashboard')?>">
              <i class="fa fa-th"></i> <span>Home</span>
            </a>
          </li>
          <li class="treeview active">
            <a href="#">
              <i class="fa fa-files-o"></i>
              <span>Manage Resources</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li class="active"><a href="<?=site_url('Admin/c_login/dashboard#1')?>"><i class="fa fa-circle-o"></i>Istilah</a></li>
             
            </ul>
          </li>
          
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="padding : 85px 0 0 0">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box col-sm-12">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
           
          </div>
        </div>
        <div class="box-body">
          <h2>Selamat Datang Admin Anapedia</h2>
          

        </div>
        
<div class="box-header">
  <h3 class="box-title">Data Table With Full Features</h3>
</div>
<!-- /.box-header -->
<div class="col-xs-2 col-xs-offset-10 pull-right">
  <button id="myBtn" class="btn btn-success btn-sm" >Tambah</button>
  <p></p>
</div>
<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>User</th>
        <th>Password</th>
        <th>Nama</th>
        <th style='text-align : center'>Action(s)</th>

      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($data as $key) {
        echo "<tr>
        <td>".$key['id']."</td>
        <td>".$key['istilah']."</td>
        <td>".$key['definisi']."</td>
        <td style='text-align : center'>
        <a href='' class='btn btn-xs btn-warning edit_button' data-toggle='modal' data-target='#myModalEdit' data-user='".$key['id']."' data-pass='".$key['istilah']."' data-nama='".$key['definisi']."'>Edit</a> 
        <a href='#' class='btn btn-xs btn-danger'>Delete</a></td>
      </tr>";

    }

    ?>
  </tbody>
  <tfoot>
    <tr>
      <th>Rendering engine</th>
      <th>Browser</th>
      <th>Platform(s)</th>
    </tr>
  </tfoot>
</table>

<div class="container">
  <div class="modal modal-primary" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tambah Operator</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
            <form method="post" name="contact" action="#">
              <table class="table ">
                <tr>
                  <td><label>Username </label></td><td>: <input style="color : black" type="text" name="user"></td>
                </tr>  
                <tr>
                  <td><label>Password </label></td><td>: <input style="color : black" type="text" class="required input_field" name="pass"></td>
                </tr>
                <tr>
                  <td><label>Nama Operator </label></td><td>: <input style="color : black" type="text" class="required input_field" name="namaoperator"></td>
                </tr>


              </table>
                            <input type="submit" name="btnSubmit" class="btn btn-success" value="Simpan">
            </form>

          </div>
          <div class="modal-footer">
            <a href="<?=site_url('Admin/c_login/dashboard')?>" class="btn btn-danger">Close</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>

</div>

<div class="container">
  <div class="modal modal-primary" id="myModalEdit">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Edit Operator</h4>
          </div>
          <div class="modal-body">
            <p>One fine body&hellip;</p>
            <form method="post" name="contact" action="<?=site_url('Admin/c_login/dashboard#')?>">
              <table class="table ">
                <tr>
                  <td><label>Username Lama </label></td><td>: <input class="modal_user" style="color : black" type="text" readonly="readonly" name="usereditold"></td>
                </tr>  
                 <tr>
                  <td><label>Username </label></td><td>: <input class="modal_user" style="color : black" type="text" name="useredit"></td>
                </tr>  
                <tr>
                  <td><label>Password </label></td><td>: <input class="modal_pass" style="color : black" type="text" class="required input_field" name="passedit"></td>
                </tr>
                <tr>
                  <td><label>Nama Operator </label></td><td>: <input class="modal_nama" style="color : black" type="text" class="required input_field" name="namaoperatoredit"></td>
                </tr>


              </table>
                            <input type="submit" name="btnSubmitEdit" class="btn btn-success" value="Simpan">
            </form>

          </div>
          <div class="modal-footer">
            <a href="<?=site_url('Admin/c_login/dashboard')?>" class="btn btn-danger">Close</a>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>

</div>





        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>    <!-- /.content-wrapper -->

    <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Create the tabs -->
      <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

        <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- Home tab content -->
        <div class="tab-pane" id="control-sidebar-home-tab">
          <h3 class="control-sidebar-heading">Recent Activity</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                  <p>Will be 23 on April 24th</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-user bg-yellow"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                  <p>New phone +1(800)555-1234</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                  <p>nora@example.com</p>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                <div class="menu-info">
                  <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                  <p>Execution time 5 seconds</p>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

          <h3 class="control-sidebar-heading">Tasks Progress</h3>
          <ul class="control-sidebar-menu">
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Custom Template Design
                  <span class="label label-danger pull-right">70%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Update Resume
                  <span class="label label-success pull-right">95%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Laravel Integration
                  <span class="label label-warning pull-right">50%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                </div>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)">
                <h4 class="control-sidebar-subheading">
                  Back End Framework
                  <span class="label label-primary pull-right">68%</span>
                </h4>

                <div class="progress progress-xxs">
                  <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                </div>
              </a>
            </li>
          </ul>
          <!-- /.control-sidebar-menu -->

        </div>
        <!-- /.tab-pane -->
        <!-- Stats tab content -->
        <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        <!-- /.tab-pane -->
        <!-- Settings tab content -->
        <div class="tab-pane" id="control-sidebar-settings-tab">
          <form method="post">
            <h3 class="control-sidebar-heading">General Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Report panel usage
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Some information about this general settings option
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Allow mail redirect
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Other sets of options are available
              </p>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Expose author name in posts
                <input type="checkbox" class="pull-right" checked>
              </label>

              <p>
                Allow the user to show his name in blog posts
              </p>
            </div>
            <!-- /.form-group -->

            <h3 class="control-sidebar-heading">Chat Settings</h3>

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Show me as online
                <input type="checkbox" class="pull-right" checked>
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Turn off notifications
                <input type="checkbox" class="pull-right">
              </label>
            </div>
            <!-- /.form-group -->

            <div class="form-group">
              <label class="control-sidebar-subheading">
                Delete chat history
                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
              </label>
            </div>
            <!-- /.form-group -->
          </form>
        </div>
        <!-- /.tab-pane -->
      </div>
    </aside>
    <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="<?=base_url(); ?>assets/admin/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?=base_url(); ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url(); ?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url(); ?>assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url(); ?>assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url(); ?>assets/admin/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="<?=base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url(); ?>assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    
  });
</script>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script type="text/javascript">
  $(document).on("click",'.edit_button',function(e){
    var user = $(this).data('user');
    var pass = $(this).data('pass');
    var nama = $(this).data('nama');

    $(".modal_user").val(user);
    $(".modal_pass").val(pass);
    $(".modal_nama").val(nama);

  });
</script>
</body>
</html>
