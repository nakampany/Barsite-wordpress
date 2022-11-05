<?php get_header(); ?>

<div class="container">
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>


    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <div class="text">
                <h1 class="main-text h1"><?php the_title(); ?></h1>
            </div>
            <hr>
            <!-- blog  -->
            <section>
                <article class="row g-4 fadeUpTrigger" id="<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="content">
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
</div>

<?php get_footer(); ?>