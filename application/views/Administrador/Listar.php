   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gestión de abogados</h1>
<p class="mb-4">Módulo para realizar la opción de gestionar abogados</p>
<?php if($this->session->flashdata('eliminacion_ok')): ?>
    <div class="alert alert-danger"> Se elimino de forma correcta </div>
    <?php endif; ?>
    <?php if($this->session->flashdata('modificacion_ok')): ?>
        <div class="alert alert-danger"> Se modifico de forma correcta </div>
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
                        <th>Nit</th>
                        <th>Nombre Completo</th>
                        <th>Area</th>
                        <th>Ciudad</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nit</th>
                        <th>Nombre Completo</th>
                        <th>Area</th>
                        <th>Ciudad</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if(isset($abogado)): ?>
                        <?php foreach ($abogado as $abog): ?>
                           
                    <tr>
                  
                        <td><?php echo $abog->nit; ?></td>
                        <td><?php echo @$abog->nombre; ?></td>
                        <td><?php echo @$abog->area; ?></td>
                        <td><?php echo $abog->ciudad; ?></td>
                        <td><?php echo $abog->correo; ?></td>
                        <td><?php echo @$abog->telefono; ?></td>     
                        <td><?php echo $abog->direccion; ?></td>
                        <td><img src="<?php echo base_url().'uploads/'.@$abog->url_imagen;?> "width="100" height="100"/></td>
                        <td>
                             <a class="btn btn-primary" href="<?php echo base_url().'gestionar-abogados/buscar/'.$abog->_id;?>">Editar</a>
                            <a class="btn btn-danger" href="<?php echo base_url().'gestionar-abogados/eliminar/'.$abog->_id;?>">Eliminar</a>
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