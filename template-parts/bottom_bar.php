<div class="bottom-bar" role="toolbar" aria-label="<?php _e("Нижняя панель контактов", "ls_laser")?>">
    <a href="https://instagram.com/rustycage.by?igshid=NTc4MTIwNjQ2YQ==" aria-label="<?php _e("Перейти на страницу в инстаграмм", "ls_laser")?>" rel="external">
    <svg aria-hidden="true">
        <use href="<?php echo get_template_directory_uri() . '/assets/icons/icons.svg#instagram' ?>"></use>
    </svg>
    </a>
    <a href="tel:<?= ls_get_custom_fields(MTS) ?>" aria-label="<?php _e("Позвонить через оператора МТС", "ls_laser")?>" rel="external">
    <svg aria-hidden="true">
        <use href="<?php echo get_template_directory_uri() . '/assets/icons/icons.svg#mts'?>"></use>
    </svg>
    </a>
    <a href="tel:<?= ls_get_custom_fields(A1) ?>" aria-label="<?php _e("Позвонить через оператора A1", "ls_laser")?> "><span>A1</span></a>
</div>