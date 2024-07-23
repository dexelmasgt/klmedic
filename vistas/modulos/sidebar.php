<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-warning elevation-3">
    
<!-- Logotipo -->
    <a href="dashboard" class="brand-link">
      <img src="vistas/img/plantilla/EsferaKL.png" alt="KLShop Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
      <!-- <span class="brand-text"><img src="vistas/img/plantilla/LogoKLHori.png" alt="KLShop Logo" style="height: 30px;"></span>-->
      <span class="brand-text">KL Shop <small class="font-weight-light">by KreatifLab</small></span> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      
      <!-- Buscar -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Buscar" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Menú -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Para agregar iconos a los links usar la clase .nav-icon con font-awesome o cualquier otra librería -->
          <li class="nav-item">
            <a href="dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
              </p>
            </a> 
          </li>
          <li class="nav-item">
            <a href="usuarios" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="categorias" class="nav-link">
              <ion-icon class="nav-icon" name="grid"></ion-icon>
              <p>
                Categorías
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="productos" class="nav-link">
              <i class="nav-icon fa fa-product-hunt"></i>  
              <p>
                Productos
                <span class="badge badge-danger right" title="Tienes 8 productos vencidos.">8</span>
                <span class="badge badge-warning right" title="Tienes 3 productos con stock bajo.">3</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="clientes" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Clientes
              </p>
            </a>
            
          </li>
          
          <li class="nav-item">
            <a href="ventas" class="nav-link">
              <i class="nav-icon fa-solid fa-cash-register"></i>
              <p>
                Ventas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pos1" class="nav-link">
                  <i class="far fa-plus nav-icon"></i>
                  <p>Nueva venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ver-ventas" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reportes-ventas" class="nav-link">
                <i class="nav-icon fa-solid fa-file-invoice"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="rentas" class="nav-link">
            <i class="nav-icon fa fa-retweet"></i>
              <p>
                Rentas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nueva-renta" class="nav-link">
                  <i class="far fa-plus nav-icon"></i>
                  <p>Nueva renta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ver-rentas" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver rentas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reportes-rentas" class="nav-link">
                <i class="nav-icon fa-solid fa-file-invoice"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="cotizaciones" class="nav-link">
              <ion-icon class="nav-icon" name="reader"></ion-icon>  
              <p>
                Cotizaciones
                <i class="fas fa-angle-left right"></i>
                <span class="right badge badge-success" title="Explora las nuevas características.">Nuevo</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nueva-cotizacion" class="nav-link">
                  <i class="far fa-plus nav-icon"></i>
                  <p>Nueva cotización</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ver-cotizaciones" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver cotizaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reportes-cotizaciones" class="nav-link">
                <i class="nav-icon fa-solid fa-file-invoice"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="despachos" class="nav-link">
            <i class="nav-icon fa-solid fa-truck-fast"></i>
              <p>
                Despachos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="nuevo-despacho" class="nav-link">
                  <i class="far fa-plus nav-icon"></i>
                  <p>Nuevo despacho</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ver-despachos" class="nav-link">
                  <i class="far fa-eye nav-icon"></i>
                  <p>Ver despachos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reportes-despachos" class="nav-link">
                <i class="nav-icon fa-solid fa-file-invoice"></i>
                  <p>Reportes</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">OTRAS FUNCIONES</li>
          <li class="nav-item">
            <a href="agenda" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Agenda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="galeria" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Galería
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="mensajes" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mensajes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bandeja-de-entrada" class="nav-link">
                  <i class="fa fa-inbox nav-icon"></i>
                  <p>Bandeja de Entrada</p>
                  <span class="badge badge-success right" title="Tienes 4 mensajes sin leer.">4</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="nuevo-mensaje" class="nav-link">
                  <i class="fa fa-pencil-square-o nav-icon"></i>
                  <p>Redactar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="documentos" class="nav-link">
              <i class="nav-icon fa fa-file-text"></i>
              <p>
                Documentos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="facturas" class="nav-link">
                <i class="nav-icon fa fa-file text-danger"></i>
                <p class="text">Facturas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="tickets" class="nav-link">
                <i class="nav-icon text-warning fa-solid fa-receipt"></i>
                <p>Tickets</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="vales" class="nav-link">
              <i class="nav-icon fa-solid fa-money-check text-info"></i>
                <p>Vales</p>
              </a>
            </li>
            </ul>
          </li> 
          
          <li class="nav-item">
            <a href="configuracion" class="nav-link">
              <i class="nav-icon fa-solid fa-sliders"></i>
              <p>
                Configuración
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="empresa" class="nav-link">
                <ion-icon class="nav-icon" name="storefront"></ion-icon>
                  <p>Empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="acerca-de" class="nav-link">
                  <i class="fa fa-info nav-icon"></i>
                  <p>Acerca de</p>
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