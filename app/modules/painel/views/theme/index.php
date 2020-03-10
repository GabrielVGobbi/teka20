
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ste Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini text-sm sidebar-collapse">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
      <ul class="navbar-nav">
        <!--<li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>-->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="../../index3.html" class="nav-link">Meus Looks</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Meu Calendario</a>
        </li>
      </ul>



    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar elevation-4 sidebar-light-info">
      <!-- Brand Logo -->
      <a href="<?php echo BASE_URL_PAINEL;?>" class="brand-link">
        <img src="<?php echo BASE_URL;?>app/assets/images/logS.png"
        alt="logo"
        class="brand-image">
        <span class="brand-text font-weight-light">SteAdmin</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item has-treeview">
              <a href="<?php echo BASE_URL_PAINEL;?>clientes" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Clientes
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>

            </li>
          <!--<li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
        </ul>
      </nav>
    </div>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> <?php echo ucfirst($titlePage); ?> </h1>
          </div>
          <!--<div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>-->
        </div>
      </div>
    </section>

    <section class="content">
      <?php $this->loadView($viewName, $viewData, false); ?>
    </section>
    
  </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.0
    </div>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/filterizr/jquery.filterizr.min.js"></script>
<script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/dist/js/adminlte.min.js"></script>
<script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/dist/js/demo.js"></script>
</body>
</html>
