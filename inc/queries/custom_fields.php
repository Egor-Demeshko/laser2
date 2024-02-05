<?php
function ls_get_custom_fields($key) {
    return get_post_meta(get_post()->ID, $key, true);
}