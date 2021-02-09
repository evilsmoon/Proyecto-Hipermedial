
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

