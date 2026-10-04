<?php

/**
 * Template Name: Services Page
 */
get_header();

while (have_posts()) :
    the_post();
?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <!-- ===== SERVICES HERO SECTION ===== -->
        <div class="ms-page-hero" style="background: var(--ms-black); padding: 180px 0 100px; text-align: center; position: relative; overflow: hidden;">
            <!-- Background Glow -->
            <div style="position: absolute; top: -50%; left: 50%; transform: translateX(-50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(227,28,37,0.15) 0%, rgba(26,26,26,0) 70%); border-radius: 50%; pointer-events: none;"></div>

            <div class="ms-container" style="position:relative; z-index:2; max-width: 800px;">
                <?php ms_custom_breadcrumbs(); ?>
                <h1 style="font-size: 52px; font-weight: 900; color: #fff; line-height: 1.15; margin-bottom: 20px;">
                    <?php the_title(); ?>
                </h1>
                <p style="font-size: 20px; color: #ccc; max-width: 600px; margin: 0 auto;">Data-driven strategies and creative solutions designed to scale your business and dominate your industry.</p>
            </div>
        </div>

        <!-- WordPress Content Editor Area -->
        <section class="ms-section" style="padding: 60px 0 20px;">
            <div class="ms-container" style="max-width: 1000px; margin: 0 auto;">
                <div class="ms-article-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

        <!-- Detailed Services Grid -->
        <section class="ms-section" style="padding-bottom: 80px; background: #fafafa;">
            <div class="ms-container">
                <div class="ms-services-detailed-grid">

                    <!-- Service 1 -->
                    <div class="ms-service-detailed-card">
                        <div class="ms-sd-icon"><i class="fas fa-search"></i></div>
                        <h3 class="ms-sd-title">SEO Services</h3>
                        <p class="ms-sd-desc">Dominate search results with our comprehensive SEO strategy. We optimize your technical foundation and create authority-building content.</p>
                        <ul class="ms-sd-features">
                            <li><i class="fas fa-check"></i> Technical SEO Audits</li>
                            <li><i class="fas fa-check"></i> Keyword Strategy</li>
                            <li><i class="fas fa-check"></i> Link Building</li>
                        </ul>
                        <a href="/seo-services/" class="ms-sd-btn">Explore SEO <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Service 2 -->
                    <div class="ms-service-detailed-card">
                        <div class="ms-sd-icon"><i class="fas fa-search-dollar"></i></div>
                        <h3 class="ms-sd-title">Google Ads</h3>
                        <p class="ms-sd-desc">Maximize your ROI with high-converting search, display, and video campaigns targeted exactly to your ideal buyers.</p>
                        <ul class="ms-sd-features">
                            <li><i class="fas fa-check"></i> Search & Display Ads</li>
                            <li><i class="fas fa-check"></i> Shopping Campaigns</li>
                            <li><i class="fas fa-check"></i> Conversion Tracking</li>
                        </ul>
                        <a href="/google-ads-services/" class="ms-sd-btn">Explore Google Ads <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Service 3 -->
                    <div class="ms-service-detailed-card">
                        <div class="ms-sd-icon"><i class="fas fa-bullseye"></i></div>
                        <h3 class="ms-sd-title">Meta Ads</h3>
                        <p class="ms-sd-desc">Turn social scrollers into loyal customers with highly targeted Facebook and Instagram advertising campaigns.</p>
                        <ul class="ms-sd-features">
                            <li><i class="fas fa-check"></i> Audience Targeting</li>
                            <li><i class="fas fa-check"></i> Retargeting Funnels</li>
                            <li><i class="fas fa-check"></i> Creative A/B Testing</li>
                        </ul>
                        <a href="#" class="ms-sd-btn">Explore Meta Ads <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Service 4 -->
                    <div class="ms-service-detailed-card">
                        <div class="ms-sd-icon"><i class="fas fa-share-alt"></i></div>
                        <h3 class="ms-sd-title">Social Media Marketing</h3>
                        <p class="ms-sd-desc">Build a community around your brand with engaging, high-quality organic social media content and strategy.</p>
                        <ul class="ms-sd-features">
                            <li><i class="fas fa-check"></i> Content Creation</li>
                            <li><i class="fas fa-check"></i> Community Management</li>
                            <li><i class="fas fa-check"></i> Brand Strategy</li>
                        </ul>
                        <a href="#" class="ms-sd-btn">Explore Social Media <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Service 5 -->
                    <div class="ms-service-detailed-card">
                        <div class="ms-sd-icon"><i class="fas fa-laptop-code"></i></div>
                        <h3 class="ms-sd-title">Web Development</h3>
                        <p class="ms-sd-desc">Fast, secure, and conversion-optimized websites designed to provide an incredible user experience.</p>
                        <ul class="ms-sd-features">
                            <li><i class="fas fa-check"></i> Custom WordPress</li>
                            <li><i class="fas fa-check"></i> E-Commerce Solutions</li>
                            <li><i class="fas fa-check"></i> Landing Page Design</li>
                        </ul>
                        <a href="#" class="ms-sd-btn">Explore Web Dev <i class="fas fa-arrow-right"></i></a>
                    </div>

                    <!-- Service 6 -->
                    <div class="ms-service-detailed-card">
                        <div class="ms-sd-icon"><i class="fas fa-envelope-open-text"></i></div>
                        <h3 class="ms-sd-title">Email Marketing</h3>
                        <p class="ms-sd-desc">Establish authority and nurture leads with high-quality automated sequences and converting newsletters.</p>
                        <ul class="ms-sd-features">
                            <li><i class="fas fa-check"></i> Automated Flows</li>
                            <li><i class="fas fa-check"></i> List Segmentation</li>
                            <li><i class="fas fa-check"></i> Sales Copywriting</li>
                        </ul>
                        <a href="#" class="ms-sd-btn">Explore Email <i class="fas fa-arrow-right"></i></a>
                    </div>

                </div>
            </div>
        </section>
    </article>
<?php
endwhile;

get_footer();
