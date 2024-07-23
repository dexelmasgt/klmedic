<!-- Barra de navegación superior -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Botón para abrir la sidebar -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" title="Expandir Menú Lateral"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search" title="Buscar"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Escribe el texto que deseas buscar" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search" title="Buscar"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
     

      

      <!-- Perfil -->
      <li class="nav-item dropdown"> 
        <a class="nav-link" data-toggle="dropdown" href="#">
          <div class="dropdown-menu-md  ml-1">  
            <img width="30" height="30" class="rounded-circle elevation-1 " src="vistas/dist/img/user2-160x160.jpg" alt="" title="Opciones de perfil">
            <span> Dexel Mas </span>
          <i class="fa fa-angle-down ml-2 opacity-8"></i></div>
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="padding: 5px;">
        <span class="dropdown-header">Tipo de usuario: <strong>Administrador</strong></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-3"></i> 4 mensajes sin leer

          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-calendar-times mr-3"></i> 8 Productos vencidos
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-exclamation-circle mr-3"></i> 3 Stock bajo
          </a>
          <div class="dropdown-footer"></div>
          <a class="btn btn-outline-warning btn-sm" href="#"><i class="fa fa-user"></i> Ver perfil</a> <a class="btn btn-outline-danger btn-sm" style="float:right;" href="salir" class="dropdown-item"><i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a> 
          
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt" title="Pantalla Completa"></i>
        </a>
      </li>
      
      <!-- BOTON PARA PERSONALIZACION EN DESARROLLO -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
        <i class="fa-solid fa-sliders" title="Opciones"></i>
        </a>
      </li> -->
    </ul>
  </nav>
  <!-- /.navbar -->