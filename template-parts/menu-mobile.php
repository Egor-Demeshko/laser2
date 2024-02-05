<details>
  <summary>
    <svg id="menu_svg">
      <use href="<?= get_template_directory_uri() . '/assets/icons/icons.svg#menu'?>"></use>
    </svg>
    <svg id="cancel_svg">
      <use href="<?= get_template_directory_uri() . '/assets/icons/icons.svg#cancel'?>"></use>
    </svg>
 </summary>
   <nav aria-label="<?php _e('Главная навигация по странице сайта', 'ls_laser'); ?>">
      <ul>
        <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
                'menu_class' => 'main-menu',
                'container' => false,
                'items_wrap' => '%3$s',
            ]);
        ?>
        <li><button><?php _e('Закрыть', 'ls_laser'); ?></button></li>
        <li class="socials">
          <a href="viber://chat?number=+375296417964" rel="external" target="_blank" aria-label='<?php _e('Написать или позвонить в вайбер', 'ls_laser'); ?>'>
            <svg aria-hidden="true">
              <use href="<?= get_template_directory_uri() . '/assets/icons/icons.svg#viber'?>"></use>
            </svg>
          </a>
          <a href="https://instagram.com" rel="external" target="_blank" aria-label="<?php _e('Перейти на страницу в инстаграм', 'ls_laser'); ?>">
            <svg aria-hidden="true">
              <use href="<?= get_template_directory_uri() . '/assets/icons/icons.svg#instagram'?>">
            </svg>
          </a>
        </li>
      </ul>
  </nav>
</details>