<?php get_header(); ?>

<div class="container">
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <div class="text">
        <h1 class="main-text">BLOG</h1>
        <p class="sub-text">ブログカテゴリー</p>
    </div>
    <hr>



    <div class="row g-4 fadeUpTrigger">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post() ?>
                <article class="col-lg-4 col-sm-6" id="<?php the_ID(); ?>" <?php post_class('news'); ?>>
                    <a href="<?php the_permalink() ?>">
                        <div class="project pro-1">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else : ?>
                                <img src="https://nakampany.website/wp-content/uploads/2022/10/BH7C6703-scaled.jpg" alt="">
                            <?php endif; ?>
                            <div class="overlay">
                                <br>
                                <h6 class="text-white p-1">
                                    <?php the_title(); ?>
                                    <br><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                                </h6>
                            </div>
                        </div>
                    </a>
                </article>
            <?php
            endwhile;
            ?>
        <?php
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>