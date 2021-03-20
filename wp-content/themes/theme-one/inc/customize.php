<?php

function mythme_customize(WP_Customize_Manager $customize) {
    $customize->add_panel('mytheme_panel',[
        'title' => 'Social Media',
        'description' => 'My theme options description',
        'priority' => 30
    ]);

    $customize->add_section('mytheme_section', [
        'title' => 'Facebook',
        'priority' => 10,
        'panel' => 'mytheme_panel'
    ]); 

    $customize->add_setting('button_link_facebook', [
    ]);
    $customize->add_control('button_link_facebook', [
        'section' => 'mytheme_section',
        'label' => 'Button Link',
        'type' => 'text',
        'priority' => 1,
    ]);

    $customize->add_section('mytheme_section_twitter', [
        'title' => 'twitter',
        'priority' => 20,
        'panel' => 'mytheme_panel'
    ]); 

    $customize->add_setting('button_link_twitter', [
    ]);
    $customize->add_control('button_link_twitter', [
        'section' => 'mytheme_section_twitter',
        'label' => 'Button Link',
        'type' => 'text',
        'priority' => 2,
    ]);

    $customize->add_section('mytheme_section_dribbble', [
        'title' => 'dribbble',
        'priority' => 30,
        'panel' => 'mytheme_panel'
    ]); 

    $customize->add_setting('button_link_dribbble', [
    ]);
    $customize->add_control('button_link_dribbble', [
        'section' => 'mytheme_section_dribbble',
        'label' => 'Button Link',
        'type' => 'text',
        'priority' => 3,
    ]);


    $customize->add_section('mytheme_section_pinterest', [
        'title' => 'pinterest',
        'priority' => 40,
        'panel' => 'mytheme_panel'
    ]); 

    $customize->add_setting('button_link_pinterest', [
    ]);
    $customize->add_control('button_link_pinterest', [
        'section' => 'mytheme_section_pinterest',
        'label' => 'Button Link',
        'type' => 'text',
        'priority' => 4,
    ]);

    $customize->selective_refresh->add_partial('button_link_facebook', [
        'selector' => '.header__social'
    ]);
}

add_action('customize_register', 'mythme_customize');