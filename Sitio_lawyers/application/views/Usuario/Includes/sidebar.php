<body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo base_url().'Index';?> ">Legalcare <span>Agencia de Abogados</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="<?php echo base_url().'Index';?> " class="nav-link">Inicio</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'About';?> " class="nav-link">Acerca de</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'Attorneys';?> " class="nav-link">Abogados</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'Practice_areas';?>" class="nav-link">Areas</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'Case';?>" class="nav-link">Casos de estudio</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'Blog';?>" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?php echo base_url().'Contact';?>" class="nav-link">Contacto</a></li>
			  <li class="nav-item cta"><a href="#" class="nav-link" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['usuario']['name']; ?>				</a>
			      <!-- Dropdown - User Information -->
				  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
						Perfil
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
						Ajustes
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
						Registro de actividades
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url().'cerrar-sesion'?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
						Cerrar sesión
                    </a>
                </div>
</li>

                   
              
            </li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->