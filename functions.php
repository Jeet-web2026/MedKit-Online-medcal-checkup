<?php

function Medkit()
{
    wp_enqueue_script('jquery-js-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', null, '1.0', true);
    wp_enqueue_script('Bootstrap-js-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', null, '1.0', true);
    wp_enqueue_style('Google-font-cdn', 'https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap');
    wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css');
    wp_enqueue_style('Bootstrap-css-cdn', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_style('MedKit-css', get_theme_file_uri( '/styles/index.css' ));
}

add_action('wp_enqueue_scripts', 'Medkit');


?>
