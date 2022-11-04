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

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post() ?>

            <div class="text">
                <h1 class="main-text"><?php the_title(); ?></h1>
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

            <?php get_footer(); ?>