<?php

function shifudo_script_enqueue() {
  wp_enqueue_style("mystyle", get_template_directory_uri() . "/css/shifudo.css",
                    array(), "1.0.0", "all");
  wp_enqueue_script("myjs", get_template_directory_uri() . "/js/shifudo.js",
                    array(), "1.0.0", true);
}

add_action("wp_enqueue_scripts", "shifudo_script_enqueue");
add_theme_support("menus");
