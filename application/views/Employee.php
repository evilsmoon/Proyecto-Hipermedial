

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
                  foreach ($getEducationByiD as $row) {
                  ?>


                    <span class="tag tag-danger"><?php echo $row->name_curso; ?></span> -
                  <?php
                  }
                  ?>

                </p>
                <hr>
                <strong><i class="fas fa-comment-alt mr-1"></i> Redes Sociales</strong>
                <p class="text-muted">
                
                <?php
                  foreach ($getSocialByID as $row) {
                  ?>
                      <a href="<?php echo $row->url_red_social; ?>" target="_blank" > <?php echo $row->name_red_social; ?> </a>
                                <?php
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
                        <img class="img-circle img-bordered-sm" src="https://picsum.photos/id/237/200/300" alt="user image">
                       
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
                    <div class="post clearfix">
                      <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="https://picsum.photos/id/281/200/300" alt="user image">
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
                      <img class="img-circle img-bordered-sm" src="https://picsum.photos/id/235/200/300" alt="user image">
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
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                            <img src="http://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#education" data-toggle="tab">Formación Académica/Profesional</a></li>
                      <li class="nav-item"><a class="nav-link" href="#social" data-toggle="tab">Redes Sociales</a></li>
                      <li class="nav-item"><a class="nav-link" href="#jobs" data-toggle="tab">Trabajos Realizados</a></li>
                    </ul>

                    <!-- FORMULARIO DE EDUCACION -->
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
                                <input type="text" class="form-control" id="inputNameSocial"  name='inputNameSocial'placeholder="Social">
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
<!-- FORMULARIO DE TRABAJOS?
                  - METER
                  $ID_Trabajador,
                   $name_project,
                  $name_servicio,
                  $description_servicio,
                  $year_servicio    0
-->
                        <div class="tab-pane" id="jobs">
                          <form class="form-horizontal">
                            <div class="form-group row">
                              <label for="inputName" class="col-sm-2 col-form-label">Nombre del Proyecto</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_project"  name="name_project"placeholder="Nombre del Proyecto">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputService" class="col-sm-2 col-form-label">Servicio</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="name_servicio" name="name_servicio" placeholder="Servicio">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputDecript" class="col-sm-2 col-form-label">Descripción del Trabajo</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="description_servicio" name="description_servicio" placeholder="Descripción">
                              </div>
                            </div>

                            <div class="form-group row">
                              <label for="inputYear" class="col-sm-2 col-form-label">Año de Realización</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="year_servicio" name="year_servicio" placeholder="Año">
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