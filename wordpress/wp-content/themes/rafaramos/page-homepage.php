<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>
			
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<section id="intro" class="jumbotron" data-speed="4">
	  <div class="vAlign">
	    <div class="vBox">
	      <div id="hello-world">
	        <ul>
	          <li><h1>Olá mundo!</h1></li>
	          <li><h1>Hello world!</h1></li>
	          <li><h1>Bonjour monde!</h1></li>
	          <li><h1>Hello wereld!</h1></li>
	          <li><h1>Ciao mondo!</h1></li>
	          <li><h1>Hola mundo!</h1></li>
	        </ul>
	      </div>
	      <p>Precisando de um site? Talvez eu possa ajudar.</p>
	      <p>:)</p>
	    </div>
	  </div>
	</section>

	<hr>

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

	    <?php $query = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 3 ) );
	    if ( $query->have_posts() ) : ?>
	    	<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
	    		<div class="col-md-4">
	    		  <a href="<?php the_permalink(); ?>">
	    		    <div class="item-portfolio">
	    		      <!-- <div style="width: 100%; height: 300px; border: 1px solid #ddd;"></div> -->
	    		      <div class="overlay"><?php the_post_thumbnail( 'portfolio-destacada-home' ); ?></div>
	    		      <h3><?php the_title(); ?></h3>
	    		    </div>
	    		  </a>
	    		</div>
	    	<?php endwhile; wp_reset_postdata(); ?>
		<?php endif; ?>

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

	    <?php $query = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 1 ) );
        if ( $query->have_posts() ) : ?>
        	<?php while ( $query->have_posts() ) : $query->the_post(); ?>	
			    <div class="row">
			      <div class="col-md-6">
			        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'blog-destacada-home' ); ?></a>
			      </div>
			      <div class="col-md-6">
			        <div class="vAlign">
			          <div class="vBox">
			            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			            <h4><?php the_time("j/m/Y"); ?></h4>
			            <p><?php the_excerpt(); ?></p>
			          </div>
			        </div>
			      </div>
			    </div>
        	<?php endwhile; wp_reset_postdata(); ?>
    	<?php endif; ?>

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

<?php get_footer(); ?>