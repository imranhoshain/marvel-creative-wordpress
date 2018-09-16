<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Marvel_creative_WordPress_theme
 */

get_header();
?>
<!--breadcrumb area start-->
    <div class="breadcrumb-area">
        <div style="background-image: url(<?php echo get_template_directory_uri() .'/assets/images/who.png'; ?>);" class="marvel-page-title-area section-padding">
            <div class="container">               
                <ul class="breadcrumb-link">
                   <?php if(function_exists('mj_wp_breadcrumb'))mj_wp_breadcrumb(); ?>
                </ul>
            </div>

        </div>
    </div>
    <!--breadcrumb area End-->
    <!-- 404 content section start -->
    <div class="error-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="error-img">                        
                        <img src="<?php echo get_template_directory_uri() .'/assets/images/404.png';?>" alt="404 Page" />
                    </div>                    
                    <div class="error-text boost-area-detail text-center">
					<h3><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'marvel-creative' ); ?></h3>
					<p><?php esc_html_e( 'Please try one of the following page.', 'marvel-creative' ); ?></p>
					<a href="<?php echo get_home_url(); ?>">Return home</a>
				</div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 content section end -->
	
<?php
get_footer();
