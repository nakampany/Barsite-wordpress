<?php get_header(); ?>


<section>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>
            <article id="<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                <h2 class="text-white">
                    <?php the_category(); ?>
                    <br>
                    <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                </h2>
                <h1 class="text-white p-1">
                    <?php the_title(); ?>
                </h1>
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

    <nav>
        <span>
            <?php previous_post_link('%link'); ?>
        </span>
        <span>
            <?php next_post_link('%link'); ?>
        </span>
    </nav>

</section>

<?php get_footer(); ?>