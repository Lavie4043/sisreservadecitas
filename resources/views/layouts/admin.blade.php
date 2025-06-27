<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de reserva de citas médicas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">
  <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('dist/css/adminlte.min.css?v=3.2.0')}}">
<script data-cfasync="false" nonce="ac3f95c6-16a4-4352-a368-ac543b5e2236">try{(function(w,d){!function(j,k,l,m){if(j.zaraz)console.error("zaraz is loaded twice");else{j[l]=j[l]||{};j[l].executed=[];j.zaraz={deferred:[],listeners:[]};j.zaraz._v="5850";j.zaraz._n="ac3f95c6-16a4-4352-a368-ac543b5e2236";j.zaraz.q=[];j.zaraz._f=function(n){return async function(){var o=Array.prototype.slice.call(arguments);j.zaraz.q.push({m:n,a:o})}};for(const p of["track","set","debug"])j.zaraz[p]=j.zaraz._f(p);j.zaraz.init=()=>{var q=k.getElementsByTagName(m)[0],r=k.createElement(m),s=k.getElementsByTagName("title")[0];s&&(j[l].t=k.getElementsByTagName("title")[0].text);j[l].x=Math.random();j[l].w=j.screen.width;j[l].h=j.screen.height;j[l].j=j.innerHeight;j[l].e=j.innerWidth;j[l].l=j.location.href;j[l].r=k.referrer;j[l].k=j.screen.colorDepth;j[l].n=k.characterSet;j[l].o=(new Date).getTimezoneOffset();if(j.dataLayer)for(const t of Object.entries(Object.entries(dataLayer).reduce(((u,v)=>({...u[1],...v[1]})),{})))zaraz.set(t[0],t[1],{scope:"page"});j[l].q=[];for(;j.zaraz.q.length;){const w=j.zaraz.q.shift();j[l].q.push(w)}r.defer=!0;for(const x of[localStorage,sessionStorage])Object.keys(x||{}).filter((z=>z.startsWith("_zaraz_"))).forEach((y=>{try{j[l]["z_"+y.slice(7)]=JSON.parse(x.getItem(y))}catch{j[l]["z_"+y.slice(7)]=x.getItem(y)}}));r.referrerPolicy="origin";r.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(j[l])));q.parentNode.insertBefore(r,q)};["complete","interactive"].includes(k.readyState)?zaraz.init():j.addEventListener("DOMContentLoaded",zaraz.init)}}(w,d,"zarazData","script");window.zaraz._p=async bs=>new Promise((bt=>{if(bs){bs.e&&bs.e.forEach((bu=>{try{const bv=d.querySelector("script[nonce]"),bw=bv?.nonce||bv?.getAttribute("nonce"),bx=d.createElement("script");bw&&(bx.nonce=bw);bx.innerHTML=bu;bx.onload=()=>{d.head.removeChild(bx)};d.head.appendChild(bx)}catch(by){console.error(`Error executing script: ${bu}\n`,by)}}));Promise.allSettled((bs.f||[]).map((bz=>fetch(bz[0],bz[1]))))}bt()}));zaraz._p({"e":["(function(w,d){})(window,document)"]});})(window,document)}catch(e){throw fetch("/cdn-cgi/zaraz/t"),e;};</script></head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<!--Bootstrap -->

<!-- jQuery -->
<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>

<!-- fullcalendar -->

<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js'></script>

<script src="{{url('fullcalendar/es.global.js')}}"></script>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/admin')}}" class="nav-link">Sistema de reserva de citas médicas</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!--Sweetalert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- DataTables -->
  <link rel="stylesheet" href="{{url('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{url('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  
  <link rel="stylesheet" href="{{url('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  
  
 
 
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{url("")}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">DRA AURELIA GARCÍA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          

          @can('admin.usuarios.index')
          <li class="nav-item">
            <a href="{{url('/admin/configuraciones')}}" class="nav-link active">
            
            
            <i class="fa fa-cog" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
              <p>
                  Configuraciones
                  
                
                
              </p>
            </a>
            
          </li>
          @endcan


          @can('admin.usuarios.index')
          <li class="nav-item">
            <a href="#" class="nav-link active">
            
            
            <i class="fa fa-user" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
              <p>
                  Usuarios
                  <i class="right fas fa-angle-left"></i>
                
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/usuarios/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/usuarios')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>
                </a>
              </li>
            </ul>
          </li>
          @endcan

      @can('admin.secretarias.index')
        <li class="nav-item">
            <a href="#" class="nav-link active">
            
            
         
            <i class="fa-solid fa-book-open-reader" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
            
              <p>
                  Secretarias/os
                  <i class="right fas fa-angle-left"></i>
                  
                
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/secretarias/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de secretarias/os</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/secretarias')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de secretarias/as</p>
                </a>
              </li>
            </ul>
          </li>
      @endcan

      @can('admin.pacientes.index')
        <li class="nav-item">
            <a href="#" class="nav-link active">
    
               
            <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
            
              <p>
                  Pacientes
                  <i class="right fas fa-angle-left"></i>
                  
                
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/pacientes/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/pacientes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Pacientes</p>
                </a>
              </li>
            </ul>
          </li>
      @endcan

      @can('admin.consultorios.index')
        <li class="nav-item">
            <a href="#" class="nav-link active">
    
               
            <i class="fa fa-building" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
            
              <p>
                  Consultorios
                  <i class="right fas fa-angle-left"></i>
                  
                
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/consultorios/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Consultorios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/consultorios')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Consultorios</p>
                </a>
              </li>
            </ul>
          </li>
      @endcan

      @can('admin.doctores.index')
        <li class="nav-item">
            <a href="#" class="nav-link active">
    
               
            <i class="fa fa-user-md" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
            
              <p>
                  Doctores
                  <i class="right fas fa-angle-left"></i>
                  
                
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/doctores/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación de Doctores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/doctores')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Doctores</p>
                </a>
              </li>
            </ul>
          </li>

      @endcan
          
      @can('admin.horarios.index')
          <li class="nav-item">
            <a href="#" class="nav-link active">
    
               
            <i class="fa fa-calendar" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
            
              <p>
                  Horarios
                  <i class="right fas fa-angle-left"></i>
                  
                
                
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/horarios/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación Horarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/horarios')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Horarios</p>
                </a>
              </li>
            </ul>
          </li>
      @endcan


      @can('admin.historial.index')
          <li class="nav-item">
            <a href="#" class="nav-link active">
    
               
            <i class="fa fa-file-text" aria-hidden="true" style="font-size: 10px; color: white;"></i>
            
            
              <p>
                  Historial
                  <i class="right fas fa-angle-left"></i>
                  
                
                
              </p>
            </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/historial/create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creación Historial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/historial')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Historiales</p>
                </a>
              </li>
            </ul>
          </li>
      @endcan

      
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
          

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" style="background-color: red" id0=""
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 

              
             <i class="fa fa-window-close" aria-hidden="true"></i> 
            
              <p>
                Cerrar sesión
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>

          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  @if( (($message = Session::get('mensaje')) && ($icono = Session::get('icono'))) )
                <script>
                Swal.fire({
                  position: "top-end",
                  icon: "{{$icono}}",
                title: "{{$message}}",
                showConfirmButton: false,
                timer: 4500
                });

          </script>

                @endif

  <div class="content-wrapper">
    <div class="container">
        @yield('content')
    </div>
  </div>

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
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->


<!-- Bootstrap 4 -->
<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Data Tables -->
<script src="{{url('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>




<!-- AdminLTE App -->
<script src="{{url('dist/js/adminlte.min.js?v=3.2.0')}}"></script>
<script defer src="{{url('https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015')}}" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"933e854a8b14fd72","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.4.0-1-g37f21b1","token":"2437d112162f4ec4b63c3ca0eb38fb20"}' crossorigin="anonymous"></script>
</body>
</html>