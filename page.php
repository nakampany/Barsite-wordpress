<?php get_header(); ?>


<!--　　固定ページ -->
<div class="container">
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>


    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <div class="text">
                <h1 class="main-text"><?php the_title(); ?></h1>
                <div class="sub-text" style="margin-left: 10px;"><?php the_excerpt(); ?></div>
            </div>
            <hr>
            <!-- 記事  -->
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