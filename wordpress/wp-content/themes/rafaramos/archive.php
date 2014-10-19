<?php get_header(); ?>
			
			<div class="container">

				<div id="content" class="clearfix row">
				
					<div id="main" class="col-sm-8 clearfix" role="main">
					
						<div class="page-header">
						<?php if (is_category()) { ?>
							<h1>
								<?php single_cat_title(); ?>
							</h1>
						<?php } elseif (is_tag()) { ?> 
							<h1>
								<span><?php _e("Posts Tagged:", "wpbootstrap"); ?></span> <?php single_tag_title(); ?>
							</h1>
						<?php } elseif (is_author()) { ?>
							<h1>
								<span><?php _e("Posts By:", "wpbootstrap"); ?></span> <?php get_the_author_meta('display_name'); ?>
							</h1>
						<?php } elseif (is_day()) { ?>
							<h1>
								<span><?php _e("Daily Archives:", "wpbootstrap"); ?></span> <?php the_time('l, F j, Y'); ?>
							</h1>
						<?php } elseif (is_month()) { ?>
						    <h1>
						    	<span><?php _e("Monthly Archives:", "wpbootstrap"); ?>:</span> <?php the_time('F Y'); ?>
						    </h1>
						<?php } elseif (is_year()) { ?>
						    <h1>
						    	<span><?php _e("Yearly Archives:", "wpbootstrap"); ?>:</span> <?php the_time('Y'); ?>
						    </h1>
						<?php } ?>
						</div>

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
							
							<header>
								
								<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								
								<p class="meta">Em <time datetime="<?php the_time("j/m/Y"); ?>" pubdate><?php the_time("j/m/Y"); ?></time></p>
							
							</header> <!-- end article header -->
						
							<section class="post_content">
							
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'blog-destacada' ); ?></a>
							
								<?php the_excerpt(); ?>
						
							</section> <!-- end article section -->
						
						</article> <!-- end article -->
						
						<?php endwhile; ?>	
						
						<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
							
							<?php page_navi(); // use the page navi function ?>

						<?php } else { // if it is disabled, display regular wp prev & next links ?>
							<nav class="wp-prev-next">
								<ul class="pager">
									<li class="previous">&laquo;</li>
									<li class="next">&raquo;</li>
								</ul>
							</nav>
						<?php } ?>
									
						
						<?php else : ?>
						
						<article id="post-not-found">
						    <header>
						    	<h1><?php _e("No Posts Yet", "wpbootstrap"); ?></h1>
						    </header>
						    <section class="post_content">
						    	<p><?php _e("Sorry, What you were looking for is not here.", "wpbootstrap"); ?></p>
						    </section>
						    <footer>
						    </footer>
						</article>
						
						<?php endif; ?>
				
					</div> <!-- end #main -->
	    
					<?php get_sidebar(); // sidebar 1 ?>
	    
				</div> <!-- end #content -->

			</div>

<?php get_footer(); ?>