</main>

    <footer class="l-footer">
        <img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/レイヤー -7@2x.png" alt=""  class="l-footer__img">
        <div class="l-footer__wrap">
            <h6 class="l-footer__wrap__head"><?php wp_nav_menu(array(
            'theme_location' => 'primary',
        )); ?></h6>
            <p class="l-footer__wrap__text"><small>Copyright: RaiseTech</small></p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>