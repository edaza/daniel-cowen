<?php
	add_action( 'after_setup_theme', 'danielcowen_setup');
	
	if ( ! function_exists( 'danielcowen_setup' ) ):
	/**
 	 * Sets up theme defaults and registers support for various WordPress features.
 	 *
 	 * Note that this function is hooked into the after_setup_theme hook, which runs
 	 * before the init hook. The init hook is too late for some features, such as indicating
 	 * support post thumbnails.
 	 *
 	 * To override danielcowen_setup() in a child theme, add your own danielcowen_setup to your child theme's
 	 * functions.php file.
 	 *
 	 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 	 * @uses register_nav_menus() To add support for navigation menus.
 	 * @uses add_custom_background() To add support for a custom background.
 	 * @uses add_editor_style() To style the visual editor.
 	 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 	 *
 	 * @since Daniel Cowen 0.1
 	 */

		function danielcowen_setup(){
			
			// This theme styles the visual editor with editor-style.css to match the theme style.
			add_editor_style();
			
			// This theme uses post thumbnails
			add_theme_support( 'post-thumbnails' );
			

		}
		
	endif;

    if ( ! function_exists( 'danielcowen_display_meta' ) ):

        function danielcowen_display_meta( $meta_value, $meta_key = 'Column', $output = OBJECT, $post_type = 'page' ){
	       global $wpdb;

	       $page = $wpdb->get_var( $wpdb->prepare( "
                                       SELECT ID 
                                       FROM $wpdb->posts wposts, $wpdb->postmeta wpostmeta
                                       WHERE wposts.ID = wpostmeta.post_id 
                                       AND wpostmeta.meta_key = %s
                                       AND wpostmeta.meta_value =%s
                                       AND wposts.post_status = 'publish'
                                       AND wposts.post_type = %s ", $meta_key, $meta_value, $post_type) );

	       if ( $page )
	       	return get_page( $page, $output );
	       return null;
        }

    endif;

    if ( ! function_exists( 'danielcowen_display_content' ) ):

        function danielcowen_display_content ( $page ){
	    $content = $page->post_content;
	    $content = apply_filters('the_content', $content);
	    $content = str_replace(']]>', ']]&gt;', $content);

        if ( $content )
		  echo $content;
          return null;
        }

    endif;

    if ( ! function_exists( 'daniel_ngg_field' ) ):
        function daniel_ngg_field ( $field_value, $custom_field, $ori_field ){
            if ( $field_value->ngg_custom_fields[ $custom_field ] != NULL ):
                echo $field_value->ngg_custom_fields[ $custom_field ];
            else:
                echo $field_value->$ori_field;
            endif; 
        }
    endif;

    if ( ! function_exists( 'daniel_ngg_style' ) ):
        function daniel_ngg_style ( $field_value, $custom_field ){
            if ( $field_value->ngg_custom_fields[ $custom_field ] != NULL ):
                echo $field_value->ngg_custom_fields[ $custom_field ];
            endif; 
        }
    endif;


    if ( ! function_exists( 'danielcowen_column' ) ):
    
            function danielcowen_column( $column_value, $post = NULL ){
                    if ( !$post )
                        $content = danielcowen_display_meta( $column_value );
                ?>
                    <div id="column-<?php _e( $column_value ); ?>" class="column">
    					<div class="column-title">
    							<?php 
    							$title = $content->post_title;
    							echo $title
    							?>
    					</div><!-- .column-title -->
    					<div id="column_<?php _e( $column_value ); ?>_content" class="column-content">
    						<div id="column_<?php _e( $column_value ); ?>_container" class="container">
    							<?php
                                if ( !$post ){
                                    danielcowen_display_content( $content );
                                } else {
                                    include(TEMPLATEPATH.'/'.$post);
                                }
    							?>
    						</div><!-- #column_<?php _e( $column_value ); ?>_container -->
    					</div> <!-- #column_<?php _e( $column_value ); ?>_content -->
    					<div id="scrollLinks_<?php _e( $column_value ); ?>" class="scrolls">
    						<a id="up_aro_<?php _e( $column_value ); ?>" class="mouseover_up" href="#">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrows/<?php _e( $column_value ); ?>_arrow_up.png" alt="" border="0" />
                            </a>
    						<a id="down_aro_<?php _e( $column_value ); ?>" class="mouseover_down" href="#">
                                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrows/<?php _e( $column_value ); ?>_arrow_down.png" alt="" border="0" />
                            </a>
    					</div><!-- #scrollLinks_<?php _e( $column_value ); ?> -->
    				</div><!-- #column-<?php _e( $column_value ); ?> -->
                            
                <?php
            }
    
    endif;

    function my_init_method() {
        if ( !is_admin() ) { 
            wp_deregister_script( 'jquery' );
            wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
            wp_enqueue_script( 'jquery' );
    		wp_enqueue_script('dw_event', get_bloginfo('template_directory') . '/scripts/dw_scroll/dw_event.js');
    		wp_enqueue_script('dw_scroll', get_bloginfo('template_directory') . '/scripts/dw_scroll/dw_scroll.js');
        	wp_enqueue_script('scroll_control', get_bloginfo('template_directory') . '/scripts/dw_scroll/scroll_controls.js');
        	wp_enqueue_script('shadowbox', get_bloginfo('template_directory') . '/scripts/shadowbox_3_0_3/shadowbox.js');
            wp_enqueue_script('theme_script', get_bloginfo('template_directory') . '/scripts/theme_script.js');
        }
    }
    add_action('get_header', 'my_init_method');

	function custom_login() { 
        echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/custom-login/custom-login.css" />'; 
    }
    add_action('login_head', 'custom_login');

	function the_url( $url ) {
    	return get_bloginfo( 'siteurl' );
	}
	add_filter( 'login_headerurl', 'the_url' );
	
	function the_url_title( $title ) {
    	echo esc_attr__('www.danielcowen.com');
	}
	add_filter( 'login_headertitle', 'the_url_title' );

?>