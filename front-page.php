<?php get_header(); ?>
<?php if (is_home()) : ?>
    <!-- main  -->
    <div id="mainImg">
        <div class="mainTittle d-flex justify-content-center">
            <h1>Bar Cloud</h1>
        </div>
    </div>
<?php endif; ?>

<div class="container">

    <section>
        <h1 class="heading fadeUpTrigger">BLOG</h1>
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
                                    <h6 class="text-white p-1 h3">
                                        <?php the_title(); ?>
                                        <br><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日'); ?></time>
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

        <div class="blog-button fadeUpTrigger">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" width="20px" viewBox="0 0 300 500">
                <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
            <a class="btn btn-more" href="https://nakampany.website/blog">MORE...</a>
        </div>
    </section>

    <!-- about  -->
    <section>
        <h1 class="heading fadeUpTrigger">ABOUT</h1>
        <div class="fadeUpTrigger">
            <h2 class="intro">私たちについて...</h2>
            <p class="intro-p">
                お食事やリゾート気分を味わえるカフェ＆バー
                <br>
                「Bar Cloud」について紹介します!
            </p>
        </div>

        <div class="column fadeUpTrigger">
            <figure class="column-step">
                <img src="https://nakampany.website/wp-content/uploads/2022/10/BH7C6703-scaled.jpg" alt="">
            </figure>
            <div class="column-content">
                <p class="column-description">
                    <span>お酒</span>と<span>タパス</span>を楽しめるお店です!
                    <br>
                    お客様もスタッフもみんなが楽しく笑顔で過ごせるアットホームなお店です!
                </p>
                <p class="button">
                    <a href="https://nakampany.website/about" class="button-effect bgleft">
                        <span>詳細を見る</span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="18px" width="18px" viewBox="0 0 384 650">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="fadeUpTrigger">
            <h1 class="heading fadeUpTrigger">MENU</h1>
            <h2 class="intro">おすすめメニューは？</h2>
            <p class="intro-p">
                <span>白いオムライス</span>
                <br>
                自家製ボロネーゼライスに、白い黄身の玉子をのせた一品です！
            </p>
        </div>

        <div class="column fadeUpTrigger">
            <figure class="column-step">
                <img src="https://nakampany.website/wp-content/uploads/2022/10/BH7C6659-scaled.jpg" alt="">
            </figure>
            <div class="column-content">
                <p class="column-description">
                    お食事やリゾート気分を味わえるカフェ＆バー
                    <br>
                    「Bar Cloud」について紹介します!
                </p>
                <p class="button ">
                    <a href="https://nakampany.website/menu" class="button-effect bgleft">
                        <span>詳細を見る</span>
                        <svg xmlns="http://www.w3.org/2000/svg" height="18px" width="18px" viewBox="0 0 384 650">
                            <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                        </svg>
                    </a>
                </p>
            </div>
        </div>
    </section>
    <!-- info  -->
    <section id="info" class="fadeUpTrigger">
        <h1 class="heading fadeUpTrigger">SHOP INFO</h1>
        <div class="info_3colmns row fadeUpTrigger">
            <a class="info_content col-lg-4 card-effect" href="https://nakampany.website/info">
                <svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" height="40px" width="40px" viewBox="0 0 384 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                </svg><!-- <i class="fas fa-map-marker-alt"></i> -->
                <h2>ACCESS
                    <br>
                    <span>住所</span>
                </h2>
                <p>福井県越前市高木町12-2-11</p>
            </a>

            <a class="info_content col-lg-4 card-effect" href="https://nakampany.website/info">
                <svg class="svg-inline--fa fa-clock fa-w-16" aria-hidden="true" data-prefix="far" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" height="40px" width="40px" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm0 448c-110.5 0-200-89.5-200-200S145.5 56 256 56s200 89.5 200 200-89.5 200-200 200zm61.8-104.4l-84.9-61.7c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h32c6.6 0 12 5.4 12 12v141.7l66.8 48.6c5.4 3.9 6.5 11.4 2.6 16.8L334.6 349c-3.9 5.3-11.4 6.5-16.8 2.6z"></path>
                </svg><!-- <i class="far fa-clock"></i> -->
                <h2>OPEN
                    <br>
                    <span>営業時間</span>
                </h2>
                <p>17:30〜26:00
                    <br>
                    <span>定休日／毎週月曜日</span>
                </p>
            </a>

            <a class="info_content col-lg-4 card-effect" href="https://nakampany.website/info">
                <svg class="svg-inline--fa fa-phone fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" height="40px" width="40px" viewBox="0 0 512 512" data-fa-i2svg="">
                    <path fill="currentColor" d="M493.397 24.615l-104-23.997c-11.314-2.611-22.879 3.252-27.456 13.931l-48 111.997a24 24 0 0 0 6.862 28.029l60.617 49.596c-35.973 76.675-98.938 140.508-177.249 177.248l-49.596-60.616a24 24 0 0 0-28.029-6.862l-111.997 48C3.873 366.516-1.994 378.08.618 389.397l23.997 104C27.109 504.204 36.748 512 48 512c256.087 0 464-207.532 464-464 0-11.176-7.714-20.873-18.603-23.385z"></path>
                </svg><!-- <i class="fas fa-phone"></i> -->
                <h2>CONTACT
                    <br>
                    <span>お問い合わせ</span>
                </h2>
                <p>
                    <script type="text/javascript">
                        smtel('0778-42-7704');
                    </script>
                    <span class="tel-link">0778-42-7704</span>
                </p>
            </a>
        </div>
    </section>

    <!-- 上に行くボタン -->
    <section>
        <div class="scroll-btn">
            <a href="#">
                <i class="fas fa-arrow-up card-effect btn-1"></i>
            </a>
        </div>
    </section>
</div>

<?php get_footer(); ?>