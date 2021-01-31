  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1 class="m-0 text-dark"> Units <small>Test</small></h1>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="#">Home</a></li>
                          <li class="breadcrumb-item active">Units Test</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- id_user	title	desc	file	 -->
      <!-- Main content -->
      <div class="content">
          <div class="container">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-6">
                      <!-- general form elements -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <h3 class="card-title">Quick Example</h3>
                          </div>
                          <!-- /.card-header -->

                          <div style="color:red">
                              <?php echo validation_errors(); ?>
                              <?php if (isset($error)) {
                                    print $error;
                                } ?>
                          </div>
                          <!-- form start -->
                          <?php echo form_open_multipart('Home/file_upload'); ?>
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="inputID_User">id_user</label>
                                  <input type="number" class="form-control" id="inputID_User" name='inputID_User' placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label for="input_Title">title</label>
                                  <input type="text" class="form-control" id="input_Title" name="input_Title" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label>Textadescrea</label>
                                  <textarea class="form-control" id="input_Descrip" name="input_Descrip" rows="3" placeholder="Description ..."></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="input_File">File input</label>
                                  <div class="input-group">
                                      <div class="custom-file">
                                          <input type="file" class="custom-file-input" id="input_File" name="input_File">
                                          <label class="custom-file-label" for="input_File">Choose file</label>
                                      </div>

                                  </div>
                              </div>



                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                          </form>
                      </div>
                      <!-- /.card -->
                  </div>
                  <!-- /.row -->

              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->