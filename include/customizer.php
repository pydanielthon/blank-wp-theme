<?php 
  
    function theme_customizer_function($wp_customize){
        $wp_customize->add_section('stopka', array(
            'title' => "Stopka",
            'priority' => 2,
            'description' => __('Edycja stopki'),
        ));


        $wp_customize->add_setting('link_do_facebook', array(
            'default' => __('https://www.facebook.com')
        ));
        $wp_customize ->add_control('link_do_facebook', array(
            'label' => 'Link do Facebook',
            'section' => 'stopka'
        ));
        
        $wp_customize->add_setting('link_do_instagram', array(
            'default' => __('https://www.instagram.com/sem/campaign/emailsignup/?campaign_id=13560899673&extra_1=s|c|547271404014|e|instagram%20%27|&placement=&creative=547271404014&keyword=instagram%20%27&partner_id=googlesem&extra_2=campaignid%3D13560899673%26adgroupid%3D126262420014%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-1321618851291%26loc_physical_ms%3D1011463%26loc_interest_ms%3D9046282%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQjw5JSLBhCxARIsAHgO2SeLezcQJZOq7PW6VAu0BPIL3ISNr5ZDgSDTq8euqD8XHkYUqz7-3EoaAvcFEALw_wcB')
        ));
        $wp_customize ->add_control('link_do_instagram', array(
            'label' => 'Link do Instagram',
            'section' => 'stopka'
        ));


        $wp_customize->add_setting('nr_kontaktowy_1', array(
            'default' => ''
        ));
        $wp_customize ->add_control('nr_kontaktowy_1', array(
            'label' => 'Numer kontaktowy 1',
            'section' => 'stopka'
        ));



        $wp_customize->add_setting('image_footer', array(
            'default' => get_bloginfo('template)url')
            
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'image_footer', array(
            'label' => 'Zdjęcie Stopka',
            'section' => 'stopka',

        )));

        $wp_customize->add_setting('text_footer', array(
            'default' => '',
        ));
        $wp_customize ->add_control('text_footer', array(
            'label' => 'Text Stopka',
            'section' => 'stopka',
            'type' => 'textarea'
        ));


    

}
  add_action('customize_register','theme_customizer_function');
?>