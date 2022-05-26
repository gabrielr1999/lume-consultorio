<?php get_header(); ?>
<?php $home = get_template_directory_uri(); ?>

<?php if(is_page('a-lume')) { ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">A LUME</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>A LUME <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
            
    <section class="ftco-section ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url('<?= $home ?>/assets/images/about.jpg);">
        </div>
        <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
          <div class="heading-section mb-5">
            <div class="pl-md-5 ml-md-5 pt-md-5">
              <span class="subheading mb-2">Bem-vindo à Lume</span>
              <h2 class="mb-2" style="font-size: 32px;">Consultório de Fisioterapia Dermatofuncional especializado em tratamentos estéticos corporais e faciais.</h2>
            </div>
          </div>
          <div class="pl-md-5 ml-md-5 mb-5">
            <p>Somos a Lume Consultório, empresa de Fisioterapia Dermatofuncional especializada em saúde, beleza e bem-estar. Realizamos tratamentos estéticos, corporais e faciais com equipamentos modernos.</p>
            <p>Nosso consultório está localizado em Recife, com ambiente aconchegante e relaxante, sala reservada, prezando pela privacidade e bem-estar dos pacientes.</p>
            <p>Todos os nossos equipamentos são seguros e aprovados pela Anvisa. Nossos atendimentos são realizados por nossa fisioterapeuta dermatofuncional. A Lume segue a tendência em produtos veganos, orgânicos e cruelty free. Fornecendo um tratamento personalizado, eficaz e saudável.</p>
            <div class="founder d-flex align-items-center mt-5">
              <div class="img" style="background-image: url('<?= $home ?>/assets/images/doc-5.jpg');"></div>
                <div class="text pl-3">
                  <h3 class="mb-0">Dra. Bruna Oliveira</h3>
                  <span class="position">Fisioterapeuta Dermatofuncional.</span> 
                  <br>Crefito 180211-F</br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
            
    <section class="ftco-intro" style="background-image: url('<?= $home ?>/assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2>Ganhe 15% de desconto no seu primeiro tratamento.</h2>
						  <p class="mb-0">Nesta avaliação fisioterapêutica, identificaremos seus objetivos e planejaremos um programa de tratamento personalizado.</p>
              <p></p>
            </div>
            <div class="col-md-3 d-flex align-items-center">
              <p class="mb-0"><a href="https://wa.me/5581999632602" class="btn btn-secondary px-4 py-3">Agende sua avaliação gratuita</a></p>
            </div>
          </div>
        </div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <span class="subheading">Testemunhos</span>
            <h2 class="mb-4">Experiências que nossos pacientes tiveram conosco</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <!--<div class="user-img" style="background-image: url(images/person_1.jpg)">
                  </div>-->
                  <div class="text pl-4 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Estava em busca de um local para fazer Radiofrequência. Já de cara gostei da avaliação, senti que foi indicado o necessário. Fui atendida pontualmente. A estrutura é ótima. Higienização impecável. Super recomendo.</p>
                    <p class="name">Alessandra Oliveira</p>
                    <span class="position">Paciente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <!--<div class="user-img" style="background-image: url(images/person_2.jpg)">
                  </div>-->
                  <div class="text pl-4 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                      <p>Preço justo, várias opções de tratamentos acessíveis, sem falar no atendimento impecável.</p>
                      <p class="name">Rayssa Leal</p>
                    <span class="position">Paciente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <!--<div class="user-img" style="background-image: url(images/person_3.jpg)">
                  </div>-->
                  <div class="text pl-4 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Ambiente lindo, aconchegante, procedimento de altíssima qualidade e um cuidado com a gente incrível! Adorei e super recomendo!</p>
                    <p class="name">Rebecca Freitas</p>
                    <span class="position">Paciente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <!--<div class="user-img" style="background-image: url(images/person_4.jpg)">
                  </div>-->
                  <div class="text pl-4 bg-light">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Lugar aconchegante, com uma profissional maravilhosa, educada, simpática e competente. Super recomendo</p>
                    <p class="name">Janainna Monteiro</p>
                    <span class="position">Paciente</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                <!--<div class="user-img" style="background-image: url(images/person_1.jpg)">
                </div>-->
                <div class="text pl-4 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>Ambiente muito agradável e aconchegante. Isso sem contar o atendimento maravilhoso feito com muito profissionalismo e carinho. Parabéns! Recomendo de olhos fechados.</p>
                  <p class="name">Cláudia Ribeiro</p>
                  <span class="position">Paciente</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php }?>

<?php if(is_page('servicos')) { ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Serviços</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Serviços <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 ftco-animate">
          <div class="staff">
            <a href="https://lumeconsultorio.com.br/tratamentos-corporais/"><div class="img-wrap d-flex align-items-stretch">
              <div class="img align-self-stretch" style="background-image: url('<?= $home ?>/assets/images/doc-1.jpg');"></div>
            </div></a>
            <div class="text pt-3 text-center">
              <a href="https://lumeconsultorio.com.br/tratamentos-corporais/"><h3>Tratamentos corporais</h3></a>
              <!--<span class="position mb-2">Denstist</span>-->
              <div class="faded">
                <p>Conheça nossos tratamentos indicados para gordura localizada, flacidez, celulite e estrias.</p>
                <!-- <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <a href="https://lumeconsultorio.com.br/tratamentos-faciais/"><div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('<?= $home ?>/assets/images/doc-2.jpg');"></div>
          </div></a>
          <div class="text pt-3 text-center">
            <a href="https://lumeconsultorio.com.br/tratamentos-faciais/"><h3>Tratamentos faciais</h3></a>
              <!--<span class="position mb-2">Dentist</span>-->
              <div class="faded">
                <p>Veja nossos tratamentos indicados para flacidez, renovação celular, clareamento de manchas, redução de marcas de acne, efeito lifting e hidratação.</p>
                <!-- <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <a href="https://lumeconsultorio.com.br/tratamento-para-gestantes/"><div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('<?= $home ?>/assets/images/doc-3.jpg');"></div>
          </div></a>
          <div class="text pt-3 text-center">
            <a href="https://lumeconsultorio.com.br/tratamento-para-gestantes/"><h3>Tratamento para gestantes</h3></a>
              <!--<span class="position mb-2">Dentist</span>-->
            <div class="faded">
              <p>Conheça as opções de procedimentos indicados para gestantes.</p>
              <!-- <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <a href="https://lumeconsultorio.com.br/tratamento-para-noivas/"><div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('<?= $home ?>/assets/images/doc-4.jpg');"></div>
          </div></a>
          <div class="text pt-3 text-center">
            <a href="https://lumeconsultorio.com.br/tratamento-para-noivas/"><h3>Tratamento para noivas</h3></a>
              <!--<span class="position mb-2">Dentist</span>-->
              <div class="faded">
                <p>Saiba mais sobre os planos exclusivos para noivas.</p>
                <!-- <ul class="ftco-social text-center">
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                  <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <a href="https://lumeconsultorio.com.br/lume-femme/"><div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url('<?= $home ?>/assets/images/doc-9.jpg');"></div>
          </div></a>
          <div class="text pt-3 text-center">
            <a href="https://lumeconsultorio.com.br/lume-femme/"><h3>Lume Femme</h3></a>
            <!--<span class="position mb-2">Dentist</span>-->
            <div class="faded">
              <p>Confira nossos tratamentos para clareamento de manchas, redução de flacidez e medidas  da região íntima feminina.</p>
              <!-- <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
      <!--<div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/doc-5.jpg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Dr. Lloyd Wilson</h3>
            <span class="position mb-2">Denstist</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/doc-6.jpg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Dr. Rachel Parker</h3>
            <span class="position mb-2">Dentist</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/doc-7.jpg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Dr. Ian Smith</h3>
            <span class="position mb-2">Dentist</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img-wrap d-flex align-items-stretch">
            <div class="img align-self-stretch" style="background-image: url(images/doc-8.jpg);"></div>
          </div>
          <div class="text pt-3 text-center">
            <h3>Dr. Alicia Henderson</h3>
            <span class="position mb-2">Dentist</span>
            <div class="faded">
              <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
              <ul class="ftco-social text-center">
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if(is_page('tratamentos')) { ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">TRATAMENTOS</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>TRATAMENTOS <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
        
  <section class="ftco-section ftco-services">
    <div class="container">
      <div class="row">
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-1.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Limpeza de pele</h3>
              <p>Desenvolvemos um protocolo especial para retirar células mortas, comedões (cravos), miliuns e controle da acne.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-2.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Peeling ultrassônico</h3>
              <p>Indicado para estimular a produção de colágeno, hidratar e iluminar a pele.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-3.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Radiofrequência</h3>
              <p>Previne e trata rugas, promovendo efeito lifting.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-4.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Carboxiterapia</h3>
              <p>Indicado para flacidez e redução de olheiras.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-5.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Microagulhamento</h3>
              <p>Excelente para rejuvenescimento, revitalização, clareamento de manchas e diminuição de cicatrizes de acne.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-6.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">BB Glow</h3>
              <p>A Lume é pioneira em Recife com esta técnica que estimula a produção de colágeno e elastina, hidrata, melhora o viço, controla a acne, diminui poros, rugas e melasma.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-7.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume touch (modeladora facial)</h3>
              <p>Protocolo exclusivo da Lume que hidrata, reduz linhas de expressão e promove efeito lifting imediato.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-8.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Drenagem linfática</h3>
              <p>Massagem superficial e suave. Indicada para ativar a circulação,  oxigenar os tecidos e estimular o sistema linfático.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-9.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Hidratação facial</h3>
              <p>Indicado para repor os nutrientes e revitalizar a pele.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-10.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Carboxiterapia</h3>
              <p>Procedimento feito por meio da infusão de gás carbônico nas camadas da pele. Indicada para flacidez, gordura localizada, celulite e estrias.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-11.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Radiofrequência</h3>
              <p>Tratamento para diminuir a flacidez e a gordura localizada.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-12.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Vibrocell</h3>
              <p>Indicado para remodelar o contorno corporal, drenagem, redução do grau de celulite e tensões musculares.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-13.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume Touch (modeladora)</h3>
              <p>Este protocolo exclusivo de massagem hidrata, tonifica, modela e atua na drenagem corporal.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-14.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume Detox</h3>
              <p>Tratamento exclusivo da Lume que associa massagem à manta térmica. Com o poder de hidratar, modelar e desintoxicar.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-15.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume Relax</h3>
              <p>Massagem que proporciona diminuição de tensões musculares, relaxamento e bem-estar.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-16.jpg'"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Drenagem linfática</h3>
              <p>Massagem suave que ativa a circulação e oxigenação dos tecidos através do estímulo do sistema linfático.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-17.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Ventosaterapia</h3>
              <p>Massagem realizada com ventosas, ativa a circulação e diminui tensões musculares.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-19.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume Femme Shine</h3>
              <p>Indicado para clareamento de manchas da região axilar, interno de coxa e região íntima feminina.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-20.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume Femme Firm</h3>
              <p>Procedimento para redução de flacidez em região íntima feminina.</p>
            </div>
          </div>      
        </div>
        <div class="col-md-4 d-flex services align-self-stretch p-4 ftco-animate">
          <div class="media block-6 d-block">
            <div class="img w-100" style="background-image: url('<?= $home ?>/assets/images/dept-21.jpg');"></div>
            <div class="media-body p-2 mt-3">
              <h3 class="heading">Lume Femme Redux</h3>
              <p>Tratamento para redução de medida do monte de vênus (supra púbica).</p>
            </div>
          </div>      
        </div>
      </div>
    </div>
  </section>
<?php } ?>

<?php if(is_page('planos')) { ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">PLANOS</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>PLANOS <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <span class="subheading">Planos</span>
          <h2 class="mb-4">Nossos Preços</h2>
          <p>Desenvolvemos planos promocionais para cuidar de nossas pacientes nos momentos mais especiais. Confira abaixo os planos exclusivos para noivas e gestantes.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Véu</span></p>
              <p><b>Indicado para ser feito até a véspera da data.</b></p>
              <!--<h3 class="mb-4">Plano Véu</h3>-->
              <!--<p><span class="price">Indicado para ser feito até a véspera da data.</span></p>-->
            </div>
            <ul>
              <li>01 sessão de Lume Relax de 30 minutos</li>
              <li>01 sessão de Peeling ultrassônico</li>
              <li>01 sessão de Lume Touch facial</li>
              <li>01 sessão de Lume Touch corporal 30 minutos</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Grinalda</span></p>
              <p><b>Indicado para ser feito com 1 mês de antecedência.</b></p>
              <!--<h3 class="mb-4">Plano Grinalda</h3>-->
              <!--<p><span class="price">Indicado para ser feito com 1 mês de antecedência.</span></p>-->
            </div>
            <ul>
              <li>01 sessão de Baby Face</li>
              <li>01 sessão de Peeling ultrassônico</li>
              <li>04 sessões de Radiofrequência facial</li>
              <li>05 aplicações de Máscara facial</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry active pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Buquê</span></p>
              <p><b>Indicado para ser feito com 1 mês de antecedência.</b></p>
              <!--<h3 class="mb-4">Buquê</h3>-->
              <!--<p><span class="price">Indicado para ser feito com 1 mês de antecedência.</span></p>-->
            </div>
            <ul>
              <li>06 sessões de Radiofrequência ou Carboxiterapia de 30 minutos</li>
              <li>04 sessões de Massagens de 30 minutos</li>
              <li>04 sessões de Vibrocell de 30 minutos</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Lume Maternity 1</span></p>
              <p><b>Protocolo inicial de cuidados para gestantes.</b></p>
              <!--<h3 class="mb-4">Plano Lume Maternity 1 (Especial para gestante)</h3>-->
              <!--<p><span class="price">Protocolo inicial de cuidados.</span></p>-->
            </div>
            <ul>
              <li>01 sessão de Baby Face</li>
              <li>01 sessão de Hidratação abdominal</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry active pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Lume Maternity 2</span></p>
              <p><b>Protocolo intermediário de cuidados para gestantes.</b></p>
              <!--<h3 class="mb-4">Plano Lume Maternity 2 (Plano para gestante)</h3>-->
              <!--<p><span class="price">Protocolo intermediário de cuidados.</span></p>-->
            </div>
            <ul>
              <li>01 sessão de Baby Face</li>
              <li>01 sessão de Hidratação abdominal</li>
              <li>01 sessão de Lume Relax</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 ftco-animate">
          <div class="pricing-entry active pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Lume Maternity 3</span></p>
              <p><b>Protocolo avançado de cuidados para gestantes.</b></p>
              <!--<h3 class="mb-4">Plano Lume Maternity 3 (Plano para gestante)</h3>-->
              <!--<p><span class="price">Protocolo avançado de cuidados.</span></p>-->
            </div>
            <ul>
              <li>01 sessão de Baby Face</li>
              <li>01 sessão de Hidratação facial</li>
              <li>01 sessão de Hidratação abdominal</li>
              <li>01 sessão de Lume Relax</li>
            </ul>
          </div>
        </div>
        <!-- <div class="col-md-3 ftco-animate">
          <div class="pricing-entry active pb-5 text-center mt-4">
            <div>
              <p><span class="price">Plano Promocional da estação</span></p>
              <p><span class="price"></span></p>
              <h3 class="mb-4">Plano Promocional da estação</h3>
            </div>
            <ul>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Preço: R$ 355,00</a></p>
          </div>
        </div> -->
      </div>
    </div>
  </section>
<?php } ?>

<?php if(is_page('blog')) { ?>
  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Blog</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  <?php wordpress_pagination(); ?>
  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row">
        <?php 
          $all_posts_query = new WP_Query( array(
            'nopaging' => false, // deve ser usado no lugar de posts_per_page -1
            'post_status' => 'publish'
          ) );

          if ( $all_posts_query->have_posts() ) :
            while ( $all_posts_query->have_posts() ) :
            $all_posts_query->the_post();
        ?>
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
                <p class="ml-auto mb-0">
                  <!-- <a href="#" class="mr-2"><1?php echo get_the_author() ?></a> -->
                  <!-- <a href="#" class="meta-chat"><span class="icon-chat"></span> </a> -->
                </p>
              </div>
            </div>
          </div>
        </div>
        <?php endwhile;
          endif;
        ?>
        
        <!-- <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="peeling-ultrassonico.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_2.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="peeling-ultrassonico.html">Peeling ultrassônico</a></h3>
              <p>Mais moderno do que o peeling de diamante e o de cristal.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="peeling-ultrassonico.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="hidratacao-facial.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_5.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="hidratacao-facial.html">Hidratação facial</a></h3>
              <p>Opção de tratamento para melhora da textura e luminosidade facial.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="hidratacao-facial.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="drenagem-linfatica.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_6.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="drenagem-linfatica.html">Drenagem linfática facial</a></h3>
              <p>Massagem com movimentos suaves para diminuição de inchaço e melhora do viço.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="drenagem-linfatica.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="lume-touch-modeladora-facial.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_4.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="lume-touch-modeladora-facial.html">Lume Touch (Massagem modeladora facial)</a></h3>
              <p>Massagem modeladora facial para efeito imediato de lifting facial.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="lume-touch-modeladora-facial.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="carboxiterapia-facial.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_6.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="carboxiterapia-facial.html">Carboxiterapia facial</a></h3>
              <p>Tecnologia para redução de olheiras.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="carboxiterapia-facial.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="radiofrequencia-facial.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_6.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="radiofrequencia-facial.html">Radiofrequência facial</a></h3>
              <p>Procedimento que estimula a produção de colágeno. Atua diretamente sobre flacidez tecidual.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="radiofrequencia-facial.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="microagulhamento.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_6.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="microagulhamento.html">Microagulhamento</a></h3>
              <p>Tratamento que estimula a produção de colágeno, reduz manchas e cicatrizes.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="microagulhamento.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 ftco-animate">
          <div class="blog-entry">
            <a href="bb-glow.html" class="block-20 d-flex align-items-end justify-content-end" style="background-image: url('images/image_5.jpg');"> -->
              <!--<div class="meta-date text-center p-2">
                <span class="day">18</span>
                <span class="mos">September</span>
                <span class="yr">2019</span>
              </div>-->
            <!-- </a>
            <div class="text bg-white p-4">
              <h3 class="heading"><a href="bb-glow.html">BB Glow</a></h3>
              <p>Técnica coreana de microagulhamento que estimula a produção de colágeno e elastina, hidratar e melhorar o viço, controlar a acne, diminuir poros, minimização de rugas e melasma.</p>
              <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="bb-glow.html" class="btn btn-primary">Leia Mais <span class="ion-ios-arrow-round-forward"></span></a></p> -->
                <!--<p class="ml-auto mb-0">
                  <a href="#" class="mr-2">Admin</a>
                  <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>-->
              <!-- </div>
            </div>-->
          <!-- </div>
        </div> -->
      </div> 
      
      <!-- <div class="row no-gutters my-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <!--<li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
              <li class="active"><span>1</span></li>
              <li><a href="blog-2.html">2</a></li>
              <li><a href="blog-3.html">3</a></li>
              <li><a href="blog-4.html">4</a></li>
              <!--<li><a href="#">5</a></li>
              <li><a href="blog-2.html"><i class="ion-ios-arrow-forward"></i></a></li>
            </ul>
          </div>
        </div>
      </div>  -->
    </div>
  </section>
<?php } ?>

<?php if(is_page('contato')) { ?>

  <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= $home ?>/assets/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">CONTATO</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="https://lumeconsultorio.com.br/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>CONTATO <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
      <div class="row d-flex align-items-stretch no-gutters">
        <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
          <form method="POST" action="<?= $home ?>/contato.php">
            <!-- <1?php 
              the_post(  );
              the_content();
            ?> -->
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Assunto" required>
            </div>
            <div class="form-group">
            <textarea cols="30" rows="7" class="form-control" name="message" placeholder="Mensagem" required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex align-items-stretch">
          <!-- <div id="map"></div> -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.5510421514637!2d-34.89535978522022!3d-8.04513439420703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab197e8daf69d7%3A0xc0d9287f7481199d!2sLume%20Consult%C3%B3rio%20de%20Est%C3%A9tica%20e%20Bem-estar%20em%20Recife!5e0!3m2!1spt-BR!2sbr!4v1582324038840!5m2!1spt-BR!2sbr" width="600" height="593" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
    </div>
  </section>
  
  <section class="ftco-section contact-section">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contato de informação</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
          <div class="bg-light d-flex align-self-stretch box p-4">
            <p><span>Endereço:</span> Rua Santo Elias, 367 - Loja 16 - Espinheiro - Recife</p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light d-flex align-self-stretch box p-4">
            <p><span>Telefone:</span> <a href="tel:+5581999632602">(81) 99963-2602</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light d-flex align-self-stretch box p-4">
            <p><span>Email:</span> <a href="mailto:contato@lumeconsultorio.com.br">contato@lumeconsultorio.com.br</a></p>
          </div>
        </div>
        <div class="col-md-3 d-flex">
          <div class="bg-light d-flex align-self-stretch box p-4">
            <p><span>Website</span> <a href="#">lumeconsultorio.com.br</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
 
<?php get_footer(); ?>

<!-- <!?php
    if(have_posts()) {
        while(have_posts()) {
            the_post();
?>
    <!?php the_title();?>
    <!?php the_content(); ?>

<!?php
        }
    }
?>-->