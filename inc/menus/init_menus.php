<?php 

function init_menus(){
    register_nav_menus([
        'main_menu' => __('Главное меню', 'ls_laser'),
    ]);
}