<?php

function mytheme_setup() {

    // theme.min.cssを有効化
    add_theme_support('wp-block-styles');

    // 縦横比を維持したレスポンシブを有効か
    add_theme_support('responsive-embeds');


    add_theme_support('title-tag');

    add_theme_support('html5', array(
        'style',
        'script'
    ));

    add_theme_support('post-thumbnails');

    add_theme_support('align-wide');

    register_nav_menus( array(
        'primary' => 'ナビゲーション',
        'eat-in' => 'Eat in',
        'take-out' => 'Take out'
    ));

    add_theme_support( 'automatic-feed-links' );

}
add_action('after_setup_theme', 'mytheme_setup');

function pagination($pages = '', $range = 2){
    $showitems = ($range * 1)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages){
            $pages = 1;
        }
    }
    if(1 != $pages){
        // 画像を使う時用に、テーマのパスを取得
        $img_pass = get_template_directory_uri();
        echo "<div class=\"c-pagination\">";
        // 「1/2」表示 現在のページ数 / 総ページ数
        // echo "<div class=\"m-pagenation__result\">". $paged."/". $pages."</div>";
        // 「<<」を表示
        if($paged > 1) echo "<div class=\"c-pagination__prev-less\"><a href='".get_pagenum_link($paged - 1)."'><<</a></div>";
        // 「前へ」を表示
        if($paged > 1) echo "<div class=\"c-pagination__prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></div>";
        // ページ番号を出力
        echo "<ol class=\"c-pagination__body\">\n";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<li class=\"-current\">".$i."</li>": // 現在のページの数字はリンク無し
                    "<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>";
            }
        }
        // [...] 表示
        // if(($paged + 4 ) < $pages){
        //     echo "<li class=\"notNumbering\">...</li>";
        //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
        // }
        echo "</ol>\n";
        // 「次へ」を表示
        if($paged < $pages) echo "<div class=\"c-pagination__next\"><a href='".get_pagenum_link($paged + 1)."'>次へ</a></div>";
        // 「>>」を表示
        if($paged < $pages) echo "<div class=\"c-pagination__next-grater\"><a href='".get_pagenum_link($paged + 1)."'>>></a></div>";
        echo "</div>\n";
    }
}



function mytheme_widgets() {

    register_sidebar( array(
        'id' => 'sidebar-1',
        'name' => 'サイドバー',
        'before_widget' => '<secton id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>'
    ));

}
add_action('widgets_init', 'mytheme_widgets');

function mytheme_enqueue() {

    wp_enqueue_style(
        'my-fa5',
        '//use.fontawesome.com/releases/v5.6.1/css/all.css',
        array(),
        '5.6.1'
    );

    wp_enqueue_style(
        'mytheme-reset-style',
        get_theme_file_uri('/css/reset.css'),
        array()
    );
    
    wp_enqueue_style(
        'mytheme-style',
        get_theme_file_uri('/css/style.css'),
        array()
    );

    wp_deregister_script('jquery');
    
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
        array(),
        '3.5.1',
        true
    );

    wp_enqueue_script(
        'mytheme-script',
        get_theme_file_uri('/js/script.js'),
        array('jquery'),
        filemtime( get_theme_file_path( '/js/script.js' ) ),
        true
    );
    
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue');




    