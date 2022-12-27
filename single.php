<?php get_header(); ?>

<!-- ブログページ -->
<div class="container">
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

    <div class="text">
        <h1 class="main-text">BLOG</h1>
        <p class="sub-text">ブログ一覧</p>
    </div>
    <hr>

    <div class="row">
        <div class="col-md-8">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <article id="<?php the_ID(); ?>" <?php post_class('entry'); ?>>
                        <h1 style="font-weight: 800;">
                            <?php the_title(); ?>
                        </h1>
                        <time class="text-end py-2" datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y.m.d'); ?></time><br>
                        <div class="content">
                            <?php the_content(); ?>
                        </div>
                        <a href="https://barcloud-fukui.com/barcloud/blog/" class="button-effect bgleft m-5" style="float: right;"><span>blog一覧へ</span></a>
                    </article>
                <?php
                endwhile;
                ?>
            <?php
            endif;
            ?>
        </div>
        <div class="col-md-4 sidebar">
            <div class="side_widget clearfix widget_recent_entries" id="recent-posts-3">
                <h3 class="side_headline text-center py-5" style="font-weight: 600;"><span>BLOG一覧</span></h3>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>

<style>
    @media screen and (max-width: 767px) {
        .sidebar {
            display: none;
        }
    }
</style>


<?php get_footer(); ?>