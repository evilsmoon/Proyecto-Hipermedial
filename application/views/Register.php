<div class="register-box">
  <div class="register-logo">
  <img src="<?php echo base_url('assets/img/lOGO_2.png')?>" alt="logo_2" width="40%">
    <a href="<?php echo base_url('index.php/Register') ?>"><b>Registrandome </b>Ando </a>
    
  </div>

  <div class="content">
  <div class="alert alert-danger" id="errorLogin" hidden="true"></div>

    <!-- Pills navs -->
    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Empleado</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Cliente</a>
      </li>
    </ul>
    <!-- Pills navs -->

    <!-- Pills content -->
    <div class="tab-content">
      <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
        <form id="registerformEmployee" action="<?php echo base_url(); ?>index.php/Register/createAccountEmployee" method="POST">

          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerNameE" name='registerNameE' class="form-control" placeholder="Name"/>
            <label class="form-label" for="registerNameE">Nombre</label>
          </div>

          <!-- Username input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerUsernameE" name='registerUsernameE' class="form-control" placeholder=""/>
            <label class="form-label" for="registerUsernameE">Apellido</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="registerEmailE" name='registerEmailE' class="form-control" />
            <label class="form-label" for="registerEmailE">Correo</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerPasswordE" name='registerPasswordE' class="form-control" />
            <label class="form-label" for="registerPasswordE">Contraseña</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPasswordE" name='registerRepeatPasswordE' class="form-control" />
            <label class="form-label" for="registerRepeatPasswordE">Repite tu Contraseña</label>
          </div>
          <!-- Country input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCountryE" name='registerCountryE' class="form-control" />
            <label class="form-label" for="registerCountryE">País </label>
          </div>
          <!-- City input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCityE" name='registerCityE' class="form-control" />
            <label class="form-label" for="registerCityE">Ciudad</label>
          </div>

          <!-- Phone input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerPhoneE" name='registerPhoneE' class="form-control" />
            <label class="form-label" for="registerPhoneE">Teléfono Celular </label>
          </div>

          <!-- Service input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerServiceE" name='registerServiceE' class="form-control" />
            <label class="form-label" for="registerServiceE">Servicio</label>
          </div>

          <!-- Year_exp input -->
          <div class="form-outline mb-4">
            <input type="number" id="registerYear_ExpE" name='registerYear_ExpE' class="form-control" />
            <label class="form-label" for="registerYear_ExpE">Años de Experiencia</label>
          </div>

          <!-- Description input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="registerDescriptionE" name='registerDescriptionE' rows="4"></textarea>
            <label class="form-label" for="form4Example3">Descripción</label>
          </div>


          <!-- Checkbox -->
<!-- 
          <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheckE" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheckE">
              I have read and agree to the terms
            </label>
          </div> 
        
        -->
          <!-- Submit button -->
          <button id='btn-register-employee' type="submit" class="btn btn-primary btn-block mb-4">Registrase en Kmellando</button>
          <a href="<?php echo base_url('index.php');?>" class="text-center">Volver a inicio</a> 
          <!-- Register buttons -->
          <!-- <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
          </div> -->

        </form>
      </div>


      <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form id="registerformClient" action="<?php echo base_url();?>index.php/Register/createAccountClient" method="POST">
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerName" name='registerName' class="form-control" />
            <label class="form-label" for="registerName">Nombre</label>
          </div>

          <!-- Last_name input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerLast_name" name='registerLast_name' class="form-control" />
            <label class="form-label" for="registerLast_name">Apellido</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="registerEmail" name='registerEmail' class="form-control" />
            <label class="form-label" for="registerEmail">Correo</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerPassword" name='registerPassword' class="form-control" />
            <label class="form-label" for="registerPassword">Contraseña</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" name='registerRepeatPassword' class="form-control" />
            <label class="form-label" for="registerRepeatPassword">Repetir Contraseña</label>
          </div>

          <!-- Phone input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerPhone" name='registerPhone' class="form-control" />
            <label class="form-label" for="registerPhone">Teléfono Celular</label>
          </div>

          <!-- Country input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCountry" name='registerCountry' class="form-control" />
            <label class="form-label" for="registerCountry">País</label>
          </div>

          <!-- City input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCity" name='registerCity' class="form-control" />
            <label class="form-label" for="registerCity">Ciudad</label>
          </div>

          <!-- Checkbox -->
          <!-- <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheck">
              I have read and agree to the terms
            </label>
          </div> -->

          <!-- Submit button -->
          <button d='btn-register-client' type="submit" class="btn btn-primary btn-block mb-3">Registrarse en Kmellando</button>
          
          <!-- Register buttons -->
          <div class="text-center">
        
            <p><a href="<?php echo base_url('index.php');?>" class="text-center">Volver a inicio</a> </p>
          </div>
        </form>
      </div>
    </div>
    <!-- Pills content -->
  </div>
  <!-- /.content -->
</div>
<!-- /.register-box -->