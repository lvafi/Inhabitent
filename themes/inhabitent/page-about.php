
<?php /** *
Template Name: About Page */ 
?>
<?php get_header(); ?>
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <section class="about-hero">
          <h1><?php the_title(); ?></h1>
        </section>
        <section class="about-wrap">
          
          <!--wp_add_inline_style( 'custom-style', $custom_css );-->
          <?php echo CFS()->get( 'about-hero' ); ?>
          <h2>Our Story</h2>
          <?php echo CFS()->get( 'our_story' ); ?>
          <h2>Our Team</h2>
          <?php echo CFS()->get( 'our_team' ); ?>
        </section>
      </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>