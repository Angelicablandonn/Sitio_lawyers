<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Gestión de Solicitudes</h1>
    <p class="mb-4">Módulo para realizar la opción de agregar solicitudes</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos de la solicitud</h6>
        </div>
        <form role="form" action="<?php echo base_url().'guardar-solicitud'?>" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Nombre">Nombre <i class="fas fa-user"></i></label>
                            <input type="text" name="Nombre" id="Nombre" class="form-control" placeholder="Ingresar el Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="Correo">Correo electrónico <i class="fas fa-envelope"></i></label>
                            <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Ingresar el correo electrónico" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Asunto">Asunto <i class="fas fa-heading"></i></label>
                            <input type="text" name="Asunto" id="Asunto" class="form-control" placeholder="Ingresar el Asunto" required>
                        </div>
                        <div class="form-group">
                            <label for="Servicio">Servicio <i class="fas fa-cogs"></i></label>
                            <select id="Servicio" name="Servicio" class="form-control" required>
                                <option value="" selected disabled>Seleccione su servicio</option>
                                <option>Derecho de petición</option>
                                <option>Acción de tutela</option>		
                                <option>Denuncia</option>
                                <option>Otro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="Estado">Estado <i class="fas fa-check-circle"></i></label>
                            <select id="Estado" name="Estado" class="form-control" required>
                                <option value="" selected disabled>Seleccione su estado</option>
                                <option>Recibida</option>
                                <option>En proceso</option>		
                                <option>Resuelto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="Mensaje">Detalle <i class="fas fa-comment"></i></label>
                            <textarea name="Mensaje" id="Mensaje" cols="30" rows="7" class="form-control" placeholder="Detalle del caso" required></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="btn-group">
                            <a href="<?php echo base_url(); ?>gestionar-solicitudes/listar" name="btn-atras" id="btn-atras" class="btn btn-warning" style="margin-right: 5px;">
                                <span class="fa fa-backward"></span> Atrás
                            </a>
                            <button type="submit" name="btn-guardar" id="btn-guardar" class="btn btn-info">
                                Guardar <i class="fas fa-save"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
