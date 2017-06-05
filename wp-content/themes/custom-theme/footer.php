<section class="footer clear" style="background-color:#e5e5e5;">
    <div class="container footer-container">
        <div class="col-md-3 footer-content left">
            <h5>Services</h5>
			<?php 
				$v = 0;
				$menuargs = array(
					"theme_location" => "primary",
					"menu_class" => "s-menu",
					"menu_id" => "footer-a",
				);
				$items = wp_get_nav_menu_items( 'footer-a', $menuargs); 
			?> 
			<?php foreach( $items as $item ){ ?>           
           	 	<h4 class="uppercase"><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></h4>
            <?php } ?>
        </div>
        <div class="col-md-3 footer-content left">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-md-3 footer-content left">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
            <?php endif; ?>
        </div>
        <div class="col-md-3 footer-content left">
           <h6 class="bold uppercase">Rayzor’s Edge</h6>
           <h6 class="bold uppercase">Tree Service</h6>
           <br class="clear" />
           <h7>335 SNIFFENS LN</h7><br/>
           <h7>STRATFORD, CT, 06615</h7><br/>
			<?php                   
			$header_number    = $GLOBALS['cgv']['default-contact-number'];
			$cf_header_number = get_post_meta($post->ID, 'header_contact_number', true);                    
			if( $cf_header_number != "" ){
				$header_number = $cf_header_number;	
			}
			?>	
           <h7><?php echo $header_number; ?></h7><br/>
           <Br/>
           <h6 class="bold uppercase">Follow Us</h6>
           <div class="col-md-12 no-space social-media">
	            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-3') ) : ?>
	            <?php endif; ?>
           </div>
        </div>
    </div>
</section>
<section class="social-media" style="background-color: black;">
  <div class="container" style="padding-top: 10px;padding-bottom: 4px;">
    <div class="col-md-12 left center copyright-container" style="padding-top: 5px; width: 100%;">
          <p class="copyright" style="color: #b5b5b5;font-weight: 400;font-size: 15px;">© 2017 All Rights Reserved.</p>
    </div>

  </div>
</section>
<?php wp_footer();?>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script>
  $(document).ready(function() {
    $('.owl-1').owlCarousel({
      items: 1,
      loop: true,
      autoplay: true,
      margin: 10,
      dots: true,
      autoHeight: false,
      nav: true,
      navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
    });
  })
</script>
</body>
</html> 