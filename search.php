<?php get_header(); ?>

        <figure class="p-top-image-archive">
            <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/three-burgers-on-brown-wooden-tray-between-white-ceramic-6@2x.png" alt="" class="p-top-image-archive__img">
            <div class="p-top-image-archive__wrapper">
                <h2 class="p-top-image-archive__head">Search:</h2>
                <p class="p-top-image-archive__text"><?php echo get_search_query() ?></p>
            </div>
        </figure>

        <div class="p-container-archive">
            <div class="p-caption">
                <h3 class="p-caption__head">小見出しが入ります</h3>
                <p class="p-caption__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
            </div>

            <?php if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>
            <article class="p-card-article <?php post_class(); ?>">
                <figure class="p-card-article__img">
                <?php the_post_thumbnail(); ?>
                </figure>
                <div class="p-card-article__detail">
                    <h4 class="p-card-article__detail__tophead"><?php the_title(); ?></h4>

                    <?php the_excerpt(); ?>
                    
                    <div>
                        <button class="p-card-article__detail__button">
                        <a href="<?php the_permalink(); ?>">詳しく見る</a></button>
                    </div>
                </div>
            </article>
            <?php endwhile;
            else :
                ?><p>表示する記事がありません</p>
            <?php endif; ?>
            

            <?php
            if( function_exists('pagination') ){ // 関数が定義されていたらtrueになる
            pagination();
            }?>
            
        </div>
    </div>
    <div class="l-main-right">
    <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>
