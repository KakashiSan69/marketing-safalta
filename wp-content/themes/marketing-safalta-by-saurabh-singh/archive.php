<?php
/**
 * The template for displaying archive pages
 */
get_header(); ?>

<!-- ===== ARCHIVE HERO SECTION ===== -->
<div class="ms-page-hero" style="background: var(--ms-black); padding: 180px 0 100px; text-align: center; position: relative; overflow: hidden;">
    <!-- Background Glow -->
    <div style="position: absolute; top: -50%; left: 50%; transform: translateX(-50%); width: 800px; height: 800px; background: radial-gradient(circle, rgba(227,28,37,0.15) 0%, rgba(26,26,26,0) 70%); border-radius: 50%; pointer-events: none;"></div>
    
    <div class="ms-container" style="position:relative; z-index:2; max-width: 800px;">
        <?php ms_custom_breadcrumbs(); ?>
        <h1 style="font-size: 52px; font-weight: 900; color: #fff; line-height: 1.15; margin-bottom: 20px;">
            <?php
            if ( is_category() ) {
                single_cat_title();
            } elseif ( is_tag() ) {
                single_tag_title();
            } elseif ( is_author() ) {
                the_author();
            } elseif ( is_date() ) {
                if ( is_day() ) {
                    echo get_the_date();
                } elseif ( is_month() ) {
                    echo get_the_date( _x( 'F Y', 'monthly archives date format', 'marketing-safalta' ) );
                } elseif ( is_year() ) {
                    echo get_the_date( _x( 'Y', 'yearly archives date format', 'marketing-safalta' ) );
                } else {
                    echo __( 'Archives', 'marketing-safalta' );
                }
            } else {
                echo __( 'Archives', 'marketing-safalta' );
            }
            ?>
        </h1>
        <?php
        the_archive_description( '<p style="font-size: 18px; color: #aaa; line-height: 1.7; margin: 0 auto;">', '</p>' );
        ?>
    </div>
</div>

<section class="ms-section" style="background: #f9f9f9;">
    <div class="ms-container">
        <?php if ( have_posts() ) : ?>
            <div class="ms-blog-grid-4">
                <?php
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', 'post' );
                endwhile;
                ?>
            </div>

            <div class="ms-pagination">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left"></i> Prev',
                    'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
                ) );
                ?>
            </div>
        <?php else : ?>
            <div style="text-align: center; padding: 100px 0;">
                <h2>No posts found.</h2>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

