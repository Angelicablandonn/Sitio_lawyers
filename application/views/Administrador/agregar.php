<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Gestión de abogados</h1>
    <p class="mb-4">Módulo para realizar la opción de gestionar los abogados</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos de los abogados</h6>
        </div>
        <form role="form" enctype="multipart/form-data" action="<?php echo base_url().'guardar-abogados'?>" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nit">Número de Identificación</label>
                            <input type="text" name="nit" id="nit" class="form-control" placeholder="Ingresar NIT" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre completo</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingresar el nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="area">Área</label>
                            <input type="text" name="area" id="area"  class="form-control" placeholder="Ingresar el área" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingresar Número telefónico" required>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo Electrónico</label>
                            <input type="text" name="correo" id="correo" class="form-control" placeholder="Ingresar correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" name="ciudad" id="ciudad"  class="form-control" placeholder="Ingresar la ciudad de residencia" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="direccion">Dirección de residencia</label>
                            <textarea name="direccion" id="direccion" class="form-control" placeholder="Dirección de domicilio" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="imagen">Foto del abogado</label>
                            <div class="custom-file">
                                <input type="file" name="imagen" id="imagen" class="custom-file-input" accept="image/*" required>
                                <label class="custom-file-label" for="imagen">Seleccionar la foto del abogado</label>
                            </div>
                            <small class="form-text text-muted">Los archivos tipo imagen no pueden superar el tamaño de 2 MB.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="btn-group">
                            <a href="<?php echo base_url(); ?>gestionar-abogados/listar" name="btn-atras" id="btn-atras" class="btn btn-warning" style="margin-right: 5px;">
                                <span class="fa fa-backward"></span> Atrás
                            </a>
                            <button type="submit" name="btn-guardar" id="btn-guardar" class="btn btn-info">
                                Guardar <span class="fa fa-save"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
