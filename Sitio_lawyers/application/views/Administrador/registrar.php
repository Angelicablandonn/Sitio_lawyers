<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lawyers - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/Dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/Dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crear una Agencia Turistica</h1>
                            </div>
                            <form class="user" method="post" action="<?php echo base_url().'guardar-abogados'?>">
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <input type="text" name="nit" class="form-control form-control-user" id="nit"
                                            placeholder="Registro tributario">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-12 mb-3 mb-sm-0">
                                        <input type="text" name="razon_social" class="form-control form-control-user" id="razon_social"
                                            placeholder="Razón social, ej: Triti SAS">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <input type="tel" name="telefono" class="form-control form-control-user" id="telefono"
                                            placeholder="Número telefonico">
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3 mb-sm-0">
                                        <input type="email" name="correo" class="form-control form-control-user" id="correo"
                                            placeholder="Correo Electrónico">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-12 col-md-6 mb-3 ">
                                        <input type="text" name="ciudad" class="form-control form-control-user" id="ciudad"
                                            placeholder="Ciudad" />
                                    </div>  
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12 ">
                                        <textarea name="direccion" class="form-control form-control-user" id="direccion"
                                            placeholder="Dirección de residencia, calle, carrera, edificio."></textarea>
                                    </div>  
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="clave" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="conf_clave" placeholder="Confirmar contraseña">
                                    </div>
                                </div>
                                <input type="submit" value="Registrar" class="btn btn-primary btn-user btn-block" />
 
                                <hr>
                                <a href="#" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registrar con Google
                                </a>
                                <a href="#" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Registrar con Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url().'recordar' ?>"> ¿ Olvidó la Contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="#">Ya estás registrado? Inciar Sesión!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/Dashboard/vendor/jquery/jquery.min.js' ?>"></script>
    <script src="<?php echo base_url()?>assets/Dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js' ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/Dashboard/vendor/jquery-easing/jquery.easing.min.js' ?>"></script>

</body>

</html>