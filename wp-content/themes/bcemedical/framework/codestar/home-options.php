<?php
if (!defined('ABSPATH')) {
    die;
} // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'home_options';
//
// Create options
//
CSF::createOptions($prefix, array(
    'menu_title' => 'Trang chủ',
    'menu_slug' => 'csf-home-option',
));

// Create a section
//
CSF::createSection($prefix, array(
    'title' => 'Slider',
    'icon' => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'     => 'list-home-slider',
            'type'   => 'repeater',
            'title'  => 'Danh sách slider',
            'fields' => array(
                array(
                    'id'    => 'home-slider-title',
                    'type'  => 'text',
                    'title' => 'Tiêu đề slider'
                ),
                array(
                    'id'    => 'home-slider-desc',
                    'type'  => 'textarea',
                    'title' => 'Mô tả ngắn'
                ),
                array(
                    'id'    => 'home-slider-btn-title',
                    'type'  => 'text',
                    'title' => 'Tiêu đề nút bấm'
                ),
                array(
                    'id'    => 'home-slider-btn-link',
                    'type'  => 'text',
                    'title' => 'Link nút bấm'
                ),
                array(
                    'id'    => 'home-slider-image',
                    'type'  => 'media',
                    'title' => 'Hình ảnh'
                ),

            ),
        ),
    )
));

//
// Mục giới thiệu
//
CSF::createSection( $prefix, array(
        'id'    => 'home-about',
        'title' => 'Mục giới thiệu',
        'icon'  => 'fas fa-bell',
        'fields'=> array(
            array(
                'id'    => 'home-about-subtitle',
                'type'  => 'text',
                'title' => 'Tiêu đề phụ'
            ),
            array(
                'id'    => 'home-about-main-title',
                'type'  => 'text',
                'title' => 'Tiêu đề chính'
            ),
            array(
                'id'    => 'home-about-content',
                'type'  => 'wp_editor',
                'title' => 'Nội dung giới thiệu'
            ),
            array(
                'id'    => 'home-about-image',
                'type'  => 'media',
                'title' => 'Ảnh đại diện'
            ),
        ),
    )
);

//
// Sản phẩm, dịch vụ
//
CSF::createSection( $prefix, array(
        'id'    => 'home-service',
        'title' => 'Sản phẩm & Dịch vụ',
        'icon'  => 'fas fa-bell',
        'fields'=> array(
            array(
                'id'    => 'home-service-subtitle',
                'type'  => 'text',
                'title' => 'Tiêu đề phụ'
            ),
            array(
                'id'    => 'home-service-main-title',
                'type'  => 'text',
                'title' => 'Tiêu đề chính'
            ),
            array(
                'id'     => 'list-home-service',
                'type'   => 'repeater',
                'title'  => 'Danh sách dịch vụ',
                'fields' => array(
                    array(
                        'id'    => 'item-service-icon',
                        'type'  => 'media',
                        'title' => 'Hình ảnh'
                    ),
                    array(
                        'id'    => 'item-service-title',
                        'type'  => 'text',
                        'title' => 'Tiêu đề'
                    ),
                    array(
                        'id'    => 'item-service-desc',
                        'type'  => 'textarea',
                        'title' => 'Mô tả ngắn'
                    ),
                    array(
                        'id'    => 'item-service-btn-link',
                        'type'  => 'text',
                        'title' => 'Link nút xem thêm'
                    ),

                ),
            ),
        ),
    )
);