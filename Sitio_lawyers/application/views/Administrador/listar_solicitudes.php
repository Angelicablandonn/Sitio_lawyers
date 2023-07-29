   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gestión de solicitudes</h1>
<p class="mb-4">Módulo para realizar la opción de listar solicitudes</p>
<?php if($this->session->flashdata('eliminacion_ok')):?>
	<div class="alert alert-danger">Se elimino de forma correcta </div>
<?php endif; ?>
<?php if($this->session->flashdata('modificacion_ok')):?>
	<div class="alert alert-success">Se modifico de forma correcta </div>
<?php endif; ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listar datos</h6>
        <div class="input-group-append justify-content-end">
            <a class="btn btn-primary" type="button" href="<?php echo base_url().'gestionar-abogados/agregar'?>">
                <i class="fas fa-add fa-sm"></i> Agregar
            </a>
           
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
               
                        <th>Nombre</th>
                        <th>Correo electronico</th>
                        <th>Asunto</th>
                        <th>Servicio</th>
                        <th>Detalle</th>
                        <th>Estado</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                
                    <th>Nombre</th>
                        <th>Correo electronico</th>
                        <th>Asunto</th>
                        <th>Servicio</th>
                        <th>Detalle</th>
                        <th>Estado</th>
                        <th>Accion</th>
                       
                    </tr>
                </tfoot>
                <tbody>
                    <?php if(isset($solicitudes)): ?>
                        <?php foreach ($solicitudes as $soli): ?>
                         
                           
                    <tr>
                   
                        <td><?php echo $soli->Nombre; ?></td>
                        <td><?php echo @$soli->Correo; ?></td>
                        <td><?php echo @$soli->Asunto; ?></td>
                        <td><?php echo @$soli->Servicio; ?></td>
                        <td><?php echo $soli->Mensaje; ?></td>
                        <td><?php echo $soli->Estado; ?></td>
                        <td>
                             <a class="btn btn-primary" href="<?php echo base_url().'gestionar-solicitudes/buscar/'.$soli->_id;?>">Editar</a>
                            <a class="btn btn-danger" href="<?php echo base_url().'gestionar-solicitudes/eliminar/'.$soli->_id;?>">Eliminar</a>
                        </td>
                       
                          
                    </tr>
                    <?php endforeach; ?>
                   <?php endif; ?>
                 
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->