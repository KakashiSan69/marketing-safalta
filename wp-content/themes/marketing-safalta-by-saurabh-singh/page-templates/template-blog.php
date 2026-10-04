<?php
/**
 * Template Name: Blog Page
 */
get_header(); ?>

<!-- ===== BLOG HERO SECTION ===== -->
<div class="ms-page-hero" style="background: var(--ms-black); padding: 180px 0 100px; text-align: center; position: relative; overflow: hidden;">
    <!-- Background Glow -->
    <div style="position: absolute; top: -50%; left: 50%; transform: translateX(-50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(227,28,37,0.15) 0%, rgba(26,26,26,0) 70%); border-radius: 50%; pointer-events: none;"></div>
    
    <div class="ms-container" style="position:relative; z-index:2; max-width: 800px;">
        <?php ms_custom_breadcrumbs(); ?>
        <h1 style="font-size: 52px; font-weight: 900; color: #fff; line-height: 1.15; margin-bottom: 20px;">
            Marketing <span style="color: var(--ms-red);">Insights</span>
        </h1>
        <p style="font-size: 18px; color: #aaa; line-height: 1.7; margin: 0 auto;">
            Stay updated with the latest trends, strategies, and actionable tips in digital marketing to help your business grow and achieve massive ROI.
        </p>
    </div>
</div>

<!-- ===== BLOG LOOP SECTION ===== -->
<section class="ms-section" style="background:#F9F9F9;">
    <div class="ms-container">
        
        <?php
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $blog_query = new WP_Query( array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'paged'          => $paged,
        ) );
        ?>

        <?php if ( $blog_query->have_posts() ) : ?>
            
            <div class="ms-blog-grid-4">
                <?php while ( $blog_query->have_posts() ) : $blog_query->the_post(); ?>
                    
                    <?php get_template_part( 'template-parts/content', 'post' ); ?>

                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div class="ms-pagination">
                <?php 
                echo paginate_links( array(
                    'total'     => $blog_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '<i class="fas fa-chevron-left"></i> Prev',
                    'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
                ) ); 
                ?>
            </div>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            
            <div style="text-align:center; padding: 100px 0;">
                <h2 style="font-size: 24px; color: var(--ms-ink); margin-bottom: 16px;">No posts found!</h2>
                <p style="color: var(--ms-gray);">It seems we can't find what you're looking for.</p>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>

