<div class="register-box">
  <div class="register-logo">
    <a href="<?php echo base_url('assets/') ?>index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="content">
  <div class="alert alert-danger" id="errorLogin" hidden="true"></div>

    <!-- Pills navs -->
    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Employee</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Client</a>
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
            <label class="form-label" for="registerNameE">Name</label>
          </div>

          <!-- Username input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerUsernameE" name='registerUsernameE' class="form-control" placeholder=""/>
            <label class="form-label" for="registerUsernameE">Last Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="registerEmailE" name='registerEmailE' class="form-control" />
            <label class="form-label" for="registerEmailE">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerPasswordE" name='registerPasswordE' class="form-control" />
            <label class="form-label" for="registerPasswordE">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPasswordE" name='registerRepeatPasswordE' class="form-control" />
            <label class="form-label" for="registerRepeatPasswordE">Repeat password</label>
          </div>
          <!-- Country input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCountryE" name='registerCountryE' class="form-control" />
            <label class="form-label" for="registerCountryE">Country</label>
          </div>
          <!-- City input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCityE" name='registerCityE' class="form-control" />
            <label class="form-label" for="registerCityE">City</label>
          </div>

          <!-- Phone input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerPhoneE" name='registerPhoneE' class="form-control" />
            <label class="form-label" for="registerPhoneE">Phone</label>
          </div>

          <!-- Service input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerServiceE" name='registerServiceE' class="form-control" />
            <label class="form-label" for="registerServiceE">Service</label>
          </div>

          <!-- Year_exp input -->
          <div class="form-outline mb-4">
            <input type="number" id="registerYear_ExpE" name='registerYear_ExpE' class="form-control" />
            <label class="form-label" for="registerYear_ExpE">Year Experience</label>
          </div>

          <!-- Description input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="registerDescriptionE" name='registerDescriptionE' rows="4"></textarea>
            <label class="form-label" for="form4Example3">Description</label>
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
          <button id='btn-register-employee' type="submit" class="btn btn-primary btn-block mb-4">Register</button>

          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
          </div>

        </form>
      </div>


      <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
        <form id="registerformClient" action="<?php echo base_url();?>index.php/Register/createAccountClient" method="POST">
          <!-- Name input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerName" name='registerName' class="form-control" />
            <label class="form-label" for="registerName">Name</label>
          </div>

          <!-- Last_name input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerLast_name" name='registerLast_name' class="form-control" />
            <label class="form-label" for="registerLast_name">Last Name</label>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="registerEmail" name='registerEmail' class="form-control" />
            <label class="form-label" for="registerEmail">Email</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerPassword" name='registerPassword' class="form-control" />
            <label class="form-label" for="registerPassword">Password</label>
          </div>

          <!-- Repeat Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="registerRepeatPassword" name='registerRepeatPassword' class="form-control" />
            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
          </div>

          <!-- Phone input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerPhone" name='registerPhone' class="form-control" />
            <label class="form-label" for="registerPhone">Phone</label>
          </div>

          <!-- Country input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCountry" name='registerCountry' class="form-control" />
            <label class="form-label" for="registerCountry">Country</label>
          </div>

          <!-- City input -->
          <div class="form-outline mb-4">
            <input type="text" id="registerCity" name='registerCity' class="form-control" />
            <label class="form-label" for="registerCity">City</label>
          </div>

          <!-- Checkbox -->
          <!-- <div class="form-check d-flex justify-content-center mb-4">
            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
            <label class="form-check-label" for="registerCheck">
              I have read and agree to the terms
            </label>
          </div> -->

          <!-- Submit button -->
          <button d='btn-register-client' type="submit" class="btn btn-primary btn-block mb-3">Sign in</button>
          <!-- Register buttons -->
          <div class="text-center">
            <p>Not a member? <a href="#!">Register</a></p>
          </div>
        </form>
      </div>
    </div>
    <!-- Pills content -->
  </div>
  <!-- /.content -->
</div>
<!-- /.register-box -->