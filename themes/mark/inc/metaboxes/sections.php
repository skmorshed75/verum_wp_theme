<?php

//Class 2.7
function mark_section_metabox_options($metaboxes) {
    $metaboxes[] = array(
        'id' => 'mark-section-type',
        'title' => __('Section Type','mark'),
        'post_type' => 'section',
        'context' => 'normal',
        'priority' => 'default',
        'sections' => array(
            array(
                'name' => 'mark-section-type-section',
                'icon' => 'fa fa-image',
                'fields' => array(
                    array(
                        'id' => 'section-type',
                        'type' => 'select',
                        'title' => __('Select Section Type','mark'),
                        'options' => array(
                            'banner' => __('Banner','mark'),
                            'mission' => __('Mission','mark'),
                            'features' => __('Features','mark'),
                            'about' => __('About','mark'),
                            'services' => __('Services','mark'),
                            'benefits' => __('Benefits','mark'),
                            'testimonials' => __('Testimonials','mark'),
                            'image_info' => __('Image Info','mark'),
                            'counter' => __('Counter','mark'),
                            'cta' => __('CTA','mark'),
                            'team' => __('Team','mark'),
                            'portfolio' => __('Portfolio','mark'),
                            'sricing' => __('Pricing','mark'),
                            'shop' => __('Shop','mark'),
                            'blog' => __('Blog','mark'),
                            'clients' => __('Clients','mark'),
                            'subscription' => __('Subscription','mark'),
                            'contact' => __('Contact','mark'),
                        )
                    )
                )
            )
        )
    );
    return $metaboxes;
}
add_filter('cs_metabox_options','mark_section_metabox_options');