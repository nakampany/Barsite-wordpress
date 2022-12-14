<?php

add_theme_support('post-thumbnails');


add_theme_support('menus');


//サイドバーにウィジェット追加
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'sidebar',
        'description' => 'サイドバーウィジェット',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="side-title">',
        'after_title' => '</h3>'
    ));
}

//固定ページで抜粋を使えるようにする
add_post_type_support('page', 'excerpt');
