  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark"> Top 10 <small>Profesionales</small></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <!-- <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                          <li class="breadcrumb-item"><a href="#">Layout</a></li>
                          <li class="breadcrumb-item active">Top Navigation</li>
                      </ol> -->
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
          <div class="container">
              <div class="row">
                  <div class="card-body">


                      <!-- Tabla Prueba -->
                      <table id="example1" class="table table-bordered table-striped">
                          <thead>
                              <tr>
                                  <th>Id de Usuario</th>
                                  <th>Nombre</th>
                                  <th>Apellido</th>
                                  <th>Email</th>
                                  <th>Teléfono</th>
                                  <th>Servicio</th>
                                  <th>Años de Experiencia</th>
                                  <th>País</th>
                                  <th>Ciudad</th>
                                  <th>Status</th>
                                  <th>Bloquear</th>
                                  <th>Eliminar</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                foreach ($get_employeesAtUser as $row) {


                                ?>

                                  <tr align="center" style="text-align:center">
                                      <td><?php echo $row->ID_Trabajador; ?></td>
                                      <td align="center">
                                          <p><?php echo $row->name; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->last_name; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->email; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->phone; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->service; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->year_exp; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->country; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->city; ?> </p>
                                      </td>
                                      <td align="center">
                                          <p><?php echo $row->status; ?> </p>
                                      </td>

                                      <td align="center"><input type="button" name="view" value="Bloqueo" class="btn btn-warning btn view_data" />
                                      </td>
                                      <td align="center"><input type="button" name="view" value="Eliminar" class="btn btn-danger btn view_data" />
                                      </td>
                                  </tr>


                                  <!-- Fin Tabla Prueba -->

                              <?php
                                }

                                ?>
                      </table>
                  </div>
              </div>

          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->