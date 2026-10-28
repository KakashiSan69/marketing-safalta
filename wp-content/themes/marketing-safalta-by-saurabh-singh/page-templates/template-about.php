<?php
/**
 * Template Name: About Page
 */
get_header();
?>

<!-- ===== ABOUT HERO SECTION ===== -->
<div class="ms-page-hero" style="background: var(--ms-black); padding: 180px 0 100px; text-align: center; position: relative; overflow: hidden;">
    <!-- Background Glow -->
    <div style="position: absolute; top: -50%; left: 50%; transform: translateX(-50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(227,28,37,0.15) 0%, rgba(26,26,26,0) 70%); border-radius: 50%; pointer-events: none;"></div>
    
    <div class="ms-container" style="position:relative; z-index:2; max-width: 800px;">
        <?php ms_custom_breadcrumbs(); ?>
        <h1 style="font-size: 52px; font-weight: 900; color: #fff; line-height: 1.15; margin-bottom: 20px;">
            <?php the_title(); ?>
        </h1>
    </div>
</div>

<section class="ms-section" style="padding: 80px 0;">
    <div class="ms-container" style="max-width: 1200px; margin: 0 auto;">
        
        <!-- Our Story Grid -->
        <div class="ms-about-story-grid">
            
            <!-- Left Content -->
            <div class="ms-about-story-left">
                <h2>About Us</h2>
                <div class="ms-article-content">
                    <p>Marketing Safalta are providing best SEO, SMO, SEM, SMM, Google Adwords, Facebook ads, web design & development services at very low price. Our company is associated with a team of dedicated and experienced SEO expert, Google ads expert, developers and designers professionals who have depth knowledge and experience in this areas. Professionals are able to improve your website visibility, brand value and business sale by using various techniques and marketing strategies.</p>
                </div>
            </div>
            
            <!-- Right Contact Card -->
            <div class="ms-about-story-right">
                <div class="ms-about-contact-card">
                    <img src="<?php echo esc_url(site_url('/wp-content/uploads/building_sketch.png')); ?>" alt="Office Sketch" class="ms-about-contact-card-img" loading="lazy">
                    <div class="ms-about-contact-line"></div>
                    <ul class="ms-about-contact-list">
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:+916388910079">+91 6388910079</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:marketingsafaltaofficial@gmail.com">marketingsafaltaofficial@gmail.com</a></li>
                        <li><i class="fas fa-map-marker-alt"></i> D-551 Sector-10, Noida(U.P.) 201301</li>
                    </ul>
                    <div class="ms-about-contact-icons">
                        <a href="https://www.facebook.com/marketingsafalta" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/916388910079" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://www.instagram.com/marketingsafalta" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/marketingsafalta" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.youtube.com/@marketingsafalta" target="_blank"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            
        </div> <!-- End Grid -->
        
    </div>
</section>

<!-- ===== MEDIA / NEWS BAR (Our Client) ===== -->
<div class="ms-media-bar" style="border-top: 1px solid #eaeaea;">
    <div class="ms-media-bar-inner">
        <div class="ms-media-label">
            <span>Our Client</span>
        </div>
        <div class="ms-media-logos">
            <div class="ms-media-track" id="ms-media-track">
                <?php
                $client_logos = [
                    '/wp-content/uploads/2026/08/zusman-1-1-1-p05d0kvoronbhdhgyyksfjlad95ompjjhrf02hd4lg.png',
                    '/wp-content/uploads/2026/08/x.venox_-1-1-1-p05crfw6bo4ylurcc0dd6ulyge77sn9hkj323mwx38.png',
                    '/wp-content/uploads/2026/08/mapmaster-1-2-p05crr68lokeh6ayi58w0rrhl0nmd0i9m2wvuyg70k.png',
                    '/wp-content/uploads/2026/08/madrin-1-2-p05ct41uh2fb8wbykqdhmffgh1yph9wb4su4tcfq10.png',
                    '/wp-content/uploads/2026/08/fifthflour-1-2-p05cufzm5m8xp0ebst3gnlbyrpefdu6mbe3waggn7o.png',
                    '/wp-content/uploads/2026/08/darkside-1-2-p05cw37g46i00g0b70oyioe06zajurppjj7hiw0ubo.png'
                ];
                foreach ($client_logos as $logo) {
                    echo '<img src="' . esc_url(site_url()) . esc_attr($logo) . '" alt="Client Logo" loading="lazy">';
                }
                foreach ($client_logos as $logo) {
                    echo '<img src="' . esc_url(site_url()) . esc_attr($logo) . '" alt="Client Logo" loading="lazy">';
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- ===== CTA BANNER ===== -->
<section class="ms-cta-section" id="contact" style="margin-top: 60px;">
    <div class="ms-container">
        <div class="ms-cta-grid">
            <div class="ms-cta-left">
                <h2>Get More Customers for Your Business<br>with SEO, Google Ads &amp; Meta Ads</h2>
                <p>Book your FREE 30-minute strategy session with India's #1 Google Ads Expert.<br>Zero commitment. 100% value. Real strategies for your business.</p>
                <div class="ms-cta-btns">
                    <a href="https://calendar.marketingsafalta.com/v3/free-digital-marketing-strategy-call/consultation" class="ms-btn-white">Book Free Strategy Call</a>
                    <a href="https://wa.me/916388910079" target="_blank" class="ms-btn-whatsapp-outline">
                        <i class="fab fa-whatsapp"></i> WhatsApp Us
                    </a>
                </div>
            </div>

            <div class="ms-cta-right">
                <div class="ms-cta-form-box">
                    <h3>Request a Call Back</h3>
                    <p>Fill out the form below and our team will get in touch with you shortly.</p>
                    <div class="ms-cf7-wrapper">
                        <?php echo do_shortcode('[contact-form-7 id="61af0f6" title="Main Contact Form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

