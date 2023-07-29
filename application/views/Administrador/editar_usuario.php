 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Gestión de Usuarios</h1>
    <p class="mb-4">Módulo para realizar la opcion de modificar los usuarios</p>
	<?php if($this->session->flashdata('eliminacion_ok')):?>
	<div class="alert alert-danger">Se elimino de forma correcta </div>
<?php endif; ?>
<?php if($this->session->flashdata('modificacion_ok')):?>
	<div class="alert alert-success">Se modifico de forma correcta </div>
<?php endif; ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos del usuario</h6>
        </div>
        <form role="form" action="<?php echo base_url().'gestionar-usuarios/editar'?>" method="post">
           
        <div class="card-body">
            
                            <div class="box-body">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col col-6">
                                        
                                            <input type="hidden" name="_id" id="_id"
                                            class="form-control" placeholder="Ingresar el Nombre" value="<?php echo $usuario->_id;?>">
                                        </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col col-6">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="name" id="name" 
                                            class="form-control" placeholder="Ingresar el Nombre" value="<?php echo $usuario->name;?>">
                                        </div>
                                        <div class="form-group col col-6">
                                            <label for="email">Correo electronico</label>
                                            <input type="text" name="email" id="email" 
                                            class="form-control" placeholder="Ingresar el correo electronico " value="<?php echo $usuario->email;?>">
                                        </div>	
                                    </div>
                                    <div class="row">
                                        <div class="form-group col col-xs-6">
                                            <label for="username">Nombre de usuario</label>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Ingresar el Nombre del usuario" value="<?php echo $usuario->username;?>">
                                        </div>
                                        <div class="form-group col col-xs-6">
                                            <label for="pass">Constraseña</label>
                                            <input type="text" name="pass" id="pass" class="form-control" placeholder="Ingresar la contraseña"  value="<?php echo $usuario->pass;?>">
                                        </div>
                                    </div>
                               
                             

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
            </div>
            <div class="card-footer">
                <div class="row justify-content-end">
                        <div class="col-auto ">
                                    <div class="btn-group ">
                                        <a href="<?php echo base_url(); ?>gestionar-usuarios/listar" name="btn-atras" id="btn-atras" class="btn btn-warning" style="margin-right: 5px;"><span class="fa fa-backward"> Atrás</span></a>

                                        <button type="submit" name="btn-guardar" id="btn-guardar" class="btn btn-info">Guardar <span class="fa fa-save"></span></button>
                                    </div>
                                </div>
                            </div>
                            </div>	
            </div>
        </form>
    </div>

<!-- /.container-fluid -->