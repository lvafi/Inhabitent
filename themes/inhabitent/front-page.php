<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
  <section class="hero">
    <h2>Inhabitent Camping Supply Company</h2>
    <img src="<?php echo get_template_directory_uri() . '/images/logos/inhabitent-logo-full.svg'; ?>" alt="Inhabitent Logo" />
  </section>


    
<!--The Shop Section-->     

<section class="product-info container">
  <h2>Shop Stuff</h2>
  <ul>
    <?php 
      $product_types = get_terms( 'product-type' ); 
      if ( !empty($product_types) && !is_wp_error($product_types)) : ?>
          <?php foreach ( $product_types as $product_type ) : ?>
            <li>
              <img src="<?php echo get_template_directory_uri() . '/images/product-type-icons/' . $product_type->slug; ?>.svg">
              <p class="description"><?php echo $product_type->description;?> Stuff</h3></p>
              <p class="green-link"><a href="<?php echo get_term_link($product_type);?>">
                <?php echo $product_type->name;?>
              </a></p>
            </li>
          <?php endforeach; ?>
    <?php endif; ?>
  </ul>  
              <!--<pre><?php print_r ($product_type); ?></pre>-->

</section>


<!--The Journal Section-->
<h2>Inhabitent Journal</h2>
<section class="latest-entries container">
  <?php $args = array(
    // 'order' => 'ASC',
    'numberposts' => 3,
    'post_type' => 'post',
  );?>
  <?php $journal_posts = get_posts( $args ); // returns an array of posts
    foreach ( $journal_posts as $post ) : setup_postdata( $post );?>
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="single-journal">
        <div class="image-container" style="background-image: url('<?php echo $thumb['0'];?>')">
        </div>
        <p>
          <?php echo get_the_time( "j F Y", $post->ID) ?> 
          / 
          <?php echo $post->comment_count; ?> Comments
        </p>
        <a href="<?php echo $post->guid; ?>">
          <h2><?php echo $post->post_title; ?></h2>
        </a>
        <div class="blk-btn">
          <a href="<?php echo $post->guid; ?>">
            <span>Read Entry</span>
          </a>
        </div>
      </div>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); ?>
</section>   

     


