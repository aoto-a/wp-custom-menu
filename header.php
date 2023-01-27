<!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- <html lang="ja">を出力 -->
<head>
<meta charset="<?php bloginfo('charset'); ?>"><!-- <meta charset="utf-8">を出力 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?><!-- 必ずこの場所に書く。<head>内のメタタグを出力するためのアクションフック -->
</head>
<body <?php body_class(); ?>><!-- ページごとにクラスを追加する（クラス名は例えばフロントページなら「home page」など決まっている） -->
    <header>
        <h1 class="site-title"><a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.jpg"></a></h1>
        <input id="menu" type="checkbox" class="hidden">
        <label for="menu" class="open"><i class="bi bi-list"></i></label>
        <div class="drawer">
            <label for="menu" class="close"><i class="bi bi-x"></i></label>
            <nav>
                <!-- ヘッダーにメニューを表示 -->
                <?php $args =array(
                    'theme_location' => 'header_nav',
                );
                wp_nav_menu($args);
                ?>
            </nav>
        </div>
    </header>