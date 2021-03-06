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
              <p class="description"><?php echo $product_type->description;?></h3></p>
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
<section class="journal-feed container">
<h2>Inhabitent Journal</h2>
<ul>
  <?php 
      $args = array( 
        'post_type' => 'post', 
        'orderby' => 'date', 
        'order' => 'DESC',
        'posts_per_page' => 3 
    
    ); $custom_query = new WP_Query( $args );
                    
    if($custom_query->have_posts()) : while($custom_query->have_posts()) : $custom_query->the_post(); ?> 
      <li>
       <div class="image-container" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full');  }   ?>')">
        </div>
        <div class="post-wrap">
        <p><?php echo get_the_time( "j F Y", $post->ID) ?>  / <?php echo $post->comment_count; ?> Comments  </p>
        <a href="<?php the_permalink(); ?>"> <h3><?php the_title(); ?></h3>  </a>
        <p class="white-link"><a href="<?php the_permalink(); ?>">  <span>Read Entry</span>  </a></p>
        </div>   
      </li>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  
</ul>    
</section>   


<section class="adventures container">
  <h2>Latest Adventures</h2>
  <ul>
   <?php 
      $args = array( 
        'post_type' => 'Adventures', 
        'orderby' => 'date', 
        'order' => 'DESC',
        'posts_per_page' => 4 
    
    ); $custom_query = new WP_Query( $args );
                    
    if($custom_query->have_posts()) : while($custom_query->have_posts()) : $custom_query->the_post(); ?> 
      <li>
          <div class="story-wrapper" style="background-image: url('<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url('full');  }   ?>')">
          
         
          <div class="story-info">
            <h3 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <a class="white-btn" href="<?php the_permalink(); ?>">Read more</a>
          </div>
        </div>
      </li>




    <?php endwhile; endif; wp_reset_postdata(); ?>
 
  </ul>
  <p class="green-link"><a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">More Adventures</a></p>
</section>
</div> <!--primary -->
</div>
<?php get_footer(); ?>
     



