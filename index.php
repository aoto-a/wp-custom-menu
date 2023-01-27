<?php get_header(); ?><!-- <header>を呼び出す関数 -->

<main>
    <!-- ループ開始 -->
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <article>
        <div class="post-contents">
            <h1 class="post-title"><?php the_title(); ?><!-- 投稿のタイトルを出力 --></h1>
            <div class="post-thumb">
                <?php if(has_post_thumbnail()): the_post_thumbnail('post-eyecatch'); else: ?><!-- アイキャッチ画像を表示 -->
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/post-thumb.jpg" alt=""><!-- アイキャッチ画像が登録されていないときの画像 -->
                <?php endif; ?>
            </div>
            <?php the_content(); ?><!-- 投稿の本文を出力。<p>タグは自動で出力されるので不要 -->
        </div>
    </article>
    <!-- ループ終了 -->
    <?php endwhile; else: ?>
    <!-- 投稿がないとき表示させる内容（例：お知らせはありません）があればここに書く -->
    <?php endif; ?>
</main>

<?php get_footer();//<footer>を呼び出す関数。誤動作を防ぐため最終行には閉じタグを書かない。