<header>

<?php
    require get_template_directory() . '/inc/menus/main_menu.php';

    echo get_template_part('template-parts/menu', 'mobile');

    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        ?>
        <a href="/">
            <img src="<?= get_template_directory_uri() . '/assets/images/logo.png'?>" alt="<?php _e('логотип компании Rusty Cage', 'ls_laser')?>" ></img>
        </a>
        <?php
    }



    echo ls_get_main_top_menu();
    $email = get_option('admin_email');
?>

<address>
    <?php
        $a1 = ls_get_custom_fields(A1);
    ?>
<a href="tel:<?=$a1?>" aria-label="Основной контактный телефон"><?= $a1?></a>
<a href="mailto: <?= $email ?>" aria-label="Основной Email"><?= $email ?></a>
</address>
</header>