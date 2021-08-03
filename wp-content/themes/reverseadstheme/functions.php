<?php

    function register_styles() {
        
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/style.css", array(), $version, 'all');
        wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'register_styles' );

    function register_script(){
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
        wp_enqueue_script('popper', 'ttps://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4.1', true);
        wp_enqueue_script('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
        wp_enqueue_script('javascript', get_template_directory_uri() . '/assets/js/main.js', array(), '3.4.1', true);
    }
    add_action( 'wp_enqueue_scripts', 'register_script' );





?>