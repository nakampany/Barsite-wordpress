<?php get_header(); ?>
<?php if (have_posts()) :
    while (have_posts()) : the_post() ?>
        <div class="row g-4 fadeUpTrigger" id="<?php the_ID(); ?>" <?php post_class('news'); ?>>

            <figure class="col-lg-4 col-sm-6">
                <a href="<?php the_permalink() ?>">
                    <div class="project pro-1 category">
                        <?php the_category(); ?>
                        <?php if (have_posts()) : ?>
                            <?php the_post_thumbnail('thumbnail'); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/bar-image/BH7C6659.jpg" alt="">
                        <?php endif; ?>
                        <div class="overlay">
                            <div>
                                <h4 class="text-white"><?php the_title(); ?></h4>
                                <h6 class="text-white"><?php the_excerpt(); ?></h6>
                                <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                            </div>
                        </div>
                    </div>
                </a>
            </figure>

        </div>
<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>