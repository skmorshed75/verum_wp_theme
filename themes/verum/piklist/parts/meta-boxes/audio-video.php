<?php
/**
Title: External Media
Post Type: post
 */

//class 4.9
piklist( 'field', array(
    'type'  => 'url',
    'field' => 'verum_media_url',
    'label' => __( 'External Media Source', 'verum' ),
    'attributes' => array(
        'class' => 'widefat',
    )
) );

?>