<?php
/**
 * content and content wrapper end
 *
 * @since SuperMag 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_after_content' ) ) :

    function supermag_after_content() {
      ?>
        </div><!-- #content -->
        </div><!-- content-wrapper-->
    <?php
    }
endif;
add_action( 'supermag_action_after_content', 'supermag_after_content', 10 );

/**
 * Footer content
 *
 * @since SuperMag 1.0.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_footer' ) ) :

    function supermag_footer() {

	    $supermag_customizer_all_values = supermag_get_theme_options();
	    if( is_active_sidebar( 'full-width-footer' ) ) :
		    dynamic_sidebar( 'full-width-footer' );
	    endif;
        ?>
        <div class="clearfix"></div>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-wrapper">
                <div class="top-bottom wrapper">
                    <div id="footer-top">
                        <div class="footer-columns">
                           <?php if( is_active_sidebar( 'footer-col-one' ) ) : ?>
                                <div class="footer-sidebar acme-col-3">
                                    <?php dynamic_sidebar( 'footer-col-one' ); ?>
                                </div>
                            <?php endif; 
                           if( is_active_sidebar( 'footer-col-two' ) ) : ?>
                                <div class="footer-sidebar acme-col-3">
                                    <?php dynamic_sidebar( 'footer-col-two' ); ?>
                                </div>
                            <?php endif;
                           if( is_active_sidebar( 'footer-col-three' ) ) : ?>
                                <div class="footer-sidebar acme-col-3">
                                    <?php dynamic_sidebar( 'footer-col-three' ); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div><!-- #foter-top -->
                    <div class="clearfix"></div>
                 </div><!-- top-bottom-->
                <div class="wrapper footer-copyright border text-center">
                    <p>
                        <?php if( isset( $supermag_customizer_all_values['supermag-footer-copyright'] ) ): ?>
                            <?php echo wp_kses_post( $supermag_customizer_all_values['supermag-footer-copyright'] ); ?>
                        <?php endif; ?>
                    </p>
                    <div class="site-info">
						
						
					<a href="<?php echo esc_url( __( 'https://www.facebook.com/%E0%A6%A6%E0%A7%88%E0%A6%A8%E0%A6%BF%E0%A6%95-%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8-%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE-1914772341886701/?modal=admin_todo_tour/', 'supermag' ) ); ?>"><?php printf( esc_html__( ' %s', 'supermag' ), ' আমাদের সম্পর্কে  ' ); ?></a>
					<span class="sep"> | </span>
						
					<a href="<?php echo esc_url( __( 'https://www.facebook.com/%E0%A6%A6%E0%A7%88%E0%A6%A8%E0%A6%BF%E0%A6%95-%E0%A6%A8%E0%A6%A4%E0%A7%81%E0%A6%A8-%E0%A6%AC%E0%A6%BE%E0%A6%B0%E0%A7%8D%E0%A6%A4%E0%A6%BE-1914772341886701/?modal=admin_todo_tour/', 'supermag' ) ); ?>"><?php printf( esc_html__( ' %s', 'supermag' ), ' বিজ্ঞাপন  ' ); ?></a>
					<span class="sep"> | </span>
					
					<a href="<?php echo esc_url( __( 'http://localhost/project/Doinik-Notun-Barta2/', 'supermag' ) ); ?>"><?php printf( esc_html__( ' %s', 'supermag' ), ' শর্তাবলী  ' ); ?></a>
					<span class="sep"> | </span>
						
					<a href="<?php echo esc_url( __( 'http://localhost/project/Doinik-Notun-Barta2/', 'supermag' ) ); ?>"><?php printf( esc_html__( ' %s', 'supermag' ), ' যোগাযোগ  ' ); ?></a>
					<span class="sep"> | </span>
					
					
								 
                    </div><!-- .site-info -->
                </div>
            </div><!-- footer-wrapper-->
        </footer><!-- #colophon -->
    <?php
    }
endif;
add_action( 'supermag_action_footer', 'supermag_footer', 10 );

/**
 * Page end
 *
 * @since SuperMag 1.1.0
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'supermag_page_end' ) ) :

    function supermag_page_end() {
        ?>
        </div><!-- #page -->
    <?php
    }
endif;
add_action( 'supermag_action_after', 'supermag_page_end', 10 );