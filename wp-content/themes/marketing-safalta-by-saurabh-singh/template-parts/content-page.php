<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="ms-page-hero" style="min-height: 300px; padding: 180px 0 80px; background: var(--ms-light); border-bottom: 1px solid #eaeaea; justify-content: center; text-align: center;">
        <div class="ms-container">
            <?php ms_custom_breadcrumbs(); ?>
            <h1 style="font-size: 42px; font-weight: 900; color: var(--ms-ink);"><?php the_title(); ?></h1>
        </div>
    </div>

    <section class="ms-section" style="padding-top: 60px;">
        <div class="ms-container" style="max-width: 1000px; margin: 0 auto;">
            <div class="ms-article-content">
                <?php
                the_content();
                
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'marketing-safalta' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>
        </div>
    </section>
</article>
