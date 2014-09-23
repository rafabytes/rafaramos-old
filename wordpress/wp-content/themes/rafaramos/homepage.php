<?php

/*
Template Name: Homepage
*/ 

get_header()

?>

    <section id="sobre" class="featured">
      <div class="container">
        <div class="featured-title">
          <h1>O que eu faço</h1>
          <div class="linha-discreta"></div>
          <p>Muito mais que códigos.</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <i class="fa fa-paint-brush fa-3x"></i>
            <h2>Design</h2>
            <p>Além de se preocupar com as funcionalidades, um bom desenvolvedor precisa estar atento também à usabilidade.</p>
          </div>
          <div class="col-md-4">
            <i class="fa fa-mobile fa-3x"></i>
            <h2>Responsividade</h2>
            <p>Há muitos dispositivos conectados hoje em dia, então é fundamental que seu site esteja preparado para todos.</p>
         </div>
          <div class="col-md-4">
            <i class="fa fa-search fa-3x"></i>
            <h2>SEO</h2>
            <p>Algumas técnicas podem elevar a visibilidade da sua marca na Internet, assim ela aparecerá antes das outras.</p>
          </div>
        </div>
      </div>
    </section>

    <hr>

    <section id="portfolio" class="featured dark">
      <div class="container">
        <div class="featured-title">
          <h1>Trabalhos mais recentes</h1>
          <div class="linha-discreta"></div>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div>
        <div class="row">
          <div class="col-md-4">
            <a href="#">
              <div class="item-portfolio">
                <!-- <div style="width: 100%; height: 300px; border: 1px solid #ddd;"></div> -->
                <div class="overlay"><img src="<?php echo get_template_directory_uri(); ?>/images/parque.png"></div>
                <h3>Parque dos Arcos</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <div class="item-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/images/salatta.png">
                <h3>Salatta</h3>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="#">
              <div class="item-portfolio">
                <img src="<?php echo get_template_directory_uri(); ?>/images/prefeitura.png">
                <h3>Prefeitura de Altinho</h3>
              </div>
            </a>
          </div>
        </div>
        <a href="portfolio" class="btn btn-default">Ver mais</a>
      </div>
    </section>

    <hr>

    <section id="blog" class="featured">
      <div class="container">
        <div class="featured-title">
          <h1>Última do blog</h1>
          <div class="linha-discreta"></div>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div>
        <a href="#">
          <div class="row">
            <div class="col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/images/blog.jpg">
            </div>
            <div class="col-md-6">
              <div class="vAlign">
                <div class="vBox">
                  <h2>5 blogs para desenvolvedores web acompanharem</h2>
                  <h4>08/01/2014</h4>
                  <p>Uma das estratégias para um desenvolvedor se manter em destaque no mercado é ficar atento às novidades.</p>
                </div>
              </div>
            </div>
          </div>
        </a>
        <a href="blog.html" class="btn btn-default">Ver mais</a>
      </div>
    </section>

    <!-- <hr>

    <section id="parallax" data-speed="5">
      <div class="vAlign">
        <div class="vBox">
          <h1>Hello World!</h1>
          <p>Precisando de um site? Talvez eu possa ajudar :)</p>
        </div>
      </div>
    </section> -->
    
    <hr>

    <section id="contato" class="featured dark">
      <div class="container">
        <div class="featured-title">
          <h1>Fale comigo</h1>
          <div class="linha-discreta"></div>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
        </div>
        <form class="form-contato">
          <div class="row">
            <div class="col-md-6 align-center"><input type="text" placeholder="nome"></div>
            <div class="col-md-6 align-center"><input type="text" placeholder="e-mail"></div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <textarea class="form-control" rows="5" placeholder="mensagem"></textarea>
            </div>
          </div>
          <div class="row">
            <p><a href="#" class="btn btn-primary btn-large">enviar</a></p>
          </div>
        </form>
      </div>
    </section>

<?php get_footer() ?>