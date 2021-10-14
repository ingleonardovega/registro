<?= $this->extend('layout/template'); ?>
<?= $this->section('page') ?>
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title" style="text-align: center;">Registro de usuario</h4>
                  <form method="post" class="needs-validation" novalidate  enctype="multipart/form-data">
                      <div class="row"><!--row de formulario-->
                          <div class="col-xl-12 col-sm-12">
                              <div class="mt-4 mt-sm-4">
                                  <div class="form-group">
                                      <label for="nombre">Nombre</label>
                                      <input type="text" class="form-control" name="nombre" id="nombre" value="" required>
                                      <div class="invalid-feedback">
                                          Captura un nombre. 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="apaterno">Apellido Paterno</label>
                                      <input type="text" class="form-control" name="apaterno" id="apaterno" value="" required>
                                      <div class="invalid-feedback">
                                          Captura un apellido. 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="amaterno">Apellido Materno</label>
                                      <input type="text" class="form-control" name="amaterno" id="amaterno" value="" required>
                                      <div class="invalid-feedback">
                                          Captura un apellido. 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="input-date1">Fecha de Nacimiento</label>
                                          <input id="input-date1" class="form-control input-mask"
                                                           data-inputmask="'alias': 'datetime'"
                                                           data-inputmask-inputformat="dd/mm/yyyy" required>
                                          <div class="invalid-feedback">
                                            Captura tu fecha de nacimiento. 
                                          </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="correo">Correo</label>
                                      <input type="email" class="form-control" name="correo" id="correo" parsley-type="email"  value="" required>
                                      <div class="invalid-feedback">
                                          Captura un correo. 
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="usuario">Telefono Celular</label>
                                      <input type="text" class="form-control" name="usuario" id="usuario"  value="" required>
                                      <div class="invalid-feedback">
                                          Captura un usuario.
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label for="pass">Contraseña</label>
                                      <input type="password"  class="form-control" name="pass2" id="pass2" value=""  required>
                                  </div>
                                  <div class="form-group mt-2">
                                      <input type="password"  class="form-control checa"  name="retry-pass" id="retry-pass" aria-describedby="retry-pass" placeholder="Confirma la contraseña" >
                                      <div class="invalid-feedback">
                                         Contraseña incorrecta
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div ><!--row de formulario-->
                        <div class="mt-4 mt-sm-4">
                          <button class="btn btn-primary" id="btn" type="submit">Guardar</button>
                        </div>
                  </form>
              </div><!--end card-->
          </div><!--end card-->
      </div> <!-- end col -->
  </div> <!-- end row -->   
<?= $this->endSection() ?>