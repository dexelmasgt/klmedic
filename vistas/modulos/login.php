<div class="login-page" id="back">
    <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary elevation-3">
        <div class="card-header text-center text-primary">
        <!-- <a href="#" class="h1"><b class="text-warning">KL</b>Shop<small class="text-muted text-lg">v2</small></a> -->
        <h1><b class="text-warning">KL</b>Medic<small class="text-muted text-lg">v1.0</small></h1>
        </div>
        <div class="card-body">
        <p class="login-box-msg">Ingresa tu usuario y contraseña para acceder al sistema.</p>

        <form method="post">
            
            <div class="input-group mb-3">
            <div class="input-group-append">
                <div class="input-group-text text-primary">
                <span class="fas fa-user"></span>
                </div>
            </div>
            <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>
            
            </div>
            <div class="input-group mb-3">
            <div class="input-group-append">
                <div class="input-group-text text-primary">
                <span class="fas fa-key"></span>
                </div>
            </div>
            <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" required>
            
            </div>
            <div class="row">
            <div class="col-8">
                
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-warning btn-block text-primary"><strong>Ingresar</strong></button>
            </div>
            <!-- /.col -->
            </div>
            <?php
                $login = new ControladorUsuarios();
                $login -> ctrIngresoUsuario();
            ?>  
        </form>

        <div class="social-auth-links text-center mt-2 mb-3">
            
        </div>
        <!-- /.social-auth-links -->

        <!-- RECUPERAR CONTRASEÑA EN DESARROLLO 
            <p class="mb-1">
                <a class="text-danger" href="forgot-password.html">Recuperar contraseña</a>
            </p> -->
            <p class="text-center text-primary">Powered by:</p>
            
            <p class="text-center"><a href="http://kreatiflab.com"> <img src="vistas/img/plantilla/LogoHorizontalKL2.png" width="300px"></a></p>
        <!-- <p class="mb-0">
            <a href="register.html" class="text-center">Register a new membership</a>
        </p> -->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
    </div>
    <!-- /.login-box -->
</div>
<!-- /.back -->