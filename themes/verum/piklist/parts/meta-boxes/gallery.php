<?php
/**
Title: Gallery Images
Post Type: post
 */

//class 4.11
piklist('field',array(
    'type' => 'select',
    'field' => 'verum_gallery_type',
    'label' => __('Gallery Display Type','verum'),
    'value' => 'carousel',
    'choices' => array(
        'carousel' => __('Carousel','verum'),
        'justified' => __('Justified','verum')
    )
));

//4.10
piklist( 'field', array(
    'type'  => 'file',
    'field' => 'verum_gallery',
    'label' => __( 'Gallery Images', 'verum' ),
    'attributes' => array(
        'class' => 'widefat',
    ),
    'options' => array(
        'modal_title' => __('Add Image','verum'),
        'save' => 'id'
    ),
    'add_more' => true
) );

?>