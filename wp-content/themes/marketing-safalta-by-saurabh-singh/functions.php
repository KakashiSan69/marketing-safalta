<?php
/**
 * Theme Functions and Definitions — Marketing Safalta
 * Color Palette: Red / Black / White (NO BLUE)
 */

// Disable WordPress Admin Bar completely on frontend
add_filter( 'show_admin_bar', '__return_false' );

// Clean up WordPress head to remove unnecessary WP admin clutter
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'rest_output_link_wp_head' );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

if ( ! function_exists( 'anaam_tiwary_theme_setup' ) ) :
        function anaam_tiwary_theme_setup() {
                add_theme_support( 'automatic-feed-links' );
                add_theme_support( 'title-tag' );
                add_theme_support( 'post-thumbnails' );
                register_nav_menus( array(
                        'primary' => esc_html__( 'Primary Menu', 'marketing-safalta-by-saurabh-singh' ),
                        'footer'  => esc_html__( 'Footer Menu', 'marketing-safalta-by-saurabh-singh' ),
                ) );
        }
endif;
add_action( 'after_setup_theme', 'anaam_tiwary_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function anaam_tiwary_theme_scripts() {
    $theme_uri = get_template_directory_uri();
    $version   = wp_get_theme()->get( 'Version' );

    // === Google Fonts ===
    wp_enqueue_style( 'ms-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null );

    // === Font Awesome (icons used throughout) ===
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', array(), '6.5.0' );

    // === Tailwind Built CSS (compiled locally — minified production) ===
    $css_file = file_exists( get_template_directory() . '/assets/css/tw-built.min.css' ) ? '/assets/css/tw-built.min.css' : '/assets/css/tw-built.css';
    wp_enqueue_style( 'ms-tw-built', $theme_uri . $css_file, array(), filemtime( get_template_directory() . $css_file ) );

    // === Main Interactive Scripts (Minified, Throttled) ===
    if ( file_exists( get_template_directory() . '/assets/js/main.min.js' ) ) {
        wp_enqueue_script( 'ms-main', $theme_uri . '/assets/js/main.min.js', array(), filemtime( get_template_directory() . '/assets/js/main.min.js' ), true );
    }

    // === AOS Animation Library ===
    wp_enqueue_script( 'aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true );
    wp_add_inline_script( 'aos-js', 'document.addEventListener("DOMContentLoaded", function(){ if(typeof AOS !== "undefined") AOS.init({once:true, duration:600}); });' );
}
add_action( 'wp_enqueue_scripts', 'anaam_tiwary_theme_scripts' );

// Add defer to scripts for non-blocking execution
add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( in_array( $handle, array( 'aos-js', 'ms-main' ) ) ) {
        return str_replace( ' src', ' defer src', $tag );
    }
    return $tag;
}, 10, 2 );

// Non-blocking print-swap for Google Fonts and FontAwesome
add_filter( 'style_loader_tag', function( $tag, $handle ) {
    if ( in_array( $handle, array( 'ms-google-fonts', 'fontawesome' ) ) ) {
        return str_replace( "media='all'", "media='print' onload=\"this.media='all'\"", $tag );
    }
    return $tag;
}, 10, 2 );

/**
 * Breadcrumb Function
 */
function ms_custom_breadcrumbs() {
    if ( is_front_page() ) return;
    
    echo '<div style="display: inline-block; background: rgba(227,28,37,0.15); color: var(--ms-red); font-size: 13px; font-weight: 700; padding: 6px 16px; border-radius: 100px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">';
    echo '<a href="' . home_url() . '" style="color: inherit;">Home</a> &nbsp;/&nbsp; ';
    
    if ( is_category() || is_single() ) {
        echo '<a href="' . get_permalink( get_option( 'page_for_posts' ) ) . '" style="color: inherit;">Blog</a> &nbsp;/&nbsp; ';
    }
    
    if ( is_single() ) {
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_page() ) {
        echo '<span>' . get_the_title() . '</span>';
    } elseif ( is_archive() ) {
        echo '<span>Archive</span>';
    } elseif ( is_home() ) {
        echo '<span>Blog</span>';
    }
    echo '</div>';
}
