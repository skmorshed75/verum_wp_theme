<?php
/**
 * Title: Contact Page Data
 * Post Type: page
 * Template: page-templates/contact
 */

//Class 4.32

piklist( 'field', array(
    'type'       => 'text',
    'field'      => 'verum_contact_subheading',
    'label'      => __( 'Sub-heading', 'verum' ),
    'attributes' => array(
        'class' => 'regular-text',
    ),
) );

piklist( 'field', array(
    'type'       => 'text',
    'field'      => 'verum_contact_shortcode',
    'label'      => __( 'Contact form 7 Shortcode', 'verum' ),
    'attributes' => array(
        'class' => 'large-text',
    ),
) );
?>