<?php
get_header();

//main top menu + contacts
echo get_template_part('template-parts/menu', '');
?>

<div style="height: 100%;">
    <style>
        body {
            height: 100vh;
        }
    </style>
    <h1 style="color: black; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">СТРАНИЦА НЕ НАЙДЕНА &#128562<br><a href="/">На главную</a></h1>

</div>
<?php
wp_footer();
