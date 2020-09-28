<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Adlatere| Página Inicio</title>
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link rel="stylesheet" href="/css/app.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-navbar" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>
      </form>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">AdLATERE</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../img/profile.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            {{-- <a href="#" class="d-block">{{ Auth::user()->name }}</a> --}}
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
          data-accordion="false">

          <li class="nav-item">
            <a href="/" class="{{ Request::path() === '/' ? 'nav-link active' : 'nav-link' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>Inicio</p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fa fa-university"></i>
                <p>Jurisdicciones<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  {{-- {{ route('uj.index') }} --}}
                <a href="#"
                        class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                        <i class="fa fa-graduation-cap nav-icon"></i>
                        <p>Unidades Judiciales</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="notas/favoritas"
                        class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                        <i class="fa fa-copy nav-icon"></i>
                        <p>Materias</p>
                    </a>
                </li> --}}
               
            </ul>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Personas<i class="fas fa-angle-left right"></i></p>
          </a>
          <ul class="nav nav-treeview">
            {{-- {{ route('personas.listar') }} --}}
              <li class="nav-item">
              <a href="#"
                      class="{{ Request::path() === 'notas/todas' ? 'nav-link active' : 'nav-link' }}">
                      <i class="fa fa-user nav-icon"></i>
                      <p>Clientes</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="notas/favoritas"
                      class="{{ Request::path() === 'notas/favoritas' ? 'nav-link active' : 'nav-link' }}">
                      <i class="fa fa-user-secret nav-icon"></i>
                      <p>Usuarios del Sistema</p>
                  </a>
              </li>
             
          </ul>
      </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              {{-- <h1 class="m-0 text-dark">Página de Inicio</h1> --}}
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        @yield('content')
    </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Desarrollado por SoftCratech  </strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="/js/app.js"></script>
  
</body>

</html>