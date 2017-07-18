<?php
/**
 * Template Name: About Template
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>
    <div id="primary" class="content-area">
      <main id="main" class="site-main">
        <section class="about-hero">
          <h1>About</h1>
          <?php echo CFS()->get( 'about-hero' ); ?>
        </section>

        <section class="about-content">
          <h2>Our Story</h2>
          <?php echo CFS()->get( 'our_story' ); ?>
          <h2>Our Team</h2>
          <?php echo CFS()->get( 'our_team' ); ?>
        </section>
      </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>