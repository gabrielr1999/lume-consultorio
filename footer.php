
<footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2 logo">Lume</h2>
              <p>Consultório de Fisioterapia Dermatofuncional especializada em saúde, beleza e bem-estar.</p>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Endereço</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Rua Santo Elias, 367 - Loja 16 - Espinheiro - Recife</span></li>
	                <!--<li><a href="tel:+558132216116"><span class="icon icon-phone"></span><span class="text">(81) 3221-6116</span></a>--><li><a href="tel:+5581999632602"><span class="icon icon-phone"></span><span class="text">(81) 99963-2602</span></a></li>
	                <li><a href="mailto:contato@lumeconsultorio.com.br"><span class="icon icon-envelope"></span><span class="text">contato@lumeconsultorio.com.br</span></a></li>
	              </ul>
	            </div>

	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://twitter.com/lumeconsultorio/"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/Lumeconsultorio/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/lumeconsultorio/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <!--<1?php /*menu aparece na página*/ 
                $args = array( 'theme_location' => 'footer-menu'); 
              ?> -->
              <!-- <ul class="list-unstyled" id="menu-2"> -->
              <ul class="list-unstyled">
                <!-- <li><1?php $args = array('theme_location' => 'footer-menu'); wp_nav_menu($args);?></li> -->
                <!-- <li><a href="index.html"><span class="ion-ios-arrow-round-forward mr-2"></span><1?php wp_nav_menu( $args ); ( $args ); ?></a></li> -->
                <li><a href="https://lumeconsultorio.com.br/"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="https://lumeconsultorio.com.br/a-lume"><span class="ion-ios-arrow-round-forward mr-2"></span>A Lume</a></li>
                <li><a href="https://lumeconsultorio.com.br/servicos"><span class="ion-ios-arrow-round-forward mr-2"></span>Serviços</a></li> 
                <li><a href="https://lumeconsultorio.com.br/tratamentos"><span class="ion-ios-arrow-round-forward mr-2"></span>Tratamentos</a></li>
                <li><a href="https://lumeconsultorio.com.br/planos"><span class="ion-ios-arrow-round-forward mr-2"></span>Planos</a></li>
                <!-- <li><a href="blog.html"><span class="ion-ios-arrow-round-forward mr-2"></span>Blog</a></li> -->
                <li><a href="https://lumeconsultorio.com.br/contato"><span class="ion-ios-arrow-round-forward mr-2"></span>Contato</a></li>
              </ul>
            </div>
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Serviços</h2>
              <ul class="list-unstyled">
                <li><a href="https://lumeconsultorio.com.br/tratamentos-corporais/"><span class="ion-ios-arrow-round-forward mr-2"></span>Tratamentos corporais</a></li>
                <li><a href="https://lumeconsultorio.com.br/tratamentos-faciais/"><span class="ion-ios-arrow-round-forward mr-2"></span>Tratamentos faciais</a></li>
                <li><a href="https://lumeconsultorio.com.br/tratamento-para-gestantes/"><span class="ion-ios-arrow-round-forward mr-2"></span>Tratamento para gestantes</a></li>
                <li><a href="https://lumeconsultorio.com.br/tratamento-para-noivas/"><span class="ion-ios-arrow-round-forward mr-2"></span>Tratamento para noivas</a></li>
                <!-- <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Planos especiais</a></li> -->
                <!-- <li><a href="https://lumeconsultorio.com.br/lume-femme"><span class="ion-ios-arrow-round-forward mr-2"></span>Lume Femme</a></li>  -->
                <li><a href="https://lumeconsultorio.com.br/estetica-intima"><span class="ion-ios-arrow-round-forward mr-2"></span>Estética Íntima</a></li> 
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Blog</h2>
              <!-- <1?php $query = new WP_Query( array( 'posts_per_page' => 3 ) );  -->
              <?php $all_posts_query = new WP_Query( array( 'posts_per_page' => 2 ) );
                if ( $all_posts_query->have_posts() ) :
                while ( $all_posts_query->have_posts() ) :
                  $all_posts_query->the_post();
              ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('<?php echo the_post_thumbnail_url($post_id); ?>');"></a>
                <div class="text">
                  <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                  <!-- <div class="meta">
                    <div><a href="<1?php the_permalink(); ?>"><span class="icon-calendar"></span> <1?php echo get_the_date('d'); ?>. <?php echo get_the_date('M'); ?>, <?php echo get_the_date('yy'); ?></a></div>
                    <div><a href="<1?php the_permalink(); ?>"><span class="icon-person"></span> <1?php echo get_the_author() ?></a></div>
                    <div><a href="<1?php the_permalink(); ?>"><span class="icon-chat"></span> <1?php echo get_the_comments_navigation() ?></a></div>
                  </div> -->
                </div>
              </div>
              <?php endwhile;
                endif;
              ?>
              <!-- <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="carboxiterapia.html"><!?php the_title(); ?></a></h3>
                  <!--<div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Sept. 20, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>-->
                <!--</div>
              </div> -->
            </div>
          </div>
          <div class="col-md">
          	<div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Horário de funcionamento</h2>
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Seg. a Sex. 09h00 - 18h00</h3>
              <h3 class="open-hours pl-4"><span class="ion-ios-time mr-3"></span>Sáb. 09h00 - 13h00</h3>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Agende uma avaliação gratuita!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <!-- <input type="text" class="form-control mb-2 text-center" placeholder="E-mail"> -->
                  <a href="mailto:contato@lumeconsultorio.com.br"><input value="E-mail" class="form-control submit px-3" style="text-align: center;"></a>
                  <a href="https://api.whatsapp.com/send?phone=5581999632602&text=Mensagem%20vinda%20do%20site%20da%20Lume."><input value="WhatsApp" class="form-control submit px-3" style="margin-top: 10px; text-align: center;"></a>   
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados | Este template foi feito <i class="icon-heart" aria-hidden="true"></i> por <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->

  <?php $home = get_template_directory_uri(); ?>

  <script src="<?= $home; ?>/assets/js/jquery.min.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?= $home; ?>/assets/js/popper.min.js"></script>
  <script src="<?= $home; ?>/assets/js/bootstrap.min.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.easing.1.3.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.waypoints.min.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.stellar.min.js"></script>
  <script src="<?= $home; ?>/assets/js/owl.carousel.min.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.mask.min.js"></script>
  <script src="<?= $home; ?>/assets/js/aos.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?= $home; ?>/assets/js/bootstrap-datepicker.js"></script>
  <script src="<?= $home; ?>/assets/js/jquery.timepicker.min.js"></script>
  <script src="<?= $home; ?>/assets/js/scrollax.min.js"></script>
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> -->
  <!-- <script src="<1?= $home; ?>/assets/js/google-map.js"></script> -->
  <script src="<?= $home; ?>/assets/js/main.js"></script>
  <script>
    $(document) . ready(function(){
      var SPMaskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
      },
      spOptions = {
        onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
      };
      $('#telefone').mask(SPMaskBehavior, spOptions);
    })
  </script>
  <script>
    $(document) . ready(function(){
      $('#timepicker').timepicker({
      timeFormat: 'H:i',
      interval: 1,
      minTime: '9',
      maxTime: '18:00',
      defaultTime: '11',
      startTime: '9:00',
      dynamic: false,
      dropdown: true,
      scrollbar: false
      });
    })
  </script>
  <?php wp_footer(); ?>
  </body>
</html>