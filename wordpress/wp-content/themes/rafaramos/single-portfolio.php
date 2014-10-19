<?php get_header(); ?>
			
	<div id="content" class="clearfix row">
	
		<div id="main" class="col-md-12 clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
				
				<header>
				
					<?php the_post_thumbnail( 'wpbs-featured' ); ?>
					
					<div class="page-header"><h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1></div>
				
				</header> <!-- end article header -->
			
				<section class="post_content clearfix" itemprop="articleBody">
					<?php the_content(); ?>
					
					<?php wp_link_pages(); ?>
			
				</section> <!-- end article section -->
			
			</article> <!-- end article -->
			
			<?php endwhile; ?>			
			
			<?php else : ?>
			
			<article id="post-not-found">
			    <header>
			    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
			    </header>
			    <section class="post_content">
			    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
			    </section>
			    <footer>
			    </footer>
			</article>
			
			<?php endif; ?>
	
		</div> <!-- end #main -->

	</div> <!-- end #content -->

<?php get_footer(); ?>