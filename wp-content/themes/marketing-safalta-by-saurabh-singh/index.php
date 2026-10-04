<?php
/**
 * The main template file
 */
get_header(); ?>

<section class="ms-section" style="padding: 60px 0;">
    <div class="ms-container" style="max-width: 1000px; margin: 0 auto;">
        
        <?php if ( have_posts() ) : ?>

            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;

            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fas fa-chevron-left"></i> Prev',
                'next_text' => 'Next <i class="fas fa-chevron-right"></i>',
            ) );

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif;
        ?>

    </div>
</section>

<?php get_footer(); ?>
