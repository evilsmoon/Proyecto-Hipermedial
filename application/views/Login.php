<div class="login-box">
    <div class="login-logo">
        
        <img src="<?php echo base_url('assets/img/lOGO_2.png')?>" alt="logo_2" width="40%">
        <a href="../../index2.html"><b>Iniciar</b>Sesión!</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Ingresa tus credenciales de Kmellando</p>

            <form id="loginform" action="<?php echo base_url();?>index.php/Login/ingresar" method="POST">
                <div class="input-group mb-3">
                    <input id='txt_email' name='txt_email' type="email" class="form-control" placeholder="Correo Electrónico">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input id='txt_password' name='txt_password' type="password" class="form-control" placeholder="Contraseña">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <button id="btn-ingresar" type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!-- <div class="alert alert-danger" id="errorLogin" hidden="true"></div>
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div> -->
            <!-- /.social-auth-links -->

            <!-- <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p> -->
            <p class="mb-0">
                <a href="<?php echo base_url('index.php/Register');?>" class="text-center">Registrate con Nosotros</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->