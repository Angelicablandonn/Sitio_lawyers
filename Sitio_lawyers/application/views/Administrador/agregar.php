 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Gestión de abogados</h1>
    <p class="mb-4">Módulo para realizar la opción de gestionar los abogados</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos de los abogados</h6>
        </div>
        <form role="form" enctype="multipart/form-data" action="<?php echo base_url().'guardar-abogados'?>" method="post">
           
        <div class="card-body">
            
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col col-6">
                                            <label for="nit">Número de Identificación</label>
                                            <input type="text" name="nit" id="nit" 
                                            class="form-control" placeholder="Ingresar NIT">
                                        </div>
                                        <div class="form-group col col-6">
                                            <label for="nombre_completo">Nombre completo</label>
                                            <input type="text" name="nombre" id="nombre" 
                                            class="form-control" placeholder="Ingresar el nombre">
                                        </div>	
                                    </div>
                                </div>
                            </div>
                                <div class="box-body">
                                <div class="col-md-12">
                                    <div class="row">
                                    <div class="form-group col col-6">
                                        <label for="area">Area</label>
                                        <input type="text" name="area" id="area"  class="form-control" placeholder="Ingresar el area"/>
                                        </div>
                                        <div class="form-group col col-6">
                           
                                    
                                            <label for="telefono">Telefono</label>
                                            <input type="text" name="telefono" id="telefono" class="form-control" placeholder="Ingresar Número telefonico">
                                        </div>
                                </div>
                                </div>
                                </div>
                                <div class="box-body">
                                <div class="col-md-12">
                                <div class="row">
                                        <div class="form-group col col-xs-6">
                                            <label for="correo">Correo Electrónico</label>
                                            <input type="text" name="correo" id="correo" class="form-control" placeholder="Ingresar correo electronico" >
                                        </div>
                                    
                                        <div class="form-group col col-xs-6">
                                
                                        <label for="ciudad">Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad"  class="form-control" placeholder="Ingresar la ciudad de residencia"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-body">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col col-12">
                                            <label for="direccion">Dirección de residencia: </label>
                                            <textarea name="direccion" id="direccion" class="form-control" placeholder="Dirección de domicilio"></textarea>
                                        </div>
                                    </div>
                            </div>
                            </div>
                            <div class="col-12">
                                    <div class="row">
                                      
                                            
                                        <div class="form-group">
                        <span class="btn btn-default btn-lg btn-file "><span class="far fa-image"> </span>
                            Seleccionar la foto del abogado <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*" >
                        </span>
                        <div class="row">
                          <span class="text-success font-italic pl-3 mb-2"><b>Nota:</b> Los archivos tipo imagen no pueden superar el tamaño de 2 MB. </span>
                        </div>
                        <div class="row" id="previsualizacion" style="margin:5px;">
                          <p id="mensaje">Actualmente no has seleccionado ninguna imagen para subir.</p>
                            <div class="card-columns" id="galeria">
                            </div>  
                        </div>
                        <div id="informacion-imagen" class="alert alert-warning alert-dismissible fade show d-none" role="alert">
                        <strong>Información de subida de galería de imagenes</strong>
                        <ul id="subida-imagen">
                        </ul> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
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
                                        <a href="<?php echo base_url(); ?>gestionar-abogados/listar" name="btn-atras" id="btn-atras" class="btn btn-warning" style="margin-right: 5px;"><span class="fa fa-backward"> Atrás</span></a>

                                        <button type="submit" name="btn-guardar" id="btn-guardar" class="btn btn-info">Guardar <span class="fa fa-save"></span></button>
                                    </div>
                                </div>
                            </div>
                            </div>	
            </div>
        </form>
    </div>
    </div>
<!-- /.container-fluid -->