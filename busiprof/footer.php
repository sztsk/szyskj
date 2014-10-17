<?php 
/*
 	*Theme Name	: BusiProf
  	
   * @file           footer.php
   * @package        Busiprof
   * @author         Priyanshu Mittal
   * @copyright      2013 Webriti
   * @license        license.txt
   * @filesource     wp-content/themes/Busiprof/footer.php
  */
  
  
  ?>
<div class="widget_section">
  <div class="container">
    <div class="row-fluid">
      <?php if ( is_active_sidebar( 'footer-widget-area' ))
        {  
        	dynamic_sidebar('footer-widget-area' );   
        } else { ?>
      <div class="span3"> 
        <?php the_widget('WP_Widget_Archives'); ?>
      </div>
      <div class="span3">                       
        <?php the_widget('WP_Widget_Categories'); ?>
      </div>
      <div class="span3">
        <?php the_widget('WP_Widget_Meta'); ?>
      </div>
      <div class="span3">
        <?php  the_widget('WP_Widget_Pages'); ?>
      </div>
      <?php }  ?>
    </div>
  </div>
</div>
<!--closing of the footer widgets area-->
<?php $current_options = get_option('busiprof_theme_options' );?>
<?php if($current_options['busiprof_custom_css']!='')
  { echo "<style type='text/css'>".$current_options['busiprof_custom_css']."</style>"; }
  ?>
<div class="footer-section">
  <div class="container">
    <div class="row">
      <div class="span8">
        <?php _e(' Powered by ', 'busi_prof'); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'busi_prof' ) ); ?>"><?php _e('WordPress', 'busi_prof'); ?></a>
        <?php echo $current_options['busiprof_copy_rights_text'] ; ?><?php if($current_options['footer_designedby'] != '' ) { ?>&nbsp;<a target="_blank" rel="nofollow" href="<?php echo $current_options['footer_url'] ?>"><?php echo $current_options['footer_designedby'] ?></a><?php } ?>
      </div>
    </div>
  </div>
</div>
<!-- closing of the footer -->
<?php wp_footer(); ?> 
</body>
</html>