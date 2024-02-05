<?php
get_header();

//main top menu + contacts
echo get_template_part('template-parts/menu', '');
//mobile bottom bar with contacts
echo get_template_part('template-parts/bottom_bar', '');
//main content
echo get_template_part('template-parts/main/index', '');
echo get_template_part('template-parts/side_menu', '');
get_footer();