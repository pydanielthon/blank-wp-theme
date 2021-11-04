<?php

class Theme {
  public function __construct() {
    add_action('wp_enqueue_scripts', array($this, 'cut2code_files'));

  }
  function cut2code_files() {
    wp_enqueue_style('botstrapCSS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/css/bootstrap.min.css'));
    wp_enqueue_style('style_main', get_theme_file_uri('/css/style.css'));
    
    wp_enqueue_script('bootstrapJS', get_theme_file_uri('/inc/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js'),array('jquery'), 1.0, true);
    wp_enqueue_script('accordionJS', get_theme_file_uri('/js/accordion.js'),array('jquery'), 1.0, true);

  }

}


$template = new Theme();



//Bloki/Sekcje gutenberg

add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

          // Register a One block.
          acf_register_block_type(array(
              'name'              => 'section_1',
              'title'             => __('section_1'),
              'description'       => __('A custom section_1 block.'),
              'render_template'   => 'template-parts/blocks/section_1.php',
              'category'          => 'formatting',
        'enqueue_style'		=> get_stylesheet_directory_uri() . '/css/style.css'
          ));

          acf_register_block_type(array(
            'name'              => 'section_2_image_and_slider',
            'title'             => __('section_2_image_and_slider'),
            'description'       => __('A custom section_2_image_and_slider block.'),
            'render_template'   => 'template-parts/blocks/section_2_image_and_slider.php',
            'category'          => 'formatting',
      'enqueue_style'		=> get_stylesheet_directory_uri() . '/css/style.css'
        ));

          acf_register_block_type(array(
            'name'              => 'section_3_accordion',
            'title'             => __('section_3_accordion'),
            'description'       => __('A custom section_3_accordion block.'),
            'render_template'   => 'template-parts/blocks/section_3_accordion.php',
            'category'          => 'formatting',
      'enqueue_style'		=> get_stylesheet_directory_uri() . '/css/style.css'
        ));


          acf_register_block_type(array(
            'name'              => 'section_4_contact',
            'title'             => __('section_4_contact'),
            'description'       => __('A custom section_4_contact block.'),
            'render_template'   => 'template-parts/blocks/section_4_contact.php',
            'category'          => 'formatting',
      'enqueue_style'		=> get_stylesheet_directory_uri() . '/css/style.css'
        ));
         
    }
}

