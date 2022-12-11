<?php get_header(); ?>


<section>
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <article id="<?php the_ID(); ?>" <?php post_class('entry'); ?> class="text-center">
                <h1 class="heading">
                    <?php the_title(); ?>
                    <?php the_category(); ?><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                </h1>
                <div class="content text-center">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php
        endwhile;
        ?>
    <?php
    endif;
    ?>
</section>

<?php get_footer(); ?>