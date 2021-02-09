  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Empleados de Kmellando</h1>
          </div>

        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">


                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
                </div>
              </div>
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
                    foreach ($get_employees as $row) {


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
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->