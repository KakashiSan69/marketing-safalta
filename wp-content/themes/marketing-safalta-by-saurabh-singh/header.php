<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Marketing Safalta — India's #1 Google Ads Expert. 12+ Years Experience. 5000+ Successful Campaigns. 3X ROI Guaranteed. Book Your Free Strategy Call Today.">
    <?php if ( is_front_page() || is_page_template( 'page-templates/template-homepage.php' ) ) : ?>
        <link rel="preload" as="image" href="<?php echo esc_url(site_url()); ?>/wp-content/uploads/hero-media/hero-video-thumbnail.webp" type="image/webp" fetchpriority="high">
    <?php endif; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
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

        /* Hero Single Column & Centered Layout */
        .ms-hero-inner {
            max-width: 960px !important;
            margin: 0 auto !important;
            padding: 0 20px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
            position: relative !important;
            z-index: 2 !important;
        }

        .ms-hero-left {
            width: 100% !important;
            max-width: 860px !important;
            display: flex !important;
            flex-direction: column !important;
            align-items: center !important;
            text-align: center !important;
        }

        .ms-hero-left h1 {
            text-align: center !important;
            margin-bottom: 12px !important;
            width: 100% !important;
        }

        .ms-hero-typewriter-wrap {
            justify-content: center !important;
            margin: 0 auto 24px !important;
            width: 100% !important;
        }

        .ms-hero-desc {
            margin: 0 auto 28px !important;
            max-width: 760px !important;
            text-align: center !important;
        }

        .ms-service-chips {
            justify-content: center !important;
            margin-bottom: 30px !important;
        }

        .ms-hero-trust {
            justify-content: center !important;
            margin-top: 16px !important;
            margin-bottom: 42px !important;
        }

        @media (max-width: 768px) {
            .ms-hero-trust {
                margin-top: 12px !important;
                margin-bottom: 30px !important;
                gap: 16px !important;
            }
        }

        /* Hero Video Box */
        .ms-hero-video-wrapper {
            width: 100%;
            max-width: 820px;
            margin: 0 auto 32px;
            position: relative;
            box-sizing: border-box;
        }

        .ms-hero-video-container {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            border-radius: 18px;
            overflow: hidden;
            background: #000000;
            border: 2px solid rgba(168, 85, 247, 0.45);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.8), 0 0 30px rgba(168, 85, 247, 0.3);
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }

        .ms-hero-video-container:hover {
            transform: translateY(-3px);
            border-color: rgba(205, 228, 44, 0.7);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9), 0 0 45px rgba(205, 228, 44, 0.35);
        }

        .ms-hero-video-poster {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 5;
            background: #000000;
            transition: opacity 0.35s ease, visibility 0.35s ease;
        }

        .ms-hero-video-poster.playing {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .ms-hero-video-thumb {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            background-color: #05020a;
        }

        /* Glowing Play Button */
        .ms-hero-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 84px;
            height: 84px;
            border-radius: 50%;
            background: linear-gradient(135deg, #e31c25 0%, #7c3aed 100%);
            border: 3px solid rgba(255, 255, 255, 0.95);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7), 0 0 35px rgba(227, 28, 37, 0.75);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 6;
            outline: none;
            padding: 0;
        }

        .ms-hero-play-btn::before {
            content: '';
            position: absolute;
            inset: -12px;
            border-radius: 50%;
            border: 2px solid rgba(227, 28, 37, 0.65);
            animation: heroPulseRing 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
            pointer-events: none;
        }

        @keyframes heroPulseRing {
            0% {
                transform: scale(0.9);
                opacity: 0.9;
            }
            50% {
                transform: scale(1.35);
                opacity: 0.3;
            }
            100% {
                transform: scale(1.55);
                opacity: 0;
            }
        }

        .ms-hero-play-btn svg {
            width: 34px;
            height: 34px;
            margin-left: 5px;
            fill: #ffffff;
            filter: drop-shadow(0 2px 6px rgba(0, 0, 0, 0.5));
            transition: transform 0.25s ease;
        }

        .ms-hero-video-container:hover .ms-hero-play-btn {
            transform: translate(-50%, -50%) scale(1.12);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.8), 0 0 50px rgba(205, 228, 44, 0.85);
            border-color: #cde42c;
        }

        .ms-hero-play-btn.loading {
            pointer-events: none;
            border-color: rgba(255, 255, 255, 0.3) !important;
            border-top-color: #cde42c !important;
            animation: heroBtnSpin 0.7s linear infinite !important;
        }
        .ms-hero-play-btn.loading::before {
            display: none;
        }
        .ms-hero-play-btn.loading svg {
            opacity: 0.3;
        }
        @keyframes heroBtnSpin {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .ms-hero-video-player {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            background: #000;
            display: block;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .ms-hero-video-wrapper {
                margin: 0 auto 24px;
            }
            .ms-hero-video-container {
                border-radius: 14px;
            }
            .ms-hero-play-btn {
                width: 60px;
                height: 60px;
            }
            .ms-hero-play-btn svg {
                width: 24px;
                height: 24px;
                margin-left: 4px;
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
