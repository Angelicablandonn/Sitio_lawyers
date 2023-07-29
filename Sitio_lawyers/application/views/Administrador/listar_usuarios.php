   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gestión de usuarios</h1>
<p class="mb-4">Módulo para realizar la opción de listar los usuarios</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Listar datos</h6>
        <div class="input-group-append justify-content-end">
            <a class="btn btn-primary" type="button" href="<?php echo base_url().'gestionar-usuarios/agregar'?>">
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
                        <th>Nombre de usuario</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo electronico</th>
                        <th>Nombre de usuario</th>
                        <th>Contraseña</th>
                        <th>Acciones</th>
                       
                    </tr>
                </tfoot>
                <tbody>
                    <?php if(isset($usuario)): ?>
                        <?php foreach ($usuario as $usua): ?>
                           
                    <tr>
                        <td><?php echo $usua->name; ?></td>
                        <td><?php echo @$usua->email; ?></td>
                        <td><?php echo @$usua->username; ?></td>
                        <td><?php echo $usua->pass; ?></td>
                        <td>
                             <a class="btn btn-primary" href="<?php echo base_url().'gestionar-usuarios/buscar/'.$usua->_id;?>">Editar</a>
                            <a class="btn btn-danger" href="<?php echo base_url().'gestionar-usuarios/eliminar/'.$usua->_id;?>">Eliminar</a>
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