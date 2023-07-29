
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo base_url()?>assets/Usuario/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Expertos Abogados</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url().'Index';?>">Inicio<i class="ion-ios-arrow-forward"></i></a></span> <span>Abogados <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<section class="ftco-section ftco-no-pt">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
 
         
          </div>
        </div>
        <div class="row">
			<?php if(isset($abogados)): ?>
				<?php foreach($abogados as $datos): ?>
					
					<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(<?php echo base_url().'uploads/'.@$datos->url_imagen;?> );">
	                <div class="box">

	                  <h2><?php echo @$datos->correo; ?></h2>
	                  <p><?php  echo @$datos->ciudad; ?></p>
	                </div>
	              </div>
	              <div class="back">
	                <!-- back content -->
	                <blockquote>
	         
					  <p>&ldquo;<?php  echo @$datos->telefono; ?>&rdquo;</p>
					
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src="<?php echo base_url().'uploads/'.@$datos->url_imagen;?>" alt="">
	                  </div>
	                  <div class="name align-self-center ml-3"><?php echo @$datos->nombre; ?> <span class="position"><?php echo @$datos->area; ?></span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div>


				<?php endforeach; ?>
			<?php endif; ?>
			<!--
        	<div class="col-lg-3 col-sm-6">
        		<div class="block-2 ftco-animate">
	            <div class="flipper">
	              <div class="front" style="background-image: url(<?php echo base_url()?>assets/Usuario//images/person_4.jpg);">
	                <div class="box">
	                  <h2>Jack Smith</h2>
	                  <p>Insurance Lawyer</p>
	                </div>
	              </div>
	              <div class="back">
	                 back content 
	                <blockquote>
	                  <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text &rdquo;</p>
	                </blockquote>
	                <div class="author d-flex">
	                  <div class="image align-self-center">
	                    <img src="images/person_4.jpg" alt="">
	                  </div>
	                  <div class="name align-self-center ml-3">Jack Smith <span class="position">Insurance Lawyer</span></div>
	                </div>
	              </div>
	            </div>
	          </div>
        	</div> -->
        </div>
    	</div>
    </section>

	