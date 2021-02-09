<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">

        <?php

        foreach ($getUserByID as $user) {
        ?>
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle" src="<?php echo base_url(); ?>assets/uploads/avatar3.png" alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">
                <?php echo $user->name; ?> <?php echo $user->last_name; ?></h3>

              <p class="text-muted text-center"><?php echo $user->service ?></p>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->



          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Acerca de mi </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <strong><i class="fas fa-book mr-1"></i> Educación</strong>

              <hr>

              <strong><i class="fas fa-map-marker-alt mr-1"></i> Ubicación</strong>

              <p class="text-muted"><?php echo $user->country; ?>,<?php echo $user->city; ?></p>

              <hr>

              <strong><i class="far fa-file-alt mr-1"></i>Descripción</strong>

              <p class="text-muted"><?php echo $user->description; ?>.</p>
              <hr>
            <?php
          }
            ?>
            <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>

            <p class="text-muted">
              <?php
              if ($getEducationByiD) {
                foreach ($getEducationByiD as $row) {
              ?>


                  <span class="tag tag-danger"><?php echo $row->name_curso; ?></span> -
              <?php
                }
              } else {
                echo '<span tag tag-danger> No data Actualizar perfil</span>';
              }
              ?>

            </p>
            <hr>
            <strong><i class="fas fa-comment-alt mr-1"></i> Redes Sociales</strong>
            <p class="text-muted">

              <?php
              if ($getSocialByID) {
                foreach ($getSocialByID as $row) {
              ?>
                  <a href="<?php echo $row->url_red_social; ?>" target="_blank"> <?php echo $row->name_red_social; ?> </a>
              <?php
                }
              } else {
                echo '<span> No data Actualizar perfil</span>';
              }
              ?>

            </p>


            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Reseñas</a></li>
              <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Quejas</a></li>
              <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Modificar Perfil</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">

              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="user image">

                    <span class="username">
                      <a href="#">Jonathan Burke Jr.</a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (5)
                      </a>
                    </span>
                  </p>

                  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="user image">
                    <span class="username">
                      <a href="#">Sarah Ross</a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="input-group input-group-sm mb-0">
                      <input class="form-control form-control-sm" placeholder="Response">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-danger">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url(); ?>assets/dist/img/user1-128x128.jpg" alt="user image">
                    <span class="username">
                      <a href="#">Adam Jones</a>
                      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                      <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (5)
                      </a>
                    </span>
                  </p>

                  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->

                <div class="card-header">
                  <h1 class="card-title">Escribe tu Queja Dirigida a los Administradores de Kmellando</h1>
                </div>
                <div class="col-md-9">

                  <div class="card card-primary card-outline">

                    <form class="form-horizontal" id="registerMessage" action="<?php echo base_url(); ?>index.php/Employee/setMessageAdmin" method="POST">

                      <!-- /.card-header -->
                      <div class="card-body">
                        <!-- <div class="form-group">
                        <input class="form-control" placeholder="Para:">
                      </div> -->
                        <div class="form-group">
                          <input class="form-control" name="input_asunto" id="input_asunto" type="text" placeholder="Asunto:">
                        </div>
                        <div class="form-group">
                          <textarea id="compose-textarea" ty name="input_mensaje" id="input_mensaje" class="form-control" style="height: 300px"></textarea>
                        </div>
                      </div>
                      <!-- /.card-body -->
                      <div class="card-footer">
                        <div class="float-right">

                          <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Enviar</button>
                        </div>
                        <button type="reset" class="btn btn-default"><i class="fas fa-times"></i> Descartar</button>
                      </div>
                    </form>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </div>




              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">

                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#education" data-toggle="tab">Formación Académica/Profesional</a></li>
                    <li class="nav-item"><a class="nav-link" href="#social" data-toggle="tab">Redes Sociales</a></li>
                    <li class="nav-item"><a class="nav-link" href="#jobs" data-toggle="tab">Trabajos Realizados</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <!-- FORMULARIO DE EDUCACION -->
                    <div class="active tab-pane" id="education">
                      <form class="form-horizontal" id="registerEducation" action="<?php echo base_url(); ?>index.php/Employee/setEducationByID" method="POST">
                        <div class="form-group row">
                          <label for="inputNameCourse " class="col-sm-2 col-form-label">Nombre del Curso / Título</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNameCourse" name="inputNameCourse" placeholder="Name Course">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputCompany" class="col-sm-2 col-form-label">Compañía / Inst. Educativa</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCompany" name="inputCompany" placeholder="Company">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputYear" class="col-sm-2 col-form-label">Año</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputYear" name="inputYear" placeholder="year">
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <!-- FORMULARIO DE REDES SOCIALES -->
                    <div class="tab-pane" id="social">
                      <form class="form-horizontal" id="registerSocial" action="<?php echo base_url(); ?>index.php/Employee/setSocialByID" method="POST">
                        <div class="form-group row">
                          <label for="inputNameSocial" class="col-sm-2 col-form-label">Nombre de la Red Social</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNameSocial" name='inputNameSocial' placeholder="Social">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputUrl" class="col-sm-2 col-form-label">Url</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputUrl" name='inputUrl' placeholder="Url">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Submit</button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="tab-pane" id="jobs">
                      <form class="form-horizontal" id="registerJobs" action="<?php echo base_url(); ?>index.php/Employee/setJobsByID" method="POST">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nombre del Proyecto</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input_name_project" name="input_name_project" placeholder="Nombre del Proyecto">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputService" class="col-sm-2 col-form-label">Servicio</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input_name_servicio" name="input_name_servicio" placeholder="Servicio">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputDecript" class="col-sm-2 col-form-label">Descripción del Trabajo</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="input_description_servicio" name="input_description_servicio" placeholder="Descripción">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="inputYear" class="col-sm-2 col-form-label">Año de Realización</label>
                          <div class="col-sm-10">
                            <input type="number" class="form-control" id="input_year_servicio" name="input_year_servicio" placeholder="Año">
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-danger">Guardar</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->

            </div>

          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->