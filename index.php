<?php
get_header();

 if(is_404()) {
     global $wp_query;
    $wp_query->set_404();
    status_header(404);
    nocache_headers();
    include(get_404_template());
    exit();
}
 

get_footer();