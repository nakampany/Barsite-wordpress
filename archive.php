<?php get_header(); ?>

<div class="container">
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <div class="text">
        <h1 class="main-text">BLOG</h1>
        <p class="sub-text">ブログ一覧</p>
    </div>
    <hr>


    <!-- ブログ一覧ページ -->
    <h1 class="heading fadeUpTrigger">BLOG</h1>
    <h5 class="sub-heading text-center fadeUpTrigger">ブログ</h5>
    <div class="row g-5 fadeUpTrigger" style="margin:100px 0;">
        <?php if (have_posts()) : ?>
            <?php query_posts('posts_per_page=12'); ?>
            <?php while (have_posts()) : the_post() ?>
                <a class="col-lg-4 col-sm-6" href="<?php the_permalink() ?>" id="<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <div class="project pro-1">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                        <?php else : ?>
                            <img src="https://barcloud-fukui.com/wp-content/uploads/2022/12/BH7C6659-scaled.jpg" alt="">
                        <?php endif; ?>
                        <h5 class="project-name py-4" style="font-weight: 800;"><?php the_title(); ?></h5>
                        <div>
                            <p class="project-category" style="font-weight: 500;"><?php the_excerpt(); ?></p>
                            <time datetime="<?php the_time('Y-m-d') ?>" class="text-end py-1"><?php the_time('Y.m.d'); ?></time>
                        </div>
                    </div>
                </a>
            <?php
            endwhile;
            ?>
        <?php
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>