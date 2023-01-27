    <footer>
        <!-- フッターにメニューを表示 -->
        <?php $args =array(
        'theme_location' => 'footer_nav',
        );
        wp_nav_menu($args);
        ?>
    </footer>
<?php wp_footer(); ?><!-- 必ずこの場所に書く。<footer>で各種データをを出力するためのアクションフック -->
</body>
</html>