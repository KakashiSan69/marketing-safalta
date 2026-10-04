<a href="<?php the_permalink(); ?>" class="ms-blog-card">
    <div class="ms-blog-img-wrap">
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
        <?php else : ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/placeholder.jpg" alt="<?php the_title_attribute(); ?>">
        <?php endif; ?>
        
        <?php
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo '<span class="ms-blog-cat">' . esc_html( $categories[0]->name ) . '</span>';
        }
        ?>
    </div>
    <div class="ms-blog-content">
        <div class="ms-blog-meta">
            <span><i class="far fa-calendar-alt"></i> <?php echo get_the_date('M j, Y'); ?></span>
            <span><i class="far fa-user"></i> <?php the_author(); ?></span>
        </div>
        <h2 class="ms-blog-title"><?php the_title(); ?></h2>
        <div class="ms-blog-excerpt">
            <?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?>
        </div>
        <div class="ms-blog-readmore">Read Article <i class="fas fa-arrow-right"></i></div>
    </div>
</a>
