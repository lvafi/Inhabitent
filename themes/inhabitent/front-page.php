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
<section class="journal-feed container">
<h2>Inhabitent Journal</h2>
<ul>
  <?php $args = array(
    // 'order' => 'ASC',
    'numberposts' => 3,
    'post_type' => 'post',
  );?>
  <?php $journal_posts = get_posts( $args ); // returns an array of posts
    foreach ( $journal_posts as $post ) : setup_postdata( $post );?>
    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <li> 
        <div class="image-container" style="background-image: url('<?php echo $thumb['0'];?>')">
        </div>
        <div class="post-wrap">
        <p><?php echo get_the_time( "j F Y", $post->ID) ?>  / <?php echo $post->comment_count; ?> Comments  </p>
        <a href="<?php echo $post->guid; ?>"> <h2><?php echo $post->post_title; ?></h2>  </a>
        <p class="white-link"><a href="<?php echo $post->guid; ?>">  <span>Read Entry</span>  </a></p>
        </div>
      </li>
    <?php endforeach; wp_reset_postdata();?>
</ul>    
</section>   



<h1>Latest Adventures</h1>
<ul class="adventure-feed-list">
	
			 <li class="indvid-adventure-box" >
						 <span class=" adventure-image-1"></span>
            <h1>Getting Back to Nature in a Canoe</h1>
					 <button>Read More</button>
				</li>
		
			 <li class="indvid-adventure-box">
						 <span class=" adventure-image-2"></span>
            <h1>A Night with Friends at the Beach</h1>
					  <button>Read More</button>
				</li>
			 <li class="indvid-adventure-box">
				     <span class=" adventure-image-3"></span>
            <h2>Star-Gazing at the Night Sky</h2>
					  <button>Read More</button>
				</li>
			 <li class="indvid-adventure-box">
						 <span class=" adventure-image-4"></span>
            <h2>Taking in the View at Big Mountain</h2>
            <button>Read More</button>
				</li>
    </ul> 
</div> <!--primary -->
<?php get_footer(); ?>
     


