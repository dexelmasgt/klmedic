<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios</h1><p class="text-muted">Administración de los usuarios con acceso al sistema.</p>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Viernes, 5 de enero de 2024 14:53 Hrs.</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <button class="btn btn-outline-success btn-md" data-toggle="modal" data-target="#modalAgregarUsuario"><i class="fa fa-plus"></i> Nuevo Usuario</button>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        
        
        <div class="card-body p-0 table-responsive">
          <table class="table table-striped projects table-hover">
            <head>
              <tr>
                <th></th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Perfil</th>
                <th>Sucursales</th>
                <th>Estado</th>
                <th>Último Login</th>
                <th></th>
              </tr>
            </head>
              <tr>
                <td><img src="vistas/dist/img/avatar5.png" class="img-thumbnail rounded-circle" width="60px" alt="Foto de perfil"></td>
                <td>
                  Dexel Jorge Manuel Mas Morfín
                  <br/>
                  <small>dmas.dj@gmail.com</small>
                </td>
                <td>dmas</td>
                <td>Administrador</td>
                <td>
                  <small>Sucursal 1, Sucursal 2, Sucursal 3</small>
                </td>
                <td class="project-state">
                  <span class="badge badge-success btn btn-success">Activo</span>
                </td>
                <td>2024-10-01 11:09:35</td>
                <td>
                  <div class="project-actions text-right">
                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-outline-info btn-sm"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                  </div>
                </td>
              </tr>

              <tr>
                <td><img src="vistas/dist/img/avatar4.png" class="img-thumbnail rounded-circle" width="60px" alt="Foto de perfil"></td>
                <td>
                  Kenny Arturo García Veliz
                  <br/>
                  <small>kgarcia@cempro.com</small>
                </td>
                <td>kgarcia</td>
                <td>Administrador</td>
                <td>
                  <small>Sucursal 1, Sucursal 3</small>
                </td>
                <td class="project-state">
                  <span class="badge badge-danger btn btn-danger">Inactivo</span>
                </td>
                <td>2024-10-01 13:29:30</td>
                <td>
                  <div class="project-actions text-right">
                    <button class="btn btn-outline-primary btn-sm"><i class="fa fa-eye"></i></button>
                    <button class="btn btn-outline-info btn-sm"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i></button>
                  </div>
                </td>
              </tr>
           

          </table>
          
          
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

      

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- MODAL AGREGAR USUARIO -->
<!-- Modal -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <form role="form" method="post" enctype="multipart/form-data">
      <div class="modal-header" style="background:#28a745; color:white">
        <h5 class="modal-title" id="exampleModalLabel">Agregar un usuario al sistema</h5>
      </div>
      <div class="modal-body">
        <div class="box-body">
          <div class="form-group">
            <div class="row">
              <div class="input-group col-md-6">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Nombre(s)" name="nuevoNombre" >
              </div>
              <div class="input-group col-md-6">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Apellido(s)" name="nuevoApellido" >
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="row">
              <div class="input-group col-md-4">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-id-card"></span>
                  </div>
                </div>
                <select class="form-control input-lg" name="nuevoTipoDoc" id="TipoDoc" >
                  <option value="dpi">DPI</option>
                  <option value="nit">NIT</option>
                  <option value="pasaporte">Pasaporte</option>
                </select>
              </div>
              <div class="input-group col-md-5">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-id-card"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Número de documento" name="nuevoNumDoc" >
              </div>
              <div class="input-group col-md-3">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-birthday-cake"></span>
                  </div>
                </div>
                <input type="date" class="form-control input-lg" value =""/>       
              </div>
            </div>
          </div> 
          <hr />
          <div class="form-group">
            <div class="row">
              <div class="input-group col-md-5">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Nombre de Usuario" name="nuevoUser" >
              </div>
              <div class="input-group col-md-7">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Correo Electrónico" name="nuevoCorreo" >
              </div>
            </div>
          </div>           
          <div class="form-group">
            <div class="row">
              <div class="input-group col-md-6">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-key"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Contraseña" name="nuevoPass" >
              </div>
              <div class="input-group col-md-6">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-key"></span>
                  </div>
                </div>
                <input type="text" class="form-control input-lg" placeholder="Repita contraseña" name="nuevoPass2" >
              </div>
            </div>
          </div> 
          <hr />  
          <div class="form-group">
            <div class="row">
              <div class="input-group col-md-4">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
                <select class="form-control input-lg" name="nuevoRol" id="Rol" required>
                  <option value="administrador">Administrador</option>
                  <option value="vendedor">Vendedor</option>
                  <option value="especial">Especial</option>
                </select>
              </div>
              
              <div class="input-group col-md-3">
                <div class="input-group-append">
                  <div class="input-group-text text-success">
                    <span class="fas fa-info-circle"></span>
                  </div>
                </div>
                <select class="form-control input-lg" name="nuevoEstado" id="Estado" >
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
                </select>    
              </div>
            </div>
          </div> 
          <p>Este usuario se creará en el sistema como "Inactivo". Para activarlo debe cambiar el estado en la tabla.</p>
        </div>
        <hr />
          <div class="form-group">
            <div class="row">
              <div class="panel col-md-6">
                <b>Subir Foto</b>
                <p class="help-block">Peso máximo del archivo: 200 MB</p>
                
              </div>
              <div class="col-md-6">
              <img src="vistas/dist/img/anonymous.png" class="img-thumbnail"width="100px">
                <input type="file" class="form-control" id="nuevaFoto" name="nuevaFoto" value="Subir">
              </div>
            </div>
          </div> 
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-outline-success">Guardar</button>
      </div>

      <?php
        $crearUsuario = new ControladorUsuarios();
        $crearUsuario -> ctrCrearUsuario();

      ?>

      </form>
    </div>
  </div>
</div>
