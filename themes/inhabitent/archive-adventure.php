<?php
/**
* The template for displaying archive pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="container">
					<?php if ( have_posts() ) : ?>
						<header class="page-header">
							<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
						</header><!-- .page-header -->
						<div class="adventure-grid">
							<ul>
								<?php while ( have_posts() ) : the_post(); ?>
									<li>
										<div class="adventure-img"><?php the_post_thumbnail(); ?>
										</div>
										<div class="headline">
											<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<p class="white-link"><a href="<?php the_permalink(); ?>">Read More</a></p>
										</div>
									</li>
								<?php endwhile; ?>
							<?php else : ?>
								<?php get_template_part( 'template-parts/content', 'none' ); ?>
							<?php endif; ?>
						</ul>
					</div><!--.adventure-grid-->
				</div><!--.container-->
			</main><!-- #main -->
		</div><!-- #primary -->
<?php get_footer(); ?>
