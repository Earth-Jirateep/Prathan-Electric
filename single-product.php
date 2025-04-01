<?php
/**
 * The template for displaying single product posts.
 *
 * @package Prathan Electric
 */

get_header(); 
?>

<main id="main" class="site-main">
    
    <section class="section-pagination">
        <div class="section-pagination-wrapper">
            <a href="<?php echo home_url(); ?>" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หน้าแรก</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>

            <?php
            // ดึงหมวดหมู่สินค้า (CPT: product_category)
            $product_category_id = get_post_meta(get_the_ID(), 'linked_product_category', true);
            $subcategory_id = get_post_meta(get_the_ID(), 'linked_subcategory', true);

            // ตรวจสอบว่ามีหมวดหมู่สินค้าไหม
            if ($product_category_id) {
                $category_link = get_permalink($product_category_id);
                $category_title = get_the_title($product_category_id);
                ?>
                <a href="<?php echo esc_url($category_link); ?>" class="section-pagination-paragraph-box">
                    <p class="section-pagination-paragraph"><?php echo esc_html($category_title); ?></p>
                </a>
                <div class="section-pagination-paragraph-box">
                    <p class="section-pagination-paragraph">/</p>
                </div>
            <?php } ?>

            <?php
            // ตรวจสอบว่ามีหมวดหมู่ย่อยไหม
            if ($subcategory_id) {
                $subcategory_link = get_permalink($subcategory_id);
                $subcategory_title = get_the_title($subcategory_id);
                ?>
                <a href="<?php echo esc_url($subcategory_link); ?>" class="section-pagination-paragraph-box">
                    <p class="section-pagination-paragraph"><?php echo esc_html($subcategory_title); ?></p>
                </a>
                <div class="section-pagination-paragraph-box">
                    <p class="section-pagination-paragraph">/</p>
                </div>
            <?php } ?>

            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph"><?php the_title(); ?></p>
            </div>
        </div>
    </section>


    <?php
    $product_data = get_product_data(get_the_ID());
    ?>

    <section class="section-single-product">
        <div class="section-single-product-wrapper">
            <div class="section-single-product-item-container">
                <div class="section-single-product-item-wrapper">
                    <div class="section-single-product-item-name-box">
                        <h1 class="section-single-product-item-name"><?php the_title(); ?></h1>
                    </div>

                    <div class="section-single-product-item-cover">
                        <div class="section-single-product-item-super-container">
                            <div class="section-single-product-item-super-wrapper">
                                <div id="swiper5" class="section-single-product-item-image-slide-container">
                                    <div class="product-image-display">
                                        <img id="product-main-image" src="<?php echo esc_url($product_data['product_main_image']); ?>" alt="Product Image">
                                    </div>

                                    <?php if (!empty($product_data['product_thumbnails'])) : ?>
                                        <div class="swiper swiper-thumbnails-5">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($product_data['product_thumbnails'] as $thumbnail) : ?>
                                                    <div class="swiper-slide">
                                                        <img src="<?php echo esc_url($thumbnail); ?>" alt="Thumbnail">
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <button class="section-single-product-item-image-slide-previous swiper5-button-prev">
                                        <span class="section-single-product-item-image-slide-previous-arrow"></span>
                                    </button>
                                    <button class="section-single-product-item-image-slide-next swiper5-button-next">
                                        <span class="section-single-product-item-image-slide-next-arrow"></span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="section-single-product-item-description-container">
                            <div class="section-single-product-item-description-wrapper">
                                <div class="section-single-product-item-description-header-box">
                                    <div class="section-single-product-item-description-header-paragraph-box">
                                        <p class="section-single-product-item-description-header-paragraph">ราคา</p>
                                    </div>
                                    <div class="section-single-product-item-description-header-price-box">
                                        <p class="section-single-product-item-description-header-price">
                                            <?php echo esc_html($product_data['product_price']); ?> บาท / <?php echo esc_html($product_data['product_unit']); ?>
                                        </p>
                                    </div>
                                </div>

                                <div class="section-single-product-item-description-data-container">
                                    <div class="section-single-product-item-description-data-wrapper">
                                        <div class="section-single-product-item-description-data-header-box">
                                            <p class="section-single-product-item-description-data-header">ข้อมูลสินค้า</p>
                                        </div>
                                        <div class="section-single-product-item-description-data-bottom-wrapper">
                                            <div class="section-single-product-item-description-data-bottom-box">
                                                <p class="section-single-product-item-description-data-bottom">ยี่ห้อ:</p>
                                                <p class="section-single-product-item-description-data-bottom-1"><?php echo esc_html($product_data['product_brand']); ?></p>
                                            </div>
                                            <div class="section-single-product-item-description-data-bottom-box">
                                                <p class="section-single-product-item-description-data-bottom">ประเภทสินค้า:</p> 
                                                <p class="section-single-product-item-description-data-bottom-1"><?php echo esc_html($product_data['product_type']); ?></p>
                                            </div>
                                            <div class="section-single-product-item-description-data-bottom-box">
                                                <p class="section-single-product-item-description-data-bottom">สี:</p>
                                                <p class="section-single-product-item-description-data-bottom-1"><?php echo esc_html($product_data['product_color']); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="section-single-product-item-remark-wrapper">
                                    <div class="section-single-product-item-remark-box">
                                        <ul>
                                            <li>ติดต่อฝ่ายขายผ่าน Line @prathan</li>
                                            <li>เวลาทำการ จันทร์-เสาร์ 08:00-17:00น</li>
                                            <li>หมายเหตุ: สินค้าบางตัวอาจจะมีการเปลี่ยนรุ่น ติดต่อพนักงานเพื่อเช็คก่อนสั่งซื้อ</li>
                                        </ul>
                                    </div>
                                </div>

                                <a href="https://page.line.me/cqv3387x" class="section-single-product-item-contact-line-box">
                                    <div class="section-single-product-item-contact-detail-box">
                                        <p class="section-single-product-item-contact-detail">สอบถามรายละเอียด</p>
                                    </div>
                                    <div class="section-single-product-item-contact-detail-image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/single-product/icon-line.png" alt="Line Contact">
                                    </div>
                                    <div class="section-single-product-item-contact-detail-line-box">
                                        <p class="section-single-product-item-contact-detail-line">แอดไลน์ @prathan</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="section-single-product-item-product-features-container">
                        <div class="section-single-product-item-product-features-wrapper">
                            <div class="section-single-product-item-product-features-header-box">
                                <p class="section-single-product-item-product-features-header">คุณสมบัติสินค้า</p>
                            </div>
                            <div class="section-single-product-item-product-features-description-wrapper">
                                <?php if (!empty($product_data['product_features'])) : ?>
                                    <?php foreach ($product_data['product_features'] as $feature) : ?>
                                        <div class="section-single-product-item-product-features-description-box">
                                            <p class="section-single-product-item-product-features-description">
                                                <?php echo esc_html($feature['feature_title']); ?>
                                            </p>
                                            <p class="section-single-product-item-product-features-description-1">
                                                <?php echo esc_html($feature['feature_value']); ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php wp_reset_postdata(); ?>

    <section class="section-content-footer">
        <div class="section-content-footer-wrapper">
            <div class="section-content-footer-header-box">
                <h2 class="section-content-footer-header">
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'footer_header', true)); ?>
                </h2>
            </div>
            <div class="section-content-footer-detail-box">
                <div class="section-content-footer-detail-parahraph">
                    <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'footer_detail_paragraph', true)); ?>
                </div>
                <!-- <div class="section-content-footer-detail-image">
                    <img src="<?php echo esc_url(get_post_meta(get_the_ID(), 'footer_detail_image', true)); ?>" alt="<?php bloginfo('name'); ?> Logo">
                </div>
                <h2 class="section-content-footer-detail-header-2">
                    <?php echo esc_html(get_post_meta(get_the_ID(), 'footer_detail_header_2', true)); ?>
                </h2>
                <p class="section-content-footer-detail-parahraph">
                    <?php echo wp_kses_post(get_post_meta(get_the_ID(), 'footer_detail_paragraph_2', true)); ?>
                </p>
                <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'footer_read_more_link', true)); ?>" class="section-content-footer-detail-read-more">
                    <p class="section-content-footer-detail-read-more-paragraph">อ่านเพิ่มเติม</p>
                </a> -->
            </div>

        </div>
    </section>

</main>

<?php
get_footer(); 
?>
