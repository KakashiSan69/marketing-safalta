<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- ===== SINGLE POST HERO ===== -->
    <div class="ms-page-hero" style="padding: 180px 0 80px; background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%); position: relative; overflow: hidden; text-align: center;">
        <!-- Decorative Red Glow -->
        <div style="position: absolute; top: -50%; left: 50%; transform: translateX(-50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(227,28,37,0.15) 0%, rgba(0,0,0,0) 70%); border-radius: 50%; z-index: 1; pointer-events: none;"></div>

        <div class="ms-container" style="position: relative; z-index: 2; max-width: 900px;">
            <?php ms_custom_breadcrumbs(); ?>

            <h1 style="font-size: 48px; font-weight: 900; color: #ffffff; line-height: 1.2; margin: 0 auto 32px; max-width: 900px; letter-spacing: -0.5px;">
                <?php the_title(); ?>
            </h1>

            <div style="display: flex; align-items: center; justify-content: center; gap: 32px; color: #a0a0a0; font-size: 15px;">
                <span style="display: flex; align-items: center; gap: 10px;">
                    <div style="width: 36px; height: 36px; border-radius: 50%; background: var(--ms-red); color: #fff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 14px; box-shadow: 0 4px 12px rgba(227,28,37,0.3);">
                        <?php echo substr(get_the_author(), 0, 1); ?>
                    </div>
                    <strong style="color: #ffffff; font-weight: 600;"><?php the_author(); ?></strong>
                </span>
                <span style="display: flex; align-items: center; gap: 8px;">
                    <i class="far fa-calendar-alt" style="color: var(--ms-red);"></i> <?php echo get_the_date('F j, Y'); ?>
                </span>
            </div>

        </div>
    </div>

    <!-- ===== SINGLE POST CONTENT WITH SIDEBAR ===== -->
    <section class="ms-section" style="background: #F9F9F9; padding-top: 60px;">
        <div class="ms-container">
            <div class="ms-single-layout">

                <!-- Main Article Content -->
                <main class="ms-article-main">

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="ms-article-feat-img">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="ms-article-content">
                        <?php the_content(); ?>

                        <?php
                        wp_link_pages(array(
                            'before' => '<div class="page-links">' . esc_html__('Pages:', 'marketing-safalta'),
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>

                    <!-- Post Footer CTA -->
                    <div class="ms-article-footer-cta">
                        <h3>Loved this article? Let's implement these strategies for you.</h3>
                        <p>Marketing Safalta provides customized digital solutions tailored to every business's needs.</p>
                        <a href="<?php echo home_url('/'); ?>#contact" class="ms-btn-red">Get a Free Consultation</a>
                    </div>

                </main>

                <!-- Right Sidebar (Sticky) -->
                <aside class="ms-sidebar">
                    <div class="ms-cta-form-box ms-compact-form" style="padding: 18px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border: 1px solid #eee; border-radius: 12px;">
                        <h3 style="font-size: 18px; margin-bottom: 6px;">Ready to grow?</h3>
                        <p style="font-size: 13px; margin-bottom: 12px; line-height: 1.4;">Fill out the form and we'll get back to you with a customized strategy.</p>
                         <?php echo do_shortcode('[contact-form-7 id="61af0f6" title="Main Contact Form"]'); ?>
                    </div>
                    <h3 class="ms-sidebar-title">Recent Posts</h3>
                    <div class="ms-recent-posts">
                        <?php
                        $recent_posts = new WP_Query(array(
                            'posts_per_page' => 4,
                            'post_status'    => 'publish',
                            'post__not_in'   => array(get_the_ID()) // Exclude current post
                        ));

                        if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        ?>
                                <a href="<?php the_permalink(); ?>" class="ms-recent-post-item">
                                    <div class="ms-recent-thumb">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('thumbnail'); ?>
                                        <?php else : ?>
                                            <div style="width:100%; height:100%; background:#eee;"></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="ms-recent-text">
                                        <h4><?php echo wp_trim_words(get_the_title(), 8, '...'); ?></h4>
                                        <span><?php echo get_the_date('M j, Y'); ?></span>
                                    </div>
                                </a>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        else :
                            echo '<p style="font-size: 14px; color: var(--ms-gray); padding: 10px 0;">No other posts found.</p>';
                        endif;
                        ?>
                    </div>


                </aside>

            </div>
        </div>
    </section>
</article>