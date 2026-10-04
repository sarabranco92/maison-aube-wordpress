<?php
/** Maison Aube theme setup and editable home pattern. */
if ( ! defined( 'ABSPATH' ) ) { exit; }
add_action( 'after_setup_theme', function () {
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style.css' );
} );
add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style( 'maison-aube', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'maison-aube', get_theme_file_uri( '/assets/site.js' ), array(), wp_get_theme()->get( 'Version' ), true );
} );
add_action( 'init', function () {
    register_block_pattern_category( 'maison-aube', array( 'label' => __( 'Maison Aube', 'maison-aube' ) ) );
    $content = file_get_contents( get_theme_file_path( '/patterns/home.html' ) );
    $content = str_replace( '{{ASSET_URL}}', esc_url( get_theme_file_uri( '/assets' ) ), $content );
    register_block_pattern( 'maison-aube/home', array(
        'title' => __( 'Maison Aube — homepage', 'maison-aube' ),
        'categories' => array( 'maison-aube' ),
        'content' => $content,
        'inserter' => true,
    ) );
} );
