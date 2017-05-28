<?php
/**
 * The template for displaying the "product" post type archive page
 *
 * @package RED_Starter_Theme
 */
 get_header();?>

 <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
       <div class="container">
		     <?php if ( have_posts() ) : ?>
          <header class="page-header">
		    		<?php	the_archive_title( '<h1 class="page-title">', '</h1>' );
						?>
	   			<ul>
								<?php
								$product_types = get_terms('product-type');
								foreach ($product_types as $product_type) :
									?>
									<li>
										<?php $url = get_term_link($product_type->slug, 'product-type'); ?>
										<p><a href="<?php echo $url ?>"><?php echo $product_type->name ?></a></p>
									</li>
								<?php endforeach;?>
							</ul>
				</div>	
			</header><!-- .page-header -->

		
     <div class="product-grid">
		   <ul>
			  <?php while ( have_posts() ) : the_post(); ?>
					<li>
							<div class="thumbnail-wrap">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large');?> </a>
							</div>
							<div class="product-wrap">
												<h2><span><?php the_title(); ?></span></h2>
												<p><?php echo CFS()->get( 'product_price' ); ?></p>
										</div>
									</li>
				

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
