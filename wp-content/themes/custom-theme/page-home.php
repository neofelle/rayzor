<?php
/**
Template Name: Homepage
 */
?>
<?php get_header(); ?>
<section class="slider clear" style="position: relative;bottom: 0px;">
    <div class="large-12 columns">
        <?php 
            $slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =29 AND meta_key ='nivo_settings' LIMIT 1"); 
            $slider_settings   = unserialize($slider_data[0]->meta_value);
            $slider_images_ids = $slider_settings['manual_image_ids'];
            $slider_images     = $wpdb->get_results("SELECT  guid, post_excerpt FROM wp_posts WHERE id IN(" . $slider_images_ids . ")");                
        ?>
        <div class="owl-carousel owl-1 owl-theme">
            <?php foreach( $slider_images as $i ){ ?>
               <div class="item slider-bg" style="height:500px;display: block;background-size:cover;background-image: url('<?php echo $i->guid; ?>')">   
                    <div class="container owl-slider owl-content">
                        <div class="row banner center">
                          <?php echo $i->post_excerpt; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>  
<section class="consult clear" style="padding-top:60px;padding-bottom:60px;background-color: #e5e5e5;position: relative;bottom: 103px;">
    <div class="container content">
      <div class="col-md-6 left consult">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-1') ) : ?>
        <?php endif; ?>
      </div>
      <div class="col-md-6 left consult">
        <a href="#" class="uppercase">Schedule a <br/>Consult</a>
      </div>
    </div>
</section>
<section class="services clear" style="padding-top:0px;padding-bottom:0px;background-color: #fbfbfb;">
    <div class="container content service-container">
       <h1 class="uppercase center color-black">Our Services</h1>
       <hr/>
      <?php    
            $args = array(
            'post_type' => 'cpt_services',
            'posts_per_page' => 8,
            'order' => 'ASC'
            );
             
            $the_query = new WP_Query( $args );
             
            if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $cf_excerpt = get_post_meta($post->ID, 'services_excerpt', $single);            
        ?>

        <?php 
            $image = "";
            if (has_post_thumbnail( $post->ID ) ){                    
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
            }
        ?>
        <div class="col-xs-12 col-sm-5 col-md-4 center service-block left">
           <a href="<?php echo $post->guid; ?>">  
               <img class="cover-service" style="margin-bottom:30px;" src="<?php echo $image[0]; ?>">
               <h2><?php echo get_the_title(); ?></h2>
           </a>
        </div>
        <?php
            }
            } else {
            // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();         
        ?>
    </div>
</section>
<section class="about clear" style="margin-top:60px;padding-top:60px;padding-bottom:60px;background-color: #3a7136;">
    <div class="container content">
      <div class="col-md-7 left about" style="padding-top:20px;padding-bottom: 20px;">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('home-2') ) : ?>
        <?php endif; ?>
      </div>
      <div class="col-md-5 left about">
          <img class="cover" style="display: block;margin-left: auto;margin-right: auto;max-width: 375px;box-shadow: 4px 5px 30px rgba(27, 25, 25, 0.48);border-radius: 15px;margin-bottom:30px;" src="<?php echo get_template_directory_uri() . "/assets/images/home/about.png"; ?>">  
      </div>
    </div>
</section>
<?php get_footer(); ?>