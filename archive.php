<?php get_header(); ?>

<div class="container">
    <ul itemscope itemtype="https://schema.org/BreadcrumbList" class="d-flex">
        <!-- 1つめ -->
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="ホームのURL">
                <span itemprop="name">ホーム</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <svg xmlns="http://www.w3.org/2000/svg" height="18px" width="18px" viewBox="0 0 384 650">
            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
        </svg>
        <!-- 2つめ -->
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="カテゴリーのURL">
                <span itemprop="name">カテゴリー名</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
        <svg xmlns="http://www.w3.org/2000/svg" height="18px" width="18px" viewBox="0 0 384 650">
            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
        </svg>
        <!-- 3つめ -->
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="子カテゴリーのURL">
                <span itemprop="name">子カテゴリー名</span>
            </a>
            <meta itemprop="position" content="3" />
        </li>
    </ul>

    <div class="text">
        <h1 class="main-text">BLOG</h1>
        <p class="sub-text">ブログ</p>
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
                                <h3 class="text-white"><?php the_category(); ?></h3>
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