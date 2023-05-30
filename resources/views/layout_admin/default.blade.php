<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset ('admin')}}/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <!-- Navbar -->
 @include('layout_admin.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link" style="background-color: #ffffff">
      <img src="{{ asset('template/assets/img/Loker.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text" style="color:black; font-weight: bold;">KerjaGan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: #0064DA">
      <!-- Sidebar user panel (optional) -->
      <div class="mt-2 text-white">
        <div class="mt-3">
          <div>
            <h5>Filter</h5>
              <div class="slider-blue">
                    <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                    data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                    data-slider-selection="before" data-slider-tooltip="show">
              </div>
          </div>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2 text-white ">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <p>Ketersediaan</p>
          <li class="nav-item menu-open">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Magang</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Kerja Lepas</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Paruh Waktu</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Paruh Waktu</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Kontrak</label>
            </div>
          </li><br>

          <div>
            <p>Ketersediaan</p>
            <div class="">
              <p class="mb-0"> 5
                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i>
                <i class="fa fa-star" aria-hidden="true" style="color: yellow;"></i></p>
            </div>
          </div><br>



          <p>Pengalaman</p>
          <li class="nav-item menu-open">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">UI Design</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">UX Design</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Graphic Design</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Web Developer</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="lowonganCheckbox">
              <label class="form-check-label" for="lowonganCheckbox">Flutter</label>
            </div>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('judul')</h1>
          </div><!-- /.col -->

          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>

  </div>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset ('admin')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset ('admin')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset ('admin')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset ('admin')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset ('admin')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset ('admin')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset ('admin')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset ('admin')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset ('admin')}}/plugins/moment/moment.min.js"></script>
<script src="{{ asset ('admin')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset ('admin')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset ('admin')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('admin')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('admin')}}/dist/js/adminlte.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

<script>
  $(function () {
    /* BOOTSTRAP SLIDER */
    $('.slider').bootstrapSlider()

    /* ION SLIDER */
    $('#range_1').ionRangeSlider({
      min     : 0,
      max     : 5000,
      from    : 1000,
      to      : 4000,
      type    : 'double',
      step    : 1,
      prefix  : '$',
      prettify: false,
      hasGrid : true
    })
    $('#range_2').ionRangeSlider()

    $('#range_5').ionRangeSlider({
      min     : 0,
      max     : 10,
      type    : 'single',
      step    : 0.1,
      postfix : ' mm',
      prettify: false,
      hasGrid : true
    })
    $('#range_6').ionRangeSlider({
      min     : -50,
      max     : 50,
      from    : 0,
      type    : 'single',
      step    : 1,
      postfix : '°',
      prettify: false,
      hasGrid : true
    })

    $('#range_4').ionRangeSlider({
      type      : 'single',
      step      : 100,
      postfix   : ' light years',
      from      : 55000,
      hideMinMax: true,
      hideFromTo: false
    })
    $('#range_3').ionRangeSlider({
      type    : 'double',
      postfix : ' miles',
      step    : 10000,
      from    : 25000000,
      to      : 35000000,
      onChange: function (obj) {
        var t = ''
        for (var prop in obj) {
          t += prop + ': ' + obj[prop] + '\r\n'
        }
        $('#result').html(t)
      },
      onLoad  : function (obj) {
        //
      }
    })
  })
</script>
</body>
</html>
