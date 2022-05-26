<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread"><?php echo single_cat_title(); ?></h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https:lumeconsultorio.com.br/servicos">Serviços <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo single_cat_title(); ?> <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <!-- <h2> <1?php echo single_cat_title(); ?> </h2> -->
			<div class="container">
				<div class="row">
	        <?php
		        while( have_posts()) :
				    the_post();
				  ?>
				  <!-- <div  id = "post-<1?php  echo  get_the_ID(); ?> " class = "post " > -->
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="<?php the_permalink(); ?>" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('<?= the_post_thumbnail_url($post_id); ?>');">
                <!-- <div class="meta-date text-center p-2">
                  <span class="day"><1?php echo get_the_date('d'); ?></span>
                  <span class="mos"><1?php echo get_the_date('M'); ?></span>
                  <span class="yr"><1?php echo get_the_date('yy'); ?></span>
                </div> -->
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
                <div class="d-flex align-items-center mt-4">
                  <p class="mb-0"><a href="<?php the_permalink(); ?>" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p>
                  <!--<p class="ml-auto mb-0">
                      <a href="#" class="mr-2">Admin</a>
                      <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                  </p>-->
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>		
        </div>
        <div class="row no-gutters my-5">
          <div class="col text-center">
            <div class="block-27">
            <ul>
            <li><?php wordpress_pagination(); ?></li>
            </ul>
            </div>
          </div>
        </div>
      </div>
  </section>

<?php get_footer(); ?> 