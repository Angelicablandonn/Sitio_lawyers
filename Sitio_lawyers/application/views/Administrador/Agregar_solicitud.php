 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Gestión de Solicitudes</h1>
    <p class="mb-4">Módulo para realizar la opción de agregar solicitudes</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Datos de la solicitud</h6>
        </div>
        <form role="form" action="<?php echo base_url().'guardar-solicitud'?>" method="post">
           
        <div class="card-body">
            
                            <div class="box-body">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group col col-6">
                                            <label for="name">Nombre</label>
                                            <input type="text" name="Nombre" id="Nombre" 
                                            class="form-control" placeholder="Ingresar el Nombre">
                                        </div>
                                        <div class="form-group col col-6">
                                            <label for="email">Correo electronico</label>
                                            <input type="text" name="Correo" id="Correo" 
                                            class="form-control" placeholder="Ingresar el correo electronico ">
                                        </div>	
                                    </div>
                                    <div class="row">
                                        <div class="form-group col col-xs-6">
                                            <label for="asunto">Asunto</label>
                                            <input type="text" name="Asunto" id="Asunto" class="form-control" placeholder="Ingresar el Asunto">
                                        </div>
                                        <div class="form-group col col-xs-6">
                                            <label for="servicio">Servicio</label>
                                            <select id="form_need" name="Servicio" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="Servicio"  selected disabled>Seleccione su servicio</option>
                                <option>Derecho de peticion</option>
                                <option>Accion de tutela</option>		
                                <option>Denuncia</option>
                                <option>Otro</option>
                            </select>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                <div class="col-md-12">
                                <div class="row">
                                            <label for="servicio">Estado</label>
                                            <select id="form_need" name="Estado" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="Estado"  selected disabled>Seleccione su estado</option>
                                <option>Recibida</option>
                                <option>En proceso</option>		
                                <option>Resuelto</option>
                         
                            </select>
                                        </div>
                                </div>
                                </div>
                                    <div class="box-body">
                                <div class="col-md-12">
                   
                                    <div class="row">
                                    <label for="detalle">Detalle</label>
                                    <textarea name="Mensaje" id="" cols="30" rows="7" class="form-control" placeholder="Detalle de el caso"></textarea>
	          
                                    </div>
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
                                        <a href="<?php echo base_url(); ?>gestionar-solicitudes/listar" name="btn-atras" id="btn-atras" class="btn btn-warning" style="margin-right: 5px;"><span class="fa fa-backward"> Atrás</span></a>

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