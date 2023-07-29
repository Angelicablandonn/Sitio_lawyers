<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Gestión de Usuarios</h1>
    <p class="mb-4">Módulo para realizar la opción de gestionar los usuarios</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del usuario</h6>
        </div>
        <form role="form" action="<?php echo base_url().'guardar-usuarios'?>" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Ingresar el Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Ingresar el correo electrónico" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="username">Nombre de usuario</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Ingresar el Nombre del usuario" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Contraseña</label>
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Ingresar la contraseña" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row justify-content-end">
                    <div class="col-auto">
                        <div class="btn-group">
                            <a href="<?php echo base_url(); ?>gestionar-usuarios/listar" name="btn-atras" id="btn-atras" class="btn btn-warning" style="margin-right: 5px;">
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
