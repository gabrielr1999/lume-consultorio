<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>

  <?php if( have_posts()) {
    while( have_posts()) {
          the_post();
  ?>
  <section class="hero-wrap hero-wrap-2" alt="wallpaper do post" style="background-image: url('<?= $home ?>/assets/images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="https://lumeconsultorio.com.br/blog">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span><?php the_title(); ?> <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
		
		<section class="ftco-section">
			<div class="container">
				<div class="row">
        
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3"><?php the_title(); ?></h2>
            <!-- <ul>
              <li><strong>Objetivo:</strong> Reduzir olheiras, estimular produção de colágeno e elastina.</li>
              <li><strong>Indicado:</strong> Para olheiras, flacidez facial e gordura inferior do mento.</li>
              <li><strong>Duração:</strong> 30 minutos</li>
            </ul>
            <p> -->
            <!-- <1?php the_post_thumbnail(); ?> -->
              <!-- <img src="<1?php the_post_thumbnail(); ?>" alt="" class="img-fluid"> -->
              <img src="<?php echo the_post_thumbnail_url($post_id); ?>" alt="Imagem principal do post" class="img-fluid">
              <?php echo get_the_post_thumbnail_caption(); ?> 
            </p>
            <p><?php the_content(); ?></p>
            <!-- <p>A Carboxiterapia é amplamente utilizada na Fisioterapia dermatofuncional. Consiste em uma infusão de gás carbônico na face. Proporcionando melhora na circulação e oxigenação dos tecidos, estimulando a produção de colágeno e elastina.</p> -->
            <!-- <p>Obtemos ótimos resultados na redução de flacidez tecidual, linhas de expressão facial e no aspecto das olheiras.</p> -->
            <!-- <p>Um dos diferenciais da Lume,  é a aplicação da Radiofrequência antes do procedimento da Carboxiterapia facial. Reduzindo assim o incômodo e potencializando os resultados sobre a flacidez tecidual.</p> -->
            <!-- <div class="tag-widget post-tag-container mb-5 mt-5"> -->
              <div class="tagcloud">
              <?php
                  //Pega todas as categorias do post
                  $cats = get_the_category($post->ID);  

                  //Verifica a primeira categoria retornada e pega seu parentesco. 
                  //Se um post tem múltiplas categorias que levam a parentescos separados, retornará o primeiro parentesco pertencente à primeira categoria retornada.
                  $parent = get_category($cats[0]->category_parent);

                  //Se obtiver uma mesnagem de erro, significa que já estamos na categoria-pai.
                  if (is_wp_error($parent)){
                    $cat = get_category($cats[0]);
                  }
                  //Senão, atribui a categoria retornada para trabalhar equivalente a uma categoria-pai.
                  else{
                    $cat = $parent;
                  } 
                  ?>
                <a href="https://lumeconsultorio.com.br/<?= $cat->slug ?>" class="tag-cloud-link"><?php echo $cat->name; ?></a>
                <!-- <a href="#" class="tag-cloud-link"><1?= get_cat_name($category_id = 1) ?></a> -->
                <!-- <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a> --> 
              </div>
            
            <div class="about-author d-flex p-4 bg-light">
              <div class="bio mr-5">
                <img src="<?= $home ?>/assets/images/person_1.jpg" alt="Image placeholder" class="img-fluid mb-4">
              </div>
              <div class="desc">
                <h3>Dra. Bruna Oliveira</h3>
                <p>Fisioterapeuta Dermatofuncional</p>
                <p>Crefito 180211-F</p>
              </div>
            </div>


            <!--<div class="pt-5 mt-5">
              <h3 class="mb-5 h4 font-weight-bold">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_1.jpg" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                        <h3>John Doe</h3>
                        <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>


                      <ul class="children">
                        <li class="comment">
                          <div class="vcard bio">
                            <img src="images/person_1.jpg" alt="Image placeholder">
                          </div>
                          <div class="comment-body">
                            <h3>John Doe</h3>
                            <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                            <p><a href="#" class="reply">Reply</a></p>
                          </div>

                            <ul class="children">
                              <li class="comment">
                                <div class="vcard bio">
                                  <img src="images/person_1.jpg" alt="Image placeholder">
                                </div>
                                <div class="comment-body">
                                  <h3>John Doe</h3>
                                  <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                                  <p><a href="#" class="reply">Reply</a></p>
                                </div>
                              </li>
                            </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta mb-2">January 03, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
              </ul>-->
            
              <!-- END comment-list -->
              
              <!--<div class="comment-form-wrap pt-5">
                <h3 class="mb-5 h4 font-weight-bold">Comentário</h3>
                <form action="#" class="p-5 bg-light">
                  <div class="form-group">
                    <label for="name">Nome *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Mensagem</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Enviar" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div>-->
          </div> <!-- .col-md-8 -->

          <div class="col-lg-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <!--<form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>-->
            </div>
            <div class="sidebar-box ftco-animate">
            	<h3>Serviços</h3>
              <ul class="categories">
                <li><a href="https://lumeconsultorio.com.br/tratamentos-corporais/">Tratamentos corporais <span>( <?php echo $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = 7"); ?> )</span></a></li>
                <li><a href="https://lumeconsultorio.com.br/tratamentos-faciais/">Tratamentos faciais <span>( <?php echo $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = 8"); ?> )</span></a></li>
                <li><a href="https://lumeconsultorio.com.br/tratamento-para-gestantes/">Tratamento para gestantes <span>( <?php echo $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = 5"); ?> )</span></a></li>
                <li><a href="https://lumeconsultorio.com.br/tratamento-para-noivas/">Tratamento para noivas <span>( <?php echo $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = 6"); ?> )</span></a></li>
                <!-- <li><a href="https://lumeconsultorio.com.br/lume-femme/">Lume Femme <span>( <?php echo $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = 7"); ?> )</span></a></li> -->
                <li><a href="https://lumeconsultorio.com.br/estetica-intima/">Estética Íntima <span>( <?php echo $wpdb->get_var("SELECT count FROM wp_term_taxonomy WHERE term_taxonomy_id = 3"); ?> )</span></a></li>
                <!--<li><a href="#">Ophthalmology <span>(2)</span></a></li>-->
              </ul>
            </div>

            <div class="sidebar-box ftco-animate">
                <h3>Mais vistos</h3>
                <?php $all_posts_query = new WP_Query( array( 'posts_per_page' => 3 ) );
              
              if ( $all_posts_query->have_posts() ) :
                while ( $all_posts_query->have_posts() ) :
                    $all_posts_query->the_post();
                ?>
                <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('<?php echo the_post_thumbnail_url($post_id); ?>');"></a>
                  <div class="text">
                    <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <!-- <div class="meta">
                      <div><a href="<1?php the_permalink(); ?>"><span class="icon-calendar"></span> <1?php echo get_the_date('d'); ?>. <1?php echo get_the_date('M'); ?>, <1?php echo get_the_date('yy'); ?></a></div>
                      <div><a href="<1?php the_permalink(); ?>"><span class="icon-person"></span> <1?php echo get_the_author() ?></a></div>
                      <div><a href="<1?php the_permalink(); ?>"><span class="icon-chat"></span> </a></div>
                    </div> -->
                  </div>
              </div>
              <?php endwhile;
                    endif;
                  ?>
              </div>
                
            <div class="sidebar-box ftco-animate">
            
              <h3>Tags</h3>
              
              <ul class="tagcloud m-0 p-0">
                <?php $post_tags = get_the_tags();
  
                  if ( $post_tags ) :
                      foreach( $post_tags as $tag ) :
                      
                ?>
                <a href="#" class="tag-cloud-link"><?php echo $tag->name ?></a>
                <!-- <a href="#" class="tag-cloud-link">Hospital</a> -->
                <!-- <a href="#" class="tag-cloud-link">Nurse</a>
                <a href="#" class="tag-cloud-link">Doctor</a>
                <a href="#" class="tag-cloud-link">Medicine</a>
                <a href="#" class="tag-cloud-link">Facilities</a>
                <a href="#" class="tag-cloud-link">Staff</a>--> 
                <?php
                    endforeach;
                  endif;
                ?>
              </ul>
            </div>

            <!--<div class="sidebar-box ftco-animate">
            	<h3>Archives</h3>
              <ul class="categories">
              	<li><a href="#">December 2018 <span>(30)</span></a></li>
              	<li><a href="#">Novemmber 2018 <span>(20)</span></a></li>
                <li><a href="#">September 2018 <span>(6)</span></a></li>
                <li><a href="#">August 2018 <span>(8)</span></a></li>
              </ul>
            </div>-->

                    
            <!-- <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p><1?php the_excerpt(); ?></p>
            </div> -->
          </div><!-- END COL -->
          <?php
                }
            }
            ?>
            </div>
        </div>
			</div>
		</section>

<?php get_footer(); ?>
