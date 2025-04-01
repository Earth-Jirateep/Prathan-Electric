<?php
function mytheme_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );


add_theme_support('post-thumbnails');
// ตั้งขนาดของ Thumbnail ถ้าจำเป็น (สามารถปรับขนาดได้)
set_post_thumbnail_size(800, 600, true); // กว้าง 800px, สูง 600px, true = crop ให้พอดี


// Enqueue styles and scripts
function mytheme_enqueue_styles() {
    // Enqueue the main stylesheets
    wp_enqueue_style( 'header-style', get_template_directory_uri() . '/assets/css/header.css' );
    wp_enqueue_style( 'footer-style', get_template_directory_uri() . '/assets/css/footer.css' );
    wp_enqueue_style( 'fonts-style', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_enqueue_style( 'swiper-style', get_template_directory_uri() . '/assets/css/swiper-style.css' );
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/css/home.css' );
    wp_enqueue_style( 'product-category-style', get_template_directory_uri() . '/assets/css/product-category.css' );
    wp_enqueue_style( 'product-category-prototype-style', get_template_directory_uri() . '/assets/css/product-category-prototype.css' );
    wp_enqueue_style( 'product-brands-style', get_template_directory_uri() . '/assets/css/product-brands.css' );
    wp_enqueue_style( 'product-brands-prototype-style', get_template_directory_uri() . '/assets/css/product-brands-prototype.css' );
    wp_enqueue_style( 'single-product-style', get_template_directory_uri() . '/assets/css/single-product.css' );
    wp_enqueue_style( 'article-style', get_template_directory_uri() . '/assets/css/article.css' );
    wp_enqueue_style( 'single-article-style', get_template_directory_uri() . '/assets/css/single-article.css' );
    wp_enqueue_style( 'contact-us-style', get_template_directory_uri() . '/assets/css/contact-us.css' );
    wp_enqueue_style( '404-style', get_template_directory_uri() . '/assets/css/404.css' );

    // Enqueue Swiper CSS
    wp_enqueue_style( 'swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null );

    // Enqueue the JavaScript files
    wp_enqueue_script( 'swiper-script', get_template_directory_uri() . '/assets/js/swiper-script.js', array(), null, true );
    wp_enqueue_script( 'header-script', get_template_directory_uri() . '/assets/js/header.js', array(), null, true );
    wp_enqueue_script( 'home-script', get_template_directory_uri() . '/assets/js/home.js', array(), null, true );
    wp_enqueue_script( 'brands-script', get_template_directory_uri() . '/assets/js/brands.js', array(), null, true );
    

    // Enqueue Swiper JS
    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );


function register_my_menus() {
    register_nav_menu('prathan-electric-menu', __('Prathan Electric Menu'));
}
add_action('init', 'register_my_menus');


function register_product_category_cpt() {
    $labels = array(
        'name'               => 'หมวดหมู่สินค้า',
        'singular_name'      => 'หมวดหมู่สินค้า',
        'menu_name'          => 'หมวดหมู่สินค้า',
        'add_new'            => 'เพิ่มหมวดหมู่สินค้าใหม่',
        'add_new_item'       => 'เพิ่มหมวดหมู่สินค้าใหม่',
        'edit_item'          => 'แก้ไขหมวดหมู่สินค้า',
        'new_item'           => 'หมวดหมู่สินค้าใหม่',
        'view_item'          => 'ดูหมวดหมู่สินค้า',
        'search_items'       => 'ค้นหาหมวดหมู่สินค้า',
        'not_found'          => 'ไม่พบหมวดหมู่สินค้า',
        'not_found_in_trash' => 'ไม่พบหมวดหมู่สินค้าในถังขยะ'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => ''),
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-category',
    );

    register_post_type('product_category', $args);
}
add_action('init', 'register_product_category_cpt');


function register_product_category_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_category_metabox',
        'title'         => 'เลือกหมวดหมู่สินค้า',
        'object_types'  => array('product'), // ใช้กับ CPT: product
    ));

    // ดึงหมวดหมู่สินค้าทั้งหมดจาก CPT 'product_category'
    $product_categories = get_posts(array(
        'post_type'      => 'product_category',
        'posts_per_page' => -1,
    ));

    $options = array();
    foreach ($product_categories as $category) {
        $options[$category->ID] = $category->post_title;
    }

    $cmb->add_field(array(
        'name'    => 'เลือกหมวดหมู่สินค้า',
        'id'      => 'linked_product_category',
        'type'    => 'select',
        'options' => $options,
    ));
}
add_action('cmb2_admin_init', 'register_product_category_metabox');


function register_product_category_image_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_category_image_metabox',
        'title'         => 'ตั้งค่ารูปภาพหมวดหมู่',
        'object_types'  => array('product_category'), // ใช้กับ CPT: product_category
    ));

    $cmb->add_field(array(
        'name' => 'รูปภาพหมวดหมู่',
        'id'   => 'product_category_image',
        'type' => 'file',
        'options' => array(
            'url' => false, // ไม่ให้ใส่ URL เอง
        ),
        'preview_size' => 'medium', // ตั้งค่าขนาดพรีวิวรูปภาพ
    ));
}
add_action('cmb2_admin_init', 'register_product_category_image_metabox');


function register_product_category_order_metabox() {
    $prefix = 'product_category_';

    $cmb = new_cmb2_box( array(
        'id'            => 'product_category_order_metabox',
        'title'         => 'การจัดลำดับหมวดหมู่สินค้า',
        'object_types'  => array( 'product_category' ), // ใช้กับ CPT: product_category
    ) );

    $cmb->add_field( array(
        'name' => 'ลำดับการแสดงผล',
        'id'   => $prefix . 'order',
        'type' => 'text_small',
        'desc' => 'ใส่ตัวเลขเพื่อลำดับการแสดงผล (ตัวเลขน้อยจะอยู่ข้างบน)',
        'default' => 0,
    ) );
}
add_action( 'cmb2_admin_init', 'register_product_category_order_metabox' );


function register_subcategory_cpt() {
    $labels = array(
        'name'               => 'หมวดหมู่ย่อย',
        'singular_name'      => 'หมวดหมู่ย่อย',
        'menu_name'          => 'หมวดหมู่ย่อย',
        'add_new'            => 'เพิ่มหมวดหมู่ย่อยใหม่',
        'add_new_item'       => 'เพิ่มหมวดหมู่ย่อยใหม่',
        'edit_item'          => 'แก้ไขหมวดหมู่ย่อย',
        'new_item'           => 'หมวดหมู่ย่อยใหม่',
        'view_item'          => 'ดูหมวดหมู่ย่อย',
        'search_items'       => 'ค้นหาหมวดหมู่ย่อย',
        'not_found'          => 'ไม่พบหมวดหมู่ย่อย',
        'not_found_in_trash' => 'ไม่พบหมวดหมู่ย่อยในถังขยะ'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'publicly_queryable' => true,
        'rewrite'            => array(
            'slug' => 'product-categories', // ใช้ชื่อของหมวดหมู่ย่อยเป็น slug
            'with_front' => false
        ),
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-list-view',
    );

    register_post_type('subcategory', $args);
}
add_action('init', 'register_subcategory_cpt');





function register_subcategory_link_metabox() {
    $prefix = 'subcategory_';

    $cmb = new_cmb2_box( array(
        'id'            => 'subcategory_link_metabox',
        'title'         => 'ตั้งค่าหมวดหมู่ย่อย',
        'object_types'  => array( 'subcategory' ),
    ) );

    // ฟิลด์สำหรับจัดลำดับ
    $cmb->add_field( array(
        'name'    => 'ลำดับการแสดงผล',
        'id'      => $prefix . 'order',
        'type'    => 'text_small',
        'desc'    => 'ใส่ตัวเลขเพื่อลำดับการแสดงผล',
        'default' => 0,
    ));

    // ฟิลด์สำหรับลิงก์
    $cmb->add_field( array(
        'name' => 'ลิงก์ไปยังหน้าสินค้า',
        'id'   => $prefix . 'link',
        'type' => 'text_url',
        'desc' => 'ใส่ URL ของหน้าสินค้าที่เกี่ยวข้องกับหมวดหมู่ย่อยนี้',
    ));
}
add_action( 'cmb2_admin_init', 'register_subcategory_link_metabox' );


function register_brand_cpt() {
    $labels = array(
        'name'               => 'แบรนด์',
        'singular_name'      => 'แบรนด์',
        'menu_name'          => 'แบรนด์',
        'name_admin_bar'     => 'แบรนด์',
        'add_new'            => 'เพิ่มใหม่',
        'add_new_item'       => 'เพิ่มแบรนด์ใหม่',
        'new_item'           => 'แบรนด์ใหม่',
        'edit_item'          => 'แก้ไขแบรนด์',
        'view_item'          => 'ดูแบรนด์',
        'all_items'          => 'แบรนด์ทั้งหมด',
        'search_items'       => 'ค้นหาแบรนด์',
        'not_found'          => 'ไม่พบแบรนด์',
        'not_found_in_trash' => 'ไม่พบแบรนด์ในถังขยะ'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'brand'),
        'supports'           => array('title', 'thumbnail'),
        'menu_icon'          => 'dashicons-tag',
        'show_in_rest'       => true
    );

    register_post_type('brand', $args);
}
add_action('init', 'register_brand_cpt');


function register_brand_meta_boxes() {
    $cmb = new_cmb2_box(array(
        'id'            => 'brand_metabox',
        'title'         => __('Brand Information', 'cmb2'),
        'object_types'  => array('brand'),
    ));

    $cmb->add_field(array(
        'name' => 'Brand Image',
        'id'   => 'brand_image',
        'type' => 'file',
        'options' => array(
            'url' => false,
        ),
        'preview_size' => 'medium',
    ));

    $cmb->add_field(array(
        'name' => 'Brand Name',
        'id'   => 'brand_name',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Brand Order',
        'id'   => 'brand_order',
        'type' => 'text_small',
        'desc' => 'ใส่ตัวเลขเพื่อเรียงลำดับแบรนด์ (เช่น 1, 2, 3...)',
    ));

    // เพิ่มฟิลด์สำหรับ Footer Section
    $cmb->add_field(array(
        'name' => 'Footer Header',
        'id'   => 'brand_footer_header',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Footer Paragraph',
        'id'   => 'brand_footer_paragraph',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ));

} 
add_action('cmb2_admin_init', 'register_brand_meta_boxes');



function get_brands($limit = -1) {
    $args = array(
        'post_type'      => 'brand',
        'posts_per_page' => $limit, 
        'meta_key'       => 'brand_order',
        'orderby'        => 'meta_value_num',
        'order'          => 'ASC'
    );

    $query = new WP_Query($args);
    $brands = array();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            $brands[] = array(
                'permalink'   => get_permalink(),
                'brand_image' => get_post_meta(get_the_ID(), 'brand_image', true),
                'brand_name'  => get_post_meta(get_the_ID(), 'brand_name', true) ?: get_the_title(),
                'brand_order' => get_post_meta(get_the_ID(), 'brand_order', true)
            );
        endwhile;
        wp_reset_postdata();
    endif;

    return $brands;
}
add_action('cmb2_admin_init', 'register_brand_meta_boxes');


function register_product_cpt() {
    $labels = array(
        'name'               => 'สินค้า',
        'singular_name'      => 'สินค้า',
        'menu_name'          => 'สินค้า',
        'name_admin_bar'     => 'สินค้า',
        'add_new'            => 'เพิ่มสินค้าใหม่',
        'add_new_item'       => 'เพิ่มสินค้าใหม่',
        'new_item'           => 'สินค้าใหม่',
        'edit_item'          => 'แก้ไขสินค้า',
        'view_item'          => 'ดูสินค้า',
        'all_items'          => 'สินค้าทั้งหมด',
        'search_items'       => 'ค้นหาสินค้า',
        'not_found'          => 'ไม่พบสินค้า',
        'not_found_in_trash' => 'ไม่พบสินค้าในถังขยะ'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'products'),
        'supports'           => array('title', 'thumbnail'),
        'menu_icon'          => 'dashicons-cart',
        'show_in_rest'       => true
    );

    register_post_type('product', $args);
}
add_action('init', 'register_product_cpt');


function register_product_meta_boxes() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_metabox',
        'title'         => __('ข้อมูลสินค้า', 'cmb2'),
        'object_types'  => array('product'), // กำหนดให้ใช้กับ CPT 'product'
    ));

    // รูปภาพหลักของสินค้า
    $cmb->add_field(array(
        'name' => 'รูปภาพหลัก',
        'id'   => 'product_main_image',
        'type' => 'file',
        'options' => array(
            'url' => false, // ซ่อนช่องกรอก URL
        ),
        'preview_size' => array(300, 300), // ขนาดพรีวิวรูปภาพ
    ));

    // รูปภาพย่อยแบบ Group Field (Repeater)
    $group_field_id = $cmb->add_field(array(
        'id'          => 'product_thumbnails_group',
        'type'        => 'group',
        'description' => __('เพิ่มรูปภาพย่อยหลายรูป', 'cmb2'),
        'options'     => array(
            'group_title'   => __('รูปภาพย่อย {#}', 'cmb2'), // {#} จะเป็นลำดับของรูปภาพ
            'add_button'    => __('เพิ่มรูปภาพย่อยใหม่', 'cmb2'),
            'remove_button' => __('ลบรูปภาพย่อย', 'cmb2'),
            'sortable'      => true, // สามารถลากเรียงลำดับได้
        ),
    ));

    $cmb->add_group_field($group_field_id, array(
        'name' => 'รูปภาพย่อย',
        'id'   => 'thumbnail_image',
        'type' => 'file',
        'options' => array(
            'url' => false, // ซ่อนช่องกรอก URL
        ),
        'preview_size' => array(100, 100), // ขนาดพรีวิวรูปภาพย่อย
    ));

    // ราคาสินค้า
    $cmb->add_field(array(
        'name'        => 'ราคา',
        'id'          => 'product_price',
        'type'        => 'text',
        'after_field' => ' บาท',  // แสดงหน่วยเป็นบาท
        'attributes'  => array(
            'type' => 'number',
            'step' => '0.01',
            'min'  => '0',
        ),
    ));

    // หน่วยสินค้า (เช่น ชิ้น, กล่อง)
    $cmb->add_field(array(
        'name' => 'หน่วย',
        'id'   => 'product_unit',
        'type' => 'text',
    ));

    // ยี่ห้อสินค้า
    $cmb->add_field(array(
        'name' => 'ยี่ห้อ',
        'id'   => 'product_brand',
        'type' => 'text',
    ));

    // ประเภทสินค้า
    $cmb->add_field(array(
        'name' => 'ประเภทสินค้า',
        'id'   => 'product_type',
        'type' => 'text',
    ));

    // สีของสินค้า
    $cmb->add_field(array(
        'name' => 'สี',
        'id'   => 'product_color',
        'type' => 'text',
    ));

    // คุณสมบัติของสินค้าแบบ Group Field
    $features_group_id = $cmb->add_field(array(
        'name'        => 'คุณสมบัติสินค้า',
        'id'          => 'product_features',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => 'คุณสมบัติ {#}',  // {#} จะเป็นลำดับ
            'add_button'    => 'เพิ่มคุณสมบัติ',
            'remove_button' => 'ลบคุณสมบัติ',
            'sortable'      => true,
        ),
    ));

    $cmb->add_group_field($features_group_id, array(
        'name' => 'หัวข้อคุณสมบัติ',
        'id'   => 'feature_title',
        'type' => 'text',
    ));

    $cmb->add_group_field($features_group_id, array(
        'name' => 'รายละเอียดคุณสมบัติ',
        'id'   => 'feature_value',
        'type' => 'text',
    ));
}
add_action('cmb2_admin_init', 'register_product_meta_boxes');


function get_product_data($post_id) {
    // ดึงข้อมูล Group Field ของรูปภาพย่อย (unserialized)
    $product_thumbnails_group = get_post_meta($post_id, 'product_thumbnails_group', true);

    $product_thumbnails = array();
    if (!empty($product_thumbnails_group)) {
        foreach ($product_thumbnails_group as $group_item) {
            if (!empty($group_item['thumbnail_image'])) {
                $product_thumbnails[] = $group_item['thumbnail_image'];
            }
        }
    }

    // ดึงข้อมูลคุณสมบัติสินค้า
    $product_features_group = get_post_meta($post_id, 'product_features', true);
    $product_features = array();
    if (!empty($product_features_group)) {
        foreach ($product_features_group as $feature_item) {
            $product_features[] = array(
                'feature_title' => isset($feature_item['feature_title']) ? $feature_item['feature_title'] : '',
                'feature_value' => isset($feature_item['feature_value']) ? $feature_item['feature_value'] : '',
            );
        }
    }

    return array(
        'product_main_image'  => get_post_meta($post_id, 'product_main_image', true),
        'product_thumbnails'  => $product_thumbnails,  // ใช้ข้อมูลที่แปลงแล้ว
        'product_price'       => get_post_meta($post_id, 'product_price', true),
        'product_unit'        => get_post_meta($post_id, 'product_unit', true),
        'product_brand'       => get_post_meta($post_id, 'product_brand', true),
        'product_type'        => get_post_meta($post_id, 'product_type', true),
        'product_color'       => get_post_meta($post_id, 'product_color', true),
        'product_features'    => $product_features,  // ใช้ข้อมูลที่แปลงแล้ว
    );
}


function register_product_footer_meta_boxes() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_footer_metabox',
        'title'         => __('ข้อมูลท้ายหน้า', 'cmb2'),
        'object_types'  => array('product'),
    ));

    $cmb->add_field(array(
        'name' => 'หัวข้อท้ายหน้า',
        'id'   => 'footer_header',
        'type' => 'text',
    ));

    $cmb->add_field( array(
        'name'    => 'รายละเอียดส่วนท้าย',
        'id'      => 'footer_detail_paragraph',
        'type'    => 'wysiwyg', // รองรับการใส่ HTML
        'options' => array(
            'textarea_rows' => 5,
            'media_buttons' => false,
        ),
    ) );

}
add_action('cmb2_admin_init', 'register_product_footer_meta_boxes');


function register_product_category_footer_metabox() {
    $prefix = 'footer_'; // กำหนด prefix สำหรับฟิลด์

    $cmb = new_cmb2_box( array(
        'id'            => 'product_category_footer_metabox',
        'title'         => 'ตั้งค่าข้อมูลส่วนท้าย (Footer)',
        'object_types'  => array( 'product_category' ), // ใช้กับ CPT: product_category
    ) );

    // ฟิลด์สำหรับ Header
    $cmb->add_field( array(
        'name' => 'หัวข้อส่วนท้าย',
        'id'   => $prefix . 'header',
        'type' => 'text',
    ) );

    // ฟิลด์สำหรับ Paragraph แรก (ใช้ WYSIWYG Editor)
    $cmb->add_field( array(
        'name' => 'รายละเอียดส่วนท้าย (ย่อหน้าแรก)',
        'id'   => $prefix . 'detail_paragraph',
        'type' => 'wysiwyg', // ใช้ Editor แบบ WYSIWYG
    ) );

}
add_action( 'cmb2_admin_init', 'register_product_category_footer_metabox' );


function register_subcategory_footer_metabox() {
    $prefix = 'subcategory_footer_';

    $cmb = new_cmb2_box( array(
        'id'            => 'subcategory_footer_metabox',
        'title'         => 'ตั้งค่าฟุตเตอร์สำหรับหมวดหมู่ย่อย',
        'object_types'  => array( 'subcategory' ), // ใช้กับ Custom Post Type "subcategory"
    ) );

    $cmb->add_field( array(
        'name' => 'หัวข้อฟุตเตอร์',
        'id'   => $prefix . 'header',
        'type' => 'text',
    ) );

    $cmb->add_field( array(
        'name' => 'รายละเอียดฟุตเตอร์ (ย่อหน้าแรก)',
        'id'   => $prefix . 'detail_paragraph',
        'type' => 'wysiwyg',
        'options' => array(
            'textarea_rows' => 5,
        ),
    ) );

}
add_action( 'cmb2_admin_init', 'register_subcategory_footer_metabox' );


function register_subcategory_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'subcategory_metabox',
        'title'         => 'ตั้งค่าหมวดหมู่ย่อย',
        'object_types'  => array('subcategory'),
    ));

    // ดึงหมวดหมู่สินค้าทั้งหมดจาก CPT 'product_category'
    $product_categories = get_posts(array(
        'post_type'      => 'product_category',
        'posts_per_page' => -1,
    ));

    $options = array(
        '' => 'ไม่มีหมวดหมู่ย่อย' // เพิ่มตัวเลือก "ไม่มีหมวดหมู่" ไว้ที่ด้านบน
    );

    foreach ($product_categories as $category) {
        $options[$category->ID] = $category->post_title;
    }

    $cmb->add_field(array(
        'name'    => 'เลือกหมวดหมู่สินค้า',
        'id'      => 'linked_product_category',
        'type'    => 'select',
        'options' => $options,
        'default' => '', // กำหนดให้ "ไม่มีหมวดหมู่" เป็นค่าเริ่มต้น
    ));
}
add_action('cmb2_admin_init', 'register_subcategory_metabox');



function update_product_category_term_on_title_change($post_id) {
    if (get_post_type($post_id) != 'product_category') {
        return;
    }

    $post_title = get_the_title($post_id);
    $term = get_term_by('slug', sanitize_title($post_title), 'product_category');

    if ($term) {
        wp_update_term($term->term_id, 'product_category', array(
            'name' => $post_title
        ));
    }
}
add_action('save_post', 'update_product_category_term_on_title_change');


function register_faq_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'faq_metabox',
        'title'         => 'คำถามที่พบบ่อย (FAQ)',
        'object_types'  => array('page'), // ใช้กับหน้าเพจ
        'show_on'       => array('key' => 'page-template', 'value' => 'template-home.php'), // ใช้เฉพาะหน้า Home
    ));

    $faq_group = $cmb->add_field(array(
        'id'          => 'faq_group',
        'type'        => 'group',
        'description' => 'เพิ่มคำถามและคำตอบที่พบบ่อย',
        'options'     => array(
            'group_title'   => 'คำถามที่ {#}',
            'add_button'    => 'เพิ่มคำถาม',
            'remove_button' => 'ลบคำถาม',
            'sortable'      => true,
        ),
    ));

    // คำถาม (Question)
    $cmb->add_group_field($faq_group, array(
        'name' => 'คำถาม',
        'id'   => 'faq_question',
        'type' => 'text',
    ));

    // คำตอบ (Answer)
    $cmb->add_group_field($faq_group, array(
        'name' => 'คำตอบ',
        'id'   => 'faq_answer',
        'type' => 'textarea_small',
    ));
}
add_action('cmb2_admin_init', 'register_faq_metabox');


function register_product_brand_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_brand_footer_metabox',
        'title'         => 'ตั้งค่าหน้าแบรนด์สินค้า',
        'object_types'  => array('page'), // ใช้กับเพจเท่านั้น
        'show_on'       => array('key' => 'page-template', 'value' => 'template-product-brands.php'), // ใช้เฉพาะหน้า template-product-brand.php
    ));

    // ฟิลด์สำหรับส่วนหัว
    $cmb->add_field(array(
        'name' => 'หัวข้อส่วนท้าย',
        'id'   => 'brand_footer_header',
        'type' => 'text',
    ));

    // ฟิลด์สำหรับเนื้อหาส่วนท้าย
    $cmb->add_field(array(
        'name' => 'เนื้อหาส่วนท้าย',
        'id'   => 'brand_footer_paragraph',
        'type' => 'wysiwyg', // รองรับการใส่ HTML และจัดรูปแบบ
        'options' => array(
            'textarea_rows' => 6,
            'media_buttons' => false,
        ),
    ));
}
add_action('cmb2_admin_init', 'register_product_brand_metabox');


function register_product_subcategory_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_subcategory_metabox',
        'title'         => 'เลือกหมวดหมู่ย่อย',
        'object_types'  => array('product'), // ✅ ใช้กับ CPT "product"
    ));

    // ดึงหมวดหมู่ย่อยทั้งหมดจาก CPT 'subcategory'
    $subcategories = get_posts(array(
        'post_type'      => 'subcategory',
        'posts_per_page' => -1,
    ));

    $options = array(
        '' => 'ไม่มีหมวดหมู่ย่อย' // เพิ่มตัวเลือก "ไม่มีหมวดหมู่ย่อย" ไว้ที่ด้านบน
    );

    foreach ($subcategories as $subcategory) {
        $options[$subcategory->ID] = $subcategory->post_title;
    }

    $cmb->add_field(array(
        'name'    => 'เลือกหมวดหมู่ย่อย',
        'id'      => 'linked_subcategory',
        'type'    => 'select',
        'options' => $options,
        'default' => '', // กำหนดให้ "ไม่มีหมวดหมู่ย่อย" เป็นค่าเริ่มต้น
    ));
}
add_action('cmb2_admin_init', 'register_product_subcategory_metabox');



function register_product_brand_selection_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_brand_selection_metabox',
        'title'         => 'เลือกแบรนด์สำหรับสินค้า',
        'object_types'  => array('product'),
    ));

    // ดึงแบรนด์ทั้งหมดจาก CPT 'brand'
    $brands = get_posts(array(
        'post_type'      => 'brand',
        'posts_per_page' => -1,
    ));

    $brand_options = array();
    foreach ($brands as $brand) {
        $brand_options[$brand->ID] = $brand->post_title;
    }

    // เพิ่มฟิลด์ให้เลือกแบรนด์
    $cmb->add_field(array(
        'name'    => 'เลือกแบรนด์สินค้า',
        'id'      => 'selected_brand',
        'type'    => 'select',
        'options' => $brand_options,
        'show_in_rest' => true, // ✅ เปิดให้ REST API รองรับ
    ));
}
add_action('cmb2_admin_init', 'register_product_brand_selection_metabox');


// 1️⃣ เพิ่มคอลัมน์ใหม่ให้ CPT: product
function add_product_custom_columns($columns) {
    $columns['product_category'] = 'หมวดหมู่สินค้า';
    $columns['subcategory'] = 'หมวดหมู่ย่อย';
    $columns['brand'] = 'แบรนด์';
    return $columns;
}
add_filter('manage_product_posts_columns', 'add_product_custom_columns');

// 2️⃣ แสดงค่าที่เลือกในคอลัมน์
function display_product_custom_columns($column, $post_id) {
    if ($column == 'product_category') {
        $category_id = get_post_meta($post_id, 'linked_product_category', true);
        if ($category_id) {
            echo '<a href="' . get_edit_post_link($category_id) . '">' . get_the_title($category_id) . '</a>';
        } else {
            echo '❌ ไม่มีหมวดหมู่';
        }
    }

    if ($column == 'subcategory') {
        $subcategory_id = get_post_meta($post_id, 'linked_subcategory', true);
        if ($subcategory_id) {
            echo '<a href="' . get_edit_post_link($subcategory_id) . '">' . get_the_title($subcategory_id) . '</a>';
        } else {
            echo '❌ ไม่มีหมวดหมู่ย่อย';
        }
    }

    if ($column == 'brand') {
        // 🛠 **แก้ไขจุดนี้ให้ใช้ `selected_brand`**
        $brand_id = get_post_meta($post_id, 'selected_brand', true);
        if ($brand_id) {
            echo '<a href="' . get_edit_post_link($brand_id) . '">' . get_the_title($brand_id) . '</a>';
        } else {
            echo '❌ ไม่มีแบรนด์';
        }
    }
}
add_action('manage_product_posts_custom_column', 'display_product_custom_columns', 10, 2);


// 3️⃣ ปรับให้สามารถ Sort คอลัมน์ได้
function product_custom_columns_sortable($columns) {
    $columns['product_category'] = 'product_category';
    $columns['subcategory'] = 'subcategory';
    $columns['brand'] = 'brand';
    return $columns;
}
add_filter('manage_edit-product_sortable_columns', 'product_custom_columns_sortable');


function custom_post_rewrite_rules() {
    add_rewrite_rule('article/([^/]+)/?$', 'index.php?name=$matches[1]&post_type=post', 'top');
}
add_action('init', 'custom_post_rewrite_rules');


function custom_post_permalink($permalink, $post) {
    if ($post->post_type === 'post') {
        return home_url('/article/' . $post->post_name . '/');
    }
    return $permalink;
}
add_filter('post_link', 'custom_post_permalink', 10, 2);


function register_contact_request_cpt() {
    $labels = array(
        'name'          => 'แบบฟอร์มติดต่อ',
        'singular_name' => 'คำขอ',
        'menu_name'     => 'ข้อมูลติดต่อ',
        'add_new'       => 'เพิ่มข้อมูลใหม่',
        'add_new_item'  => 'เพิ่มคำขอใหม่',
        'edit_item'     => 'แก้ไขคำขอ',
        'new_item'      => 'คำขอใหม่',
        'view_item'     => 'ดูคำขอ',
        'search_items'  => 'ค้นหาคำขอ',
        'not_found'     => 'ไม่พบข้อมูล',
        'not_found_in_trash' => 'ไม่มีข้อมูลในถังขยะ'
    );

    $args = array(
        'labels'        => $labels,
        'public'        => false,
        'show_ui'       => true,
        'supports'      => array('title'),
        'menu_icon'     => 'dashicons-email',
    );

    register_post_type('contact_request', $args);
}
add_action('init', 'register_contact_request_cpt');


function add_contact_request_columns($columns) {
    $columns['phone'] = 'เบอร์โทร';
    $columns['email'] = 'อีเมลล์';
    $columns['line_id'] = 'ID Line';
    return $columns;
}
add_filter('manage_contact_request_posts_columns', 'add_contact_request_columns');


function display_contact_request_columns($column, $post_id) {
    if ($column == 'phone') {
        echo esc_html(get_post_meta($post_id, 'phone', true));
    }
    if ($column == 'email') {
        echo esc_html(get_post_meta($post_id, 'email', true));
    }
    if ($column == 'line_id') {
        echo esc_html(get_post_meta($post_id, 'line_id', true));
    }
}
add_action('manage_contact_request_posts_custom_column', 'display_contact_request_columns', 10, 2);


function register_product_category_template_metabox() {
    $cmb = new_cmb2_box(array(
        'id'            => 'product_category_template_metabox',
        'title'         => 'ตั้งค่าข้อมูลส่วนท้าย (Footer)',
        'object_types'  => array('page'), // ใช้กับหน้าเพจ
        'show_on'       => array('key' => 'page-template', 'value' => 'template-product-category.php'), // ใช้เฉพาะ template-product-category.php
    ));

    $cmb->add_field(array(
        'name' => 'หัวข้อส่วนท้าย',
        'id'   => 'footer_header',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'รายละเอียดส่วนท้าย',
        'id'   => 'footer_detail_paragraph',
        'type' => 'wysiwyg', // รองรับ HTML และจัดรูปแบบข้อความ
        'options' => array(
            'textarea_rows' => 5,
            'media_buttons' => false,
        ),
    ));
}
add_action('cmb2_admin_init', 'register_product_category_template_metabox');




?>