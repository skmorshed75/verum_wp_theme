<?php
/**
 * Title: About Page Data
 * Post Type: page
 * Template: page-templates/about
 */

 //Class 4.30
 piklist('field', array(
    'type' => 'file',
    'field' => 'verum_about_image',
    'label' => __('About Image','verum'),
    'options' => array(
        'button' => __('Add Image','verum'),
        'modal_title' => __('Add Image', 'verum')
    )
 ));

 piklist('field', array(
     'type' => 'text',
     'field' => 'verum_about_designation',
     'label' => __('Designation','verum'),
     'attributes' => array(
         'class' => 'regular-text',
     )
 ));

 piklist('field', array(
     'type' => 'textarea',
     'field' => 'verum_about_teaser',
     'label' => __('Teaser Text','verum'),
     'attributes' => array(
         'class' => 'large-text',
         'rows' => 5
     ),
    
 ));

 piklist('field', array(
    'type' => 'file',
    'field' => 'verum_about_footer_image',
    'label' => __('Footer Image','verum'),
    'options' => array(
        'button' => __('Add Footer Image','verum'),
        'modal_title' => __('Footer Image', 'verum')
    )
 ));

 piklist('field', array(
    'type' => 'group',
    'field' => 'verum_about_social_links',
    'label' => __('Social Links','verum'),
    'fields' => array(
        array(
            'type' => 'text',
            'field' => 'facebook',
            'label' => __('Facebook Link','verum'),
            'attributes' => array(
                'class' => 'regular-text'
            )
        ),
        array(
            'type' => 'text',
            'field' => 'twitter',
            'label' => __('Twitter Link','verum'),
            'attributes' => array(
                'class' => 'regular-text'
            )
        ),
        array(
            'type' => 'text',
            'field' => 'googleplus',
            'label' => __('Google Plus Link','verum'),
            'attributes' => array(
                'class' => 'regular-text'
            )
        ),
        
    ),
    
 ));

 ?>