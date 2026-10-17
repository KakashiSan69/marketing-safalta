<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Marketing Safalta — India's #1 Google Ads Expert. 12+ Years Experience. 5000+ Successful Campaigns. 3X ROI Guaranteed. Book Your Free Strategy Call Today.">
    <?php if ( is_front_page() || is_page_template( 'page-templates/template-homepage.php' ) ) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(site_url()); ?>/wp-content/uploads/2026/08/download.png">
    <?php endif; ?>
    <?php wp_head(); ?>
    <!-- Meta Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '361282140185826');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=361282140185826&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Meta Pixel Code -->
    <style>
        html { margin-top: 0 !important; }
        * html body { margin-top: 0 !important; }
        #wpadminbar { display: none !important; }

        /* Hero Service Chips: Glowing #CDE42C Neon Lime (Enlarged 24px Font) */
        .ms-service-chips .ms-chip,
        .ms-chip.red,
        .ms-chip {
            background: rgba(205, 228, 44, 0.08) !important;
            color: #cde42c !important;
            border: 2px solid #cde42c !important;
            font-size: 24px !important;
            font-weight: 800 !important;
            padding: 11px 26px !important;
            border-radius: 100px !important;
            box-shadow: 0 0 25px rgba(205, 228, 44, 0.45), inset 0 0 15px rgba(205, 228, 44, 0.1) !important;
            text-shadow: 0 0 12px rgba(205, 228, 44, 0.4) !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            letter-spacing: -0.3px;
            transition: all 0.3s ease !important;
        }

        .ms-service-chips .ms-chip:hover,
        .ms-chip.red:hover,
        .ms-chip:hover {
            background: #cde42c !important;
            color: #080412 !important;
            border-color: #cde42c !important;
            box-shadow: 0 0 35px rgba(205, 228, 44, 0.85), 0 0 55px rgba(205, 228, 44, 0.5) !important;
            text-shadow: none !important;
            transform: translateY(-2px) scale(1.04) !important;
        }

        @media (max-width: 768px) {
            .ms-service-chips .ms-chip,
            .ms-chip.red,
            .ms-chip {
                font-size: 16px !important;
                padding: 8px 18px !important;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ===== NAVBAR ===== -->
<nav class="ms-navbar" id="ms-navbar">
    <div class="ms-nav-container">
        <!-- Brand Logo -->
        <a class="ms-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.svg' ); ?>" alt="Marketing Safalta — Google Ads Expert">
        </a>

        <!-- Desktop Nav & CTA -->
        <div style="display: flex; align-items: center; gap: 16px;">
            <?php
            if ( has_nav_menu( 'primary' ) ) {
                wp_nav_menu( array(
                    'theme_location'  => 'primary',
                    'container'       => false,
                    'menu_class'      => 'ms-nav-links ms-nav-desktop',
                    'fallback_cb'     => false,
                ) );
            } else {
                echo '<ul class="ms-nav-links ms-nav-desktop">';
                echo '<li><a href="' . esc_url( home_url( '/#home' ) ) . '">Home</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">Services</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/#why-choose-us' ) ) . '">Why Us</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/blog/' ) ) . '">Blog</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">Contact</a></li>';
                echo '</ul>';
            }
            ?>
            <?php if (is_page_template('page-templates/template-about.php')) : ?>
                <a href="#contact" class="ms-nav-cta-about ms-nav-desktop">Contact Us</a>
            <?php else : ?>
                <a href="tel:+916388910079" class="ms-nav-cta ms-nav-desktop"><i class="fas fa-phone-alt"></i> Contact</a>
            <?php endif; ?>
        </div>

        <!-- Mobile Hamburger -->
        <button class="ms-hamburger" id="ms-hamburger" aria-label="Open menu">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</nav>

<!-- ===== MOBILE SLIDE MENU ===== -->
<div class="ms-slide-menu" id="ms-slide-menu">
    <button class="ms-slide-menu-close" id="ms-slide-close" aria-label="Close menu">&times;</button>
    <div class="ms-slide-menu-logo">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo.svg' ); ?>" alt="Marketing Safalta">
    </div>
    <?php
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'container'       => false,
            'menu_class'      => 'ms-slide-nav',
            'fallback_cb'     => false,
        ) );
    } else {
        echo '<ul class="ms-slide-nav">';
        echo '<li><a href="' . esc_url( home_url( '/#home' ) ) . '">Home</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/services/' ) ) . '">Services</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/about/' ) ) . '">About</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/#why-choose-us' ) ) . '">Why Us</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/blog/' ) ) . '">Blog</a></li>';
        echo '<li><a href="' . esc_url( home_url( '/#contact' ) ) . '">Contact</a></li>';
        echo '</ul>';
    }
    ?>
    <a href="https://app.automatefunnels.in/form/digital-marketing-services-mutw7l1u" class="ms-slide-cta-btn">Book Free Strategy Call →</a>
</div>
<div class="ms-backdrop" id="ms-backdrop"></div>

<!-- Body Offset -->
<div class="ms-body-offset"></div>

<script>
(function() {
    var hamburger = document.getElementById('ms-hamburger');
    var slideMenu = document.getElementById('ms-slide-menu');
    var backdrop = document.getElementById('ms-backdrop');
    var closeBtn = document.getElementById('ms-slide-close');
    var navbar = document.getElementById('ms-navbar');

    function openMenu() {
        slideMenu.classList.add('open');
        backdrop.classList.add('show');
        document.body.style.overflow = 'hidden';
    }
    function closeMenu() {
        slideMenu.classList.remove('open');
        backdrop.classList.remove('show');
        document.body.style.overflow = '';
    }

    if (hamburger) hamburger.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);
    if (backdrop) backdrop.addEventListener('click', closeMenu);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
})();
</script>
