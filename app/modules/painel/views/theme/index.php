<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ste Admin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>
    var BASE_URL_PAINEL = '<?php echo BASE_URL_PAINEL; ?>';
  </script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/jquery/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/js/script.js"></script>

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/template.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/select2/css/select2.min.css">
  <link href="<?php echo BASE_URL; ?>node_modules/toastr/build/toastr.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
</head>

<body class="hold-transition text-sm  layout-top-nav">
  <div class="wrapper">


    <nav class="main-header navbar navbar-expand-md navbar-light navbar-dark">
      <div class="container">
        <a href="<?php echo BASE_URL_PAINEL; ?>" class="navbar-brand">
          <img src="<?php echo BASE_URL; ?>app/assets/images/logo.svg" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Style Admin</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="<?php echo BASE_URL_PAINEL; ?>clientes" class="nav-link">Clientes</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Relátorio</a>
            </li>

          </ul>
        </div>

        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <!-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="fas fa-comments"></i>
              <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <a href="#" class="dropdown-item">
                <div class="media">
                  <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">Call me whenever you can...</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <div class="media">
                  <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">I got your message bro</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <div class="media">
                  <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                  <div class="media-body">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                    </h3>
                    <p class="text-sm">The subject goes here</p>
                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                  </div>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
              <i class="far fa-bell"></i>
              <span class="badge badge-warning navbar-badge">15</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <span class="dropdown-header">15 Notifications</span>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-envelope mr-2"></i> 4 new messages
                <span class="float-right text-muted text-sm">3 mins</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-users mr-2"></i> 8 friend requests
                <span class="float-right text-muted text-sm">12 hours</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <i class="fas fa-file mr-2"></i> 3 new reports
                <span class="float-right text-muted text-sm">2 days</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
            </div>
          </li>-->
          <li class="nav-item">
            <a class="nav-link" href="<?php echo BASE_URL_PAINEL; ?>config"><i class="fas fa-th-large"></i></a>
          </li>
        </ul>
      </div>
    </nav>



    <div class="content-wrapper">
      <section class="content-header">
        <div class="container">
          <div class="row mb-2">
            <div class="col-sm-12 text-center">
              <h1><?php echo isset($tableInfo['cli_nome']) ? ucfirst($tableInfo['cli_nome']) : ucfirst($titlePage); ?> </h1>
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
        <div class="container">
          <?php $this->loadView($viewName, $viewData, false); ?>
        </div>
      </section>

    </div>

    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b>Version</b> 0.0.0
      </div>
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <link href="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.css">
  <script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/moment/moment.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/filterizr/jquery.filterizr.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/dist/js/adminlte.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/js/parametros/<?php echo $viewData['pageController']; ?>.js"></script>
  <script src="<?php echo BASE_URL; ?>node_modules/toastr/build/toastr.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/select2/js/select2.full.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/dist/js/demo.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
  <script src="<?php echo BASE_URL; ?>app/assets/css/AdminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
  <?php if (isset($_SESSION['alert']) && !empty($_SESSION['alert'])) :  ?>
    <script>
      $(function() {
        toastr.<?php echo $_SESSION['alert']['tipo']; ?>('<?php echo $_SESSION['alert']['mensagem'] ?>');
      });
    </script>
  <?php unset($_SESSION['alert']);
  endif; ?>

</body>

</html>