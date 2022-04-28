<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'sport_options';
//
// Create options
//
CSF::createOptions( $prefix, array(
    'menu_title' => 'Sport Scream Landing',
    'menu_slug'  => 'csf-sport-scream',
) );

// Create a section
//
CSF::createSection( $prefix, array(
    'title'  => 'Lợi ích',
    'icon'   => 'fas fa-rocket',
    'fields' => array(
        array(
            'id'     => 'option-loiich',
            'type'   => 'repeater',
            'title'  => 'Danh sách lợi ích',
            'fields' => array(
                array(
                    'id'    => 'loiich-title',
                    'type'  => 'text',
                    'title' => 'Tiêu đề'
                ),
                array(
                    'id'    => 'loiich-image',
                    'type'  => 'media',
                    'title' => 'Ảnh icon'
                ),
            ),
        ),
    )
) );

//
// Tính năng
//
CSF::createSection( $prefix, array(
    'id'    => 'option-tinhnang',
    'title' => 'Tính năng',
    'icon'  => 'fas fa-plus-circle',
    'fields'=> array(
        array(
            'id'     => 'tinhnang-subtitle',
            'type'   => 'text',
            'title'  => 'Tiêu đề nhỏ',
        ),
        array(
            'id'     => 'tinhnang-main-title',
            'type'   => 'text',
            'title'  => 'Tiêu đề chính',
        ),
        array(
            'id'     => 'tinhnang-desc',
            'type'   => 'wp_editor',
            'title'  => 'Mô tả tính năng',
        ),
        array(
            'id'    => 'tinhnang-image',
            'type'  => 'media',
            'title' => 'Ảnh đại diện'
        ),
        array(
            'id'     => 'tinhang-list',
            'type'   => 'repeater',
            'title'  => 'Danh sách tính năng',
            'fields' => array(
                array(
                    'id'    => 'item-tinhnang-title',
                    'type'  => 'text',
                    'title' => 'Tiêu đề'
                ),
                array(
                    'id'    => 'item-tinhnang-desc',
                    'type'  => 'textarea',
                    'title' => 'Mô tả ngắn'
                ),
                array(
                    'id'    => 'item-tinhnang-image',
                    'type'  => 'media',
                    'title' => 'Ảnh icon'
                ),
            ),
        ),
    )
) );

//
// Video
//
CSF::createSection( $prefix, array(
    'id'    => 'option-sport-video',
    'title' => 'Video setting',
    'icon'  => 'fas fa-video',
    'fields'=> array(
        array(
            'id'     => 'video-sport-link',
            'type'   => 'text',
            'title'  => 'Link video youtube',
        ),
        array(
            'id'    => 'video-sport-image-video',
            'type'  => 'media',
            'title' => 'Ảnh video'
        ),
        array(
            'id'     => 'video-sport-subtitle',
            'type'   => 'text',
            'title'  => 'Tiêu đề nhỏ',
        ),
        array(
            'id'     => 'video-sport-main-title',
            'type'   => 'text',
            'title'  => 'Tiêu đề chính',
        ),
        array(
            'id'    => 'video-sport-background',
            'type'  => 'media',
            'title' => 'Ảnh background'
        ),
    )
)
);

//
// Giới thiệu sản phẩm
//
CSF::createSection( $prefix, array(
    'id'    => 'option-sport-product-about',
    'title' => 'Giới thiệu sản phẩm',
    'icon'  => 'fas fa-heart',
    'fields'=> array(
        array(
            'id'    => 'sport-product-about-image',
            'type'  => 'media',
            'title' => 'Ảnh đại diện'
        ),
        array(
            'id'     => 'sport-product-about-subtitle',
            'type'   => 'text',
            'title'  => 'Tiêu đề phụ',
        ),
        array(
            'id'     => 'sport-product-about-maintitle',
            'type'   => 'text',
            'title'  => 'Tiêu đề chính',
        ),
        array(
            'id'     => 'sport-product-about-content',
            'type'   => 'wp_editor',
            'title'  => 'Chi tiết sản phẩm',
        ),
    )
)
);

//
// Danh sách sản phẩm
//
CSF::createSection( $prefix, array(
        'id'    => 'option-sport-list-product',
        'title' => 'Danh sách sản phẩm',
        'icon'  => 'fas fa-heartbeat',
        'fields'=> array(
            array(
                'id'    => 'sport-product-subtitle',
                'type'  => 'text',
                'title' => 'Tiêu đề phụ'
            ),
            array(
                'id'     => 'sport-product-main-title',
                'type'   => 'text',
                'title'  => 'Tiêu đề chính',
            ),
            array(
                'id'     => 'product-list',
                'type'   => 'repeater',
                'title'  => 'Danh sách sản phẩm',
                'fields' => array(
                    array(
                        'id'    => 'item-product-title',
                        'type'  => 'text',
                        'title' => 'Tiêu đề sản phẩm'
                    ),
                    array(
                        'id'    => 'item-product-price',
                        'type'  => 'text',
                        'title' => 'Giá sản phẩm'
                    ),
                    array(
                        'id'    => 'item-product-qty',
                        'type'  => 'text',
                        'title' => 'Dung tích'
                    ),
                    array(
                        'id'    => 'item-product-img',
                        'type'  => 'media',
                        'title' => 'Ảnh sản phẩm'
                    ),
                    array(
                        'id'    => 'item-product-content',
                        'type'  => 'wp_editor',
                        'title' => 'Nội dung sản phẩm'
                    ),
                ),
            ),

        )
    )
);

//
// Hướng dẫn sử dụng
//
CSF::createSection( $prefix, array(
    'id'    => 'option-sport-guild',
    'title' => 'Hướng dẫn sử dụng',
    'icon'  => 'fas fa-certificate',
    'fields'=> array(
        array(
            'id'    => 'sport-guild-subtitle',
            'type'  => 'text',
            'title' => 'Tiêu đề phụ'
        ),
        array(
            'id'    => 'sport-guild-main-title',
            'type'  => 'text',
            'title' => 'Tiêu đề chính'
        ),
        array(
            'id'    => 'sport-guild-image',
            'type'  => 'media',
            'title' => 'Ảnh đại diện'
        ),
        array(
            'id'     => 'list-guild',
            'type'   => 'repeater',
            'title'  => 'Danh sách hướng dẫn',
            'fields' => array(
                array(
                    'id'    => 'guild-title',
                    'type'  => 'text',
                    'title' => 'Tiêu đề'
                ),
                array(
                    'id'    => 'guild-desc',
                    'type'  => 'text',
                    'title' => 'Nội dung'
                ),
                array(
                    'id'    => 'guild-image',
                    'type'  => 'media',
                    'title' => 'Hình ảnh'
                ),

            ),
        ),
    )
)
);

//
// Hỗ trợ khách hàng
//
CSF::createSection( $prefix, array(
    'id'    => 'option-sport-support',
    'title' => 'Thông tin hỗ trợ',
    'icon'  => 'fas fa-bell',
    'fields'=> array(
        array(
            'id'    => 'sport-support-subtitle',
            'type'  => 'text',
            'title' => 'Tiêu đề phụ'
        ),
        array(
            'id'    => 'sport-support-main-title',
            'type'  => 'text',
            'title' => 'Tiêu đề chính'
        ),
        array(
            'id'    => 'sport-support-hotline',
            'type'  => 'text',
            'title' => 'Số hotline'
        ),
    ),
)
);

//
// Cảm nhận khách hàng
//
CSF::createSection( $prefix, array(
        'id'    => 'option-sport-comment',
        'title' => 'Nhận xét khách hàng',
        'icon'  => 'fas fa-comments',
        'fields'=> array(
            array(
                'id'    => 'sport-comment-subtitle',
                'type'  => 'text',
                'title' => 'Tiêu đề phụ'
            ),
            array(
                'id'    => 'sport-comment-main-title',
                'type'  => 'text',
                'title' => 'Tiêu đề chính'
            ),
            array(
                'id'     => 'list-sport-comment',
                'type'   => 'repeater',
                'title'  => 'Danh sách nhận xét',
                'fields' => array(
                    array(
                        'id'    => 'comment-content',
                        'type'  => 'textarea',
                        'title' => 'Nội dung nhận xét'
                    ),
                    array(
                        'id'    => 'comment-name',
                        'type'  => 'text',
                        'title' => 'Tên'
                    ),
                    array(
                        'id'    => 'comment-desc',
                        'type'  => 'text',
                        'title' => 'mô tả'
                    ),
                    array(
                        'id'    => 'comment-image',
                        'type'  => 'media',
                        'title' => 'Hình ảnh'
                    ),

                ),
            ),
        ),
    )
);

//
// Chân trang
//
CSF::createSection( $prefix, array(
        'id'    => 'option-sport-setting',
        'title' => 'Thông tin chân trang',
        'icon'  => 'fas fa-copyright',
        'fields'=> array(
            array(
                'id'    => 'sport-footer-subtitle',
                'type'  => 'text',
                'title' => 'Tiêu đề phụ'
            ),
            array(
                'id'    => 'sport-footer-main-title',
                'type'  => 'text',
                'title' => 'Tiêu đề chính'
            ),
            array(
                'id'    => 'sport-footer-address',
                'type'  => 'text',
                'title' => 'Địa chỉ'
            ),
            array(
                'id'    => 'sport-footer-phone',
                'type'  => 'text',
                'title' => 'Số điện thoại'
            ),
            array(
                'id'    => 'sport-footer-email',
                'type'  => 'text',
                'title' => 'Email'
            ),
            array(
                'id'    => 'sport-footer-website',
                'type'  => 'text',
                'title' => 'Website'
            ),
        ),
    )
);