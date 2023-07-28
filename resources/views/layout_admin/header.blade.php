<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style="font-weight:bold;">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('monitor') }}" class="nav-link ml-5"><i class="fas fa-briefcase"></i> Lowongan Pekerjaan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('chat') }}" class="nav-link ml-5"><i class="fa fa-comment" aria-hidden="true"></i> Pesan</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('lamaran') }}" class="nav-link ml-5"><i class="fa fa-file" aria-hidden="true"></i> Lamaran</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <a class="btn btn-secondary" href="{{ route('logout') }}">Logout</a>

    </ul>
  </nav>
