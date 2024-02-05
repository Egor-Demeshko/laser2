<?php
/**
 * Retrieves the main top menu and returns it as a string.
 *
 * @return string The main top menu HTML content.
 */
function ls_get_main_top_menu(){
    ob_start();
    ?>
    <nav aria-label="<?php __('Главная навигация по странице сайта', 'laser'); ?>">
    <?php
        if (has_nav_menu('main_menu')) {
                wp_nav_menu([
                    'theme_location' => 'main_menu',
                    'menu_class' => 'main-menu',
                    'container' => false
                ]);
        }
    ?>
    </nav>
    <?php
    return ob_get_clean();
}
