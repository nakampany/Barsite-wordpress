<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="最新技術と自然との調和を目指す">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">
    <!-- bootstorap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/7c679e1f70.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>
    <div id="splash">
        <div id="splash_text"></div>
        <div class="loader_cover loader_cover-up"></div>
        <div class="loader_cover loader_cover-down"></div>
    </div>
    <script src="https://rawgit.com/kimmobrunfeldt/progressbar.js/master/dist/progressbar.min.js"></script>
    <script src="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/4-1-3/js/4-1-3.js"></script>

    <header id="header">
        <div class="container">
            <div class="SNS">
                <a href="https://lin.ee/4CemrXl" class="line"><svg xmlns="http://www.w3.org/2000/svg" height="40px" width="40px" viewBox="0 0 448 512">
                        <path d="M272.1 204.2v71.1c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.1 0-2.1-.6-2.6-1.3l-32.6-44v42.2c0 1.8-1.4 3.2-3.2 3.2h-11.4c-1.8 0-3.2-1.4-3.2-3.2v-71.1c0-1.8 1.4-3.2 3.2-3.2H219c1 0 2.1.5 2.6 1.4l32.6 44v-42.2c0-1.8 1.4-3.2 3.2-3.2h11.4c1.8-.1 3.3 1.4 3.3 3.1zm-82-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 1.8 1.4 3.2 3.2 3.2h11.4c1.8 0 3.2-1.4 3.2-3.2v-71.1c0-1.7-1.4-3.2-3.2-3.2zm-27.5 59.6h-31.1v-56.4c0-1.8-1.4-3.2-3.2-3.2h-11.4c-1.8 0-3.2 1.4-3.2 3.2v71.1c0 .9.3 1.6.9 2.2.6.5 1.3.9 2.2.9h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.7-1.4-3.2-3.1-3.2zM332.1 201h-45.7c-1.7 0-3.2 1.4-3.2 3.2v71.1c0 1.7 1.4 3.2 3.2 3.2h45.7c1.8 0 3.2-1.4 3.2-3.2v-11.4c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2V234c0-1.8-1.4-3.2-3.2-3.2H301v-12h31.1c1.8 0 3.2-1.4 3.2-3.2v-11.4c-.1-1.7-1.5-3.2-3.2-3.2zM448 113.7V399c-.1 44.8-36.8 81.1-81.7 81H81c-44.8-.1-81.1-36.9-81-81.7V113c.1-44.8 36.9-81.1 81.7-81H367c44.8.1 81.1 36.8 81 81.7zm-61.6 122.6c0-73-73.2-132.4-163.1-132.4-89.9 0-163.1 59.4-163.1 132.4 0 65.4 58 120.2 136.4 130.6 19.1 4.1 16.9 11.1 12.6 36.8-.7 4.1-3.3 16.1 14.1 8.8 17.4-7.3 93.9-55.3 128.2-94.7 23.6-26 34.9-52.3 34.9-81.5z" />
                    </svg></a>
                <a href="https://instagram.com/barcloud0801"><svg xmlns="http://www.w3.org/2000/svg" height="40px" width="40px" viewBox="0 0 448 512">
                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg></a>
            </div>
            <nav id="" class="header-nav d-flex row align-items-center">
                <a href="" class="col-2"><img src="https://nakampany.website/wp-content/uploads/2022/10/logo.jpg" alt=""></a>
                <ul class="col-10 d-flex justify-content-end">
                    <li><a href="#sec01" class="btn">BLOG</a></li>
                    <li><a href="#sec02" class="btn">ABOUT</a></li>
                    <li><a href="#sec03" class="btn">MENU</a></li>
                    <li><a href="#sec04" class="btn">INFO</a></li>
                </ul>
            </nav>
        </div>

        <!-- ハンバーガーメニュー -->
        <div class="hamburger-menu">
            <input type="checkbox" id="menu-btn-check">
            <label for="menu-btn-check" class="menu-btn"><span></span></label>
            <!--ここからメニュー-->
            <div class="menu-content">
                <ul>
                    <li class="menu-item"><a href="#sec01" class="btn">BLOG</a></li>
                    <li class="menu-item"><a href="#sec02" class="btn">ABOUT</a></li>
                    <li class="menu-item"><a href="#sec03" class="btn">MENU</a></li>
                    <li class="menu-item"><a href="#sec04" class="btn">INFO</a></li>
                </ul>
            </div>
        </div>
    </header>

    <?php if (is_home()) : ?>
        <!-- main  -->
        <div id="mainImg">
            <div class="mainTittle d-flex justify-content-center">
                <h1>Bar Cloud</h1>
            </div>
        </div>
    <?php endif; ?>



    <div class="container">
        <!-- blog  -->
        <section>
            <h1 class="heading fadeUpTrigger">BLOG</h1>

            <?php if (have_posts()) :
                while (have_posts()) : the_post() ?>
                    <div class="row g-4 fadeUpTrigger" id="<?php the_ID(); ?>" <?php post_class('news'); ?>>

                        <figure class="col-lg-4 col-sm-6">
                            <a href="<?php the_permalink() ?>">
                                <div class="project pro-1 category">
                                    <?php the_category(); ?>
                                    <?php if (have_posts()) : ?>
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    <?php else : ?>
                                        <img src="https://nakampany.website/wp-content/uploads/2022/10/BH7C6703-scaled.jpg" alt="">
                                    <?php endif; ?>
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white"><?php the_title(); ?></h4>
                                            <h6 class="text-white"><?php the_excerpt(); ?></h6>
                                            <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('Y年m月d日(l)'); ?></time>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </figure>

                    </div>
            <?php endwhile;
            endif; ?>

            <div class="blog-button fadeUpTrigger">
                <svg xmlns="http://www.w3.org/2000/svg" height="20px" width="20px" viewBox="0 0 300 500">
                    <!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                    <path d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                </svg>
                <a class="btn btn-more">MORE...</a>
            </div>
        </section>
        <!-- about  -->
        <section>
            <h1 class="heading fadeUpTrigger">ABOUT</h1>
            <div class="fadeUpTrigger">
                <h2 class="intro">私たちについて...</h2>
                <p class="intro-p">
                    <span>お酒</span>と<span>タパス</span>を楽しめるお店です!
                    <br>
                    お客様もスタッフもみんなが楽しく笑顔で過ごせるアットホームなお店です!
                </p>
            </div>

            <div class="column fadeUpTrigger">
                <figure class="column-step">
                    <img src="https://nakampany.website/wp-content/uploads/2022/10/BH7C6703-scaled.jpg" alt="">
                </figure>
                <div class="column-content">
                    <p class="column-description">
                        多種類のお酒や料理、タパスを楽しめるバー
                        <br>
                        「BAR CLOUD」について紹介します!
                    </p>
                    <p class="button">
                        <a href="" class="button-effect bgleft">
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
                        <a href="" class="button-effect bgleft">
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
                <a class="info_content col-lg-4 card-effect">
                    <svg class="svg-inline--fa fa-map-marker-alt fa-w-12" aria-hidden="true" data-prefix="fas" data-icon="map-marker-alt" role="img" xmlns="http://www.w3.org/2000/svg" height="40px" width="40px" viewBox="0 0 384 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"></path>
                    </svg><!-- <i class="fas fa-map-marker-alt"></i> -->
                    <h2>ACCESS
                        <br>
                        <span>住所</span>
                    </h2>
                    <p>福井県越前市高木町12-2-11</p>
                </a>

                <a class="info_content col-lg-4 card-effect">
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

                <a class="info_content col-lg-4 card-effect">
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
        <!-- instagram -->
        <section class="instagram">
            <h1 class="heading">INSTAGRAM</h1>
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="blog-card card-effect">
                        <img src="./bar-image/BH7C6648.jpg" alt="">
                        <h5 class="mb-0 mt-4">
                            <a href="">kakuteru</a>
                        </h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse ullam atque odio ad saepe minima!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card card-effect">
                        <img src="./bar-image/BH7C6648.jpg" alt="">
                        <h5 class="mb-0 mt-4">
                            <a href="">kakuteru</a>
                        </h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse ullam atque odio ad saepe minima!</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card card-effect">
                        <img src="./bar-image/BH7C6648.jpg" alt="">
                        <h5 class="mb-0 mt-4">
                            <a href="">kakuteru</a>
                        </h5>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse ullam atque odio ad saepe minima!</p>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- 上に行くボタン -->
        <section>
            <div class="scroll-btn">
                <a href="<?php echo home_url(); ?>">
                    <i class="fas fa-arrow-up card-effect btn-1"></i>
                </a>
            </div>
        </section>
    </div>
    <!-- LINE  -->
    <div class="LINE">
        <a href="https://lin.ee/4CemrXl" target="_blank" rel="noopener" class="project">
            <img src="https://nakampany.website/wp-content/uploads/2022/10/LINE.jpg" alt="LINE友だち追加">
        </a>
    </div>

    <!-- footer  -->
    <footer id="footer">
        <div class="nav-row">
            <a href="<?php echo home_url(); ?>">
                <img src="https://nakampany.website/wp-content/uploads/2022/10/logo2.png" class="d-flex" alt="">
            </a>
            <ul class="nav justify-content-center">
                <li><a href="#sec01">BLOG</a></li>
                <li><a href="#sec02" class="nav-line">ABOUT</a></li>
                <li><a href="#sec02" class="nav-line nav-line-2">MENU</a></li>
                <li><a href="#sec04">INFO</a></li>
            </ul>
        </div>
        <div class="secondary">
            <p class="copyright text-center">Copyright ©︎ BAR CLOUD</p>
        </div>
    </footer>
    <?php
    wp_enqueue_script('jquery');
    wp_head();
    ?>
    <script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/3-2-3-1/js/3-2-3-1.js"></script>
</body>

</html>