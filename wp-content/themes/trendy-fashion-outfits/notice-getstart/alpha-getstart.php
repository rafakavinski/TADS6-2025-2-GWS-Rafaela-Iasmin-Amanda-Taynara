<?php // phpcs:ignore
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'trendy_fashion_outfits_default_options' ) ) :
	/**
	 * Get the Theme Default Options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default Options
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_default_options() {
		$default_theme_options = array(
			'hide_get_started_notice'   => false,
			'theme_installed_date_time' => time(),
		);

		return apply_filters( 'trendy_fashion_outfits_default_options', $default_theme_options );
	}
endif;

if ( ! function_exists( 'trendy_fashion_outfits_default_user_meta' ) ) :
	/**
	 * Get the User Default Meta.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default User Meta
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_default_user_meta() {
		$default_user_meta = array(
			'remove_review_notice_permanently'         => false,
			'remove_review_notice_temporary_date_time' => time(),
		);

		return apply_filters( 'trendy_fashion_outfits_default_user_meta', $default_user_meta );
	}
endif;

if ( ! function_exists( 'trendy_fashion_outfits_get_user_meta' ) ) :
	/**
	 * Get the User Meta.
	 *
	 * @since 1.0.0
	 *
	 * @param int    $user_id User ID.
	 * @param string $key optional meta key.
	 *
	 * @return mixed All Meta Value related to the theme only.
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_get_user_meta( $user_id, $key = '' ) {
		$options = get_user_meta( $user_id, TRENDY_FASHION_OUTFITS_OPTION_NAME, true );

		$default_options = trendy_fashion_outfits_default_user_meta();

		if ( ! empty( $key ) ) {
			if ( isset( $options[ $key ] ) ) {
				return $options[ $key ];
			}
			return isset( $default_options[ $key ] ) ? $default_options[ $key ] : false;
		} else {
			if ( ! is_array( $options ) ) {
				$options = array();
			}

			return array_merge( $default_options, $options );
		}
	}
endif;

if ( ! function_exists( 'trendy_fashion_outfits_update_user_meta' ) ) :
	/**
	 * Update the User Meta.
	 *
	 * @since 1.0.0
	 *
	 * @param int          $user_id User ID.
	 * @param string|array $key_or_data Meta key or array of meta key-value pairs.
	 * @param string|mixed $val Value of meta key if $key_or_data is string.
	 *
	 * @return bool True on successful update, false on failure.
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_update_user_meta( $user_id, $key_or_data, $val = '' ) {
		$options = trendy_fashion_outfits_get_user_meta( $user_id );

		if ( is_string( $key_or_data ) ) {
			$options[ $key_or_data ] = $val;
		} elseif ( is_array( $key_or_data ) ) {
			$options = array_merge( $options, $key_or_data );
		}

		return update_user_meta( $user_id, TRENDY_FASHION_OUTFITS_OPTION_NAME, $options );
	}
endif;

if ( ! function_exists( 'trendy_fashion_outfits_file_system' ) ) {
	/**
	 *
	 * WordPress file system wrapper
	 *
	 * @since 1.0.0
	 *
	 * @return string|WP_Error directory path or WP_Error object if no permission
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_file_system() {
		global $wp_filesystem;
		if ( ! $wp_filesystem ) {
			require_once ABSPATH . 'wp-admin' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'file.php';
		}

		WP_Filesystem();
		return $wp_filesystem;
	}
}

if ( ! function_exists( 'trendy_fashion_outfits_parse_changelog' ) ) {
	/**
	 * Parse changelog
	 *
	 * @since 1.0.0
	 * @return string
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_parse_changelog() {

		$wp_filesystem = trendy_fashion_outfits_file_system();

		$changelog_file = apply_filters( 'trendy_fashion_outfits_changelog_file', TRENDY_FASHION_OUTFITS_PATH . 'readme.txt' );

		/*Check if the changelog file exists and is readable.*/
		if ( ! $changelog_file || ! is_readable( $changelog_file ) ) {
			return '';
		}

		$content = $wp_filesystem->get_contents( $changelog_file );

		if ( ! $content ) {
			return '';
		}

		$matches   = null;
		$regexp    = '~==\s*Changelog\s*==(.*)($)~Uis';
		$changelog = '';

		if ( preg_match( $regexp, $content, $matches ) ) {
			$changes = explode( '\r\n', trim( $matches[1] ) );

			foreach ( $changes as $index => $line ) {
				$changelog .= wp_kses_post( preg_replace( '~(=\s*Version\s*(\d+(?:\.\d+)+)\s*=|$)~Uis', '', $line ) );
			}
		}

		return wp_kses_post( $changelog );
	}
}

if ( ! function_exists( 'trendy_fashion_outfits_get_theme_faq' ) ) :
	/**
	 * Get FAQ for this theme.
	 * It is used on the theme page.
	 *
	 * @since 1.0.0
	 * @return array All FAQ.
	 *
	 * @author     Abu Turab <Abu Turab@gmail.com>
	 */
	function trendy_fashion_outfits_get_theme_faq() {
		$faq = array(
			array(

				
				'q' => esc_html__( 'How do I install and activate this theme?', 'trendy-fashion-outfits' ),
				'a' => esc_html__( 'You can install the theme by going to Appearance > Themes > Add New, then upload the theme ZIP file and click Install. Once installed, click Activate to start using the theme.', 'trendy-fashion-outfits' ),
			),
			array(
				'q' => esc_html__( 'Can I change the site logo and title?', 'trendy-fashion-outfits' ),
				'a' => esc_html__( 'Yes, you can update the logo, site title, and tagline by going to Appearance > Editor > Site Settings > General. From there, you can upload a custom logo and edit your site information.', 'trendy-fashion-outfits' ),
			),
			array(
				'q' => esc_html__( 'Does this theme support WooCommerce?', 'trendy-fashion-outfits' ),
				'a' => esc_html__( 'Yes, the theme is fully compatible with WooCommerce. Once WooCommerce is installed and activated, you can add products, create a shop page, and customize the store layout.', 'trendy-fashion-outfits' ),
			),
			array(
				'q' => esc_html__( 'How can I adjust the colors and fonts?', 'trendy-fashion-outfits' ),
				'a' => esc_html__( 'You can customize colors and fonts by going to Appearance > Editor > Styles. Use the typography and color settings to match your brand style.', 'trendy-fashion-outfits' ),
			),
			array(
				'q' => esc_html__( 'Is this theme mobile responsive?', 'trendy-fashion-outfits' ),
				'a' => esc_html__( 'Yes, the theme is fully responsive and optimized for mobile, tablet, and desktop devices.', 'trendy-fashion-outfits' ),
			),
		);
		return apply_filters(
			'trendy_fashion_outfits_faq',
			$faq
		);
	}
endif;



// Add admin notice
function trendy_fashion_outfits_admin_notice() { 
    global $pagenow;
    $trendy_fashion_outfits_theme_args      = wp_get_theme();
    $trendy_fashion_outfits_meta            = get_option( 'trendy_fashion_outfits_admin_notice' );
    $name            = $trendy_fashion_outfits_theme_args->__get( 'Name' );
    $trendy_fashion_outfits_current_screen  = get_current_screen();

    if( !$trendy_fashion_outfits_meta ){
	    if( is_network_admin() ){
	        return;
	    }

	    if( ! current_user_can( 'manage_options' ) ){
	        return;
	    } 
		
		if( $trendy_fashion_outfits_current_screen->base !== 'appearance_page_trendy-fashion-outfits' && 
            $trendy_fashion_outfits_current_screen->base !== 'toplevel_page_trendyfashionoutfits-demoimport' ) { ?>

            <div id="trendy-fashion-outfits-gsn" class="notice notice-success trendy-fashion-outfits-welcome-notice updated notice-info trendy-fashion-outfits-gsn paddingos">
            	<div class="nnn">
            		<p class="trendy-fashion-outfits-dismiss-link">
                    <strong>
                        <a href="<?php echo esc_url( add_query_arg( 'trendy_fashion_outfits_admin_notice', '1' ) ); ?>">
                            <?php esc_html_e( 'Dismiss', 'trendy-fashion-outfits' ); ?>
                        </a>
                    </strong>
					
                </p>
            </div>
                

                <div class="trendy-fashion-outfits-gsn-container ">
					<img class="trendy-fashion-outfits-gsn-screenshot notice-img " src="<?php echo esc_url( TRENDY_FASHION_OUTFITS_URL . 'screenshot.png' ); ?>" alt="<?php esc_attr_e( 'Trendy Fashion Outfits', 'trendy-fashion-outfits' ); ?>" />
					<div class="trendy-fashion-outfits-gsn-notice">
						<h2>
							<?php
							printf(
								esc_html__( 'Welcome, and thank you for choosing Trendy Fashion Outfits! We’re thrilled to have you on board. Explore the features and customization options to make your website stylish, professional, and uniquely yours.', 'trendy-fashion-outfits' ),
							);
							?>
						</h2>


					<div class="vvv">
							
							<a href="<?php echo esc_url( menu_page_url( TRENDY_FASHION_OUTFITS_THEME_NAME, false ) ); ?>" target="_blank" rel="noopener noreferrer nofollow" class="trendy-fashion-outfits-btn trendy-fashion-outfits-btn-default button button-secodary button-hero kkk">
								<?php esc_html_e( 'Theme Info Page', 'trendy-fashion-outfits' ); ?>
							</a>

							<a href="https://www.thealphablocks.com/themes/fashion-store-wordpress-theme/" target="_blank" rel="noopener noreferrer nofollow" class="trendy-fashion-outfits-btn trendy-fashion-outfits-btn-default button button-secodary button-hero ddd">
								<?php esc_html_e( 'Buy Now', 'trendy-fashion-outfits' ); ?>
							</a>
							<a href="https://www.thealphablocks.com/themes/wordpress-theme-bundle/" target="_blank" rel="noopener noreferrer nofollow" class="trendy-fashion-outfits-btn trendy-fashion-outfits-btn-default button button-secodary button-hero bbb" target="_blank">
								<?php esc_html_e( 'Get All Themes', 'trendy-fashion-outfits' ); ?>
							</a>
							<a href="https://www.thealphablocks.com/demos/trendy-fashion-outfits-pro/" target="_blank" rel="noopener noreferrer nofollow" class="trendy-fashion-outfits-btn trendy-fashion-outfits-btn-default button button-secodary button-hero ccc" target="_blank">
								<?php esc_html_e( 'Live Demo', 'trendy-fashion-outfits' ); ?>
							</a>
							
					</div>
						
					</div>
				</div>
            </div>

            <?php
        }

	}
}

add_action( 'admin_notices', 'trendy_fashion_outfits_admin_notice' );

if( ! function_exists( 'trendy_fashion_outfits_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
*/
function trendy_fashion_outfits_update_admin_notice(){
    if ( isset( $_GET['trendy_fashion_outfits_admin_notice'] ) && $_GET['trendy_fashion_outfits_admin_notice'] = '1' ) {
        update_option( 'trendy_fashion_outfits_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'trendy_fashion_outfits_update_admin_notice' );


add_action('after_switch_theme', 'trendy_fashion_outfits_setup_options');
function trendy_fashion_outfits_setup_options () {
    update_option('trendy_fashion_outfits_admin_notice', FALSE );
}