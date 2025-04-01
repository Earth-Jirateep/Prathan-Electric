<?php
/**
 * The template for displaying single brand posts.
 *
 * @package Prathan Electric
 */

get_header(); 
?>

<main id="main" class="site-main">

    <!-- Breadcrumb Section -->
    <section class="section-pagination">
        <div class="section-pagination-wrapper">
            <a href="<?php echo home_url(); ?>" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หน้าแรก</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="<?php echo site_url('product-brands'); ?>" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">แบรนด์ทั้งหมด</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph"><?php the_title(); ?></p>
            </div>
        </div>
    </section>

    <!-- Hero Section -->
    <section class="section-hero-page brand-prototype">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-image">
                    <?php 
                    // ดึงรูปจาก CMB2 ที่เก็บใน field 'brand_image'
                    $brand_image = get_post_meta(get_the_ID(), 'brand_image', true); 

                    if ($brand_image): ?>
                        <img src="<?php echo esc_url($brand_image); ?>" alt="<?php the_title(); ?>">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-brand/default-logo.png" alt="<?php bloginfo('name'); ?> Logo">
                    <?php endif; ?>
                </div>

                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    
    <?php
    // ดึง ID ของแบรนด์ที่กำลังดูอยู่
    $brand_id = get_the_ID();

    // คิวรี่สินค้า ที่มีแบรนด์นี้ถูกเลือกไว้
    $args = array(
        'post_type'      => 'product',
        'posts_per_page' => -1,
        'meta_query'     => array(
            array(
                'key'     => 'selected_brand', // คีย์ที่เก็บค่าแบรนด์ที่เลือกไว้ในสินค้า
                'value'   => $brand_id,       // ต้องตรงกับแบรนด์ที่กำลังดู
                'compare' => '='
            )
        )
    );

    $related_products = new WP_Query($args);
    ?>

    <div id="home-category-wrapper">
        <div class="section-our-products-item-more-information-container">
            <div class="section-our-products-item-more-information-wrapper">
                <?php if ($related_products->have_posts()) : ?>
                    <?php while ($related_products->have_posts()) : $related_products->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="section-our-products-item-more-information-box">
                            <div class="section-our-products-item-more-information-image">
                                <?php
                                // ดึงข้อมูลจาก Custom Field 'product_main_image'
                                $product_main_image = get_post_meta(get_the_ID(), 'product_main_image', true);
                                $default_image = get_template_directory_uri() . '/assets/images/default-product.png';

                                if (!empty($product_main_image)) {
                                    echo '<img src="' . esc_url($product_main_image) . '" alt="' . esc_attr(get_the_title()) . '">';
                                } else {
                                    echo '<img src="' . esc_url($default_image) . '" alt="Default Image">';
                                }
                                ?>
                            </div>
                            <div class="section-our-products-item-more-information-content">
                                <div class="section-our-products-item-more-information-content-name-box">
                                    <p class="section-our-products-item-more-information-content-name"><?php the_title(); ?></p>
                                </div>
                                <div class="section-our-products-item-more-information-content-detail-box">
                                    <p class="section-our-products-item-more-information-content-detail">
                                        <?php
                                        $footer_detail = get_post_meta(get_the_ID(), 'footer_detail_paragraph', true);
                                        echo wp_kses_post(wp_trim_words($footer_detail, 20, '...'));
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <!-- <p style="color: red;">❌ ไม่มีสินค้าที่เกี่ยวข้อง</p> -->
                <?php endif; ?>
            </div>
        </div>
    </div>



    <!-- Footer Section -->
    <section class="section-content-footer">
        <div class="section-content-footer-wrapper">
            <div class="section-content-footer-header-box">
                <h2 class="section-content-footer-header">
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'brand_footer_header', true)); ?>
                </h2>
            </div>
            <div class="section-content-footer-detail-box">
                <p class="section-content-footer-detail-parahraph">
                    <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'brand_footer_paragraph', true)); ?>
                </p>
                <!-- <div class="section-content-footer-detail-image">
                    <?php 
                    $footer_image = get_post_meta(get_the_ID(), 'brand_footer_image', true); 
                    if ($footer_image): ?>
                        <img src="<?php echo esc_url($footer_image); ?>" alt="<?php the_title(); ?> Footer Image">
                    <?php endif; ?>
                </div>
                <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'brand_footer_link', true)); ?>" class="section-content-footer-detail-read-more">
                    <p class="section-content-footer-detail-read-more-paragraph">อ่านเพิ่มเติม</p>
                </a> -->
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
