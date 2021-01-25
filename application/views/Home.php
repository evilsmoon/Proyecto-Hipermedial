  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark"> Top 10 <small>Professionals</small></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item"><a href="#">Layout</a></li>
                          <li class="breadcrumb-item active">Top Navigation</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
          <div class="container">
              <div class="row">
                  <?php

                    for ($i = 0; $i < 10; $i++) {
                    ?>
                      <div class="col-md-4">
                          <!-- Widget: user widget style 1 -->
                          <div class="card bg-light">
                              <div class="card-header text-muted border-bottom-0">
                                  Digital Strategist
                              </div>
                              <div class="card-body pt-0">
                                  <div class="row">
                                      <div class="col-7">
                                          <h2 class="lead"><b>Nicole Pearson</b></h2>
                                          <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                                          <ul class="ml-4 mb-0 fa-ul text-muted">
                                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                              <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                          </ul>
                                      </div>
                                      <div class="col-5 text-center">
                                          <img src="<?php echo base_url();?>assets/dist/img/user1-128x128.jpg" alt="" class="img-circle img-fluid">
                                      </div>
                                  </div>
                              </div>
                              <div class="card-footer">
                                  <div class="text-right">
                                      <a href="#" class="btn btn-sm bg-teal">
                                          <i class="fas fa-comments"></i>
                                      </a>
                                      <a href="#" class="btn btn-sm btn-primary">
                                          <i class="fas fa-user"></i> View Profile
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>

                  <?php
                    }
                    ?>


              </div>

          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->