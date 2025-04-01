<?php
/**
 * Template Name: Product Sub Category Protyotype 1
 * Description: A custom home page template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
    
    <section class="section-pagination">
        <div class="section-pagination-wrapper">
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หน้าแรก</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หมวดหมู่สินค้า</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">สายไฟ สายสัญญาณ</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">สายไฟ THW IEC01</p>
            </a>
        </div>
    </section>

    <section class="section-hero-page">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header">สายไฟ THW IEC01</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content-after-hero-page">
        <div class="section-content-after-hero-page-wrapper">
            <div class="section-content-after-hero-page-header-box">
                <h2 class="section-content-after-hero-page-header">อุปกรณ์ไฟฟ้าครบครัน<br class="m"> ซื้อได้ในที่เดียว</h2>
            </div>
            <div class="section-content-after-hero-page-paragraph-box">
                <p class="section-content-after-hero-page-paragraph">จำหน่าย อุปกรณ์ไฟฟ้าโรงงาน อุปกรณ์ไฟฟ้าในบ้าน อุปกรณ์งานระบบไฟฟ้าทุกชนิด สายไฟ ตู้ไฟ ท่อไฟ โคมไฟ สวิทช์ไฟ เบรกเกอร์ ขายส่ง อุปกรณ์ไฟฟ้า หลายยี่ห้อ สินค้าดี มีคุณภาพ ตัวแทนจำหน่ายอุปกรณ์ไฟฟ้าหลายยี่ห้อ มีหน้าร้าน ตั้งอยู่ที่ ปากซอย 67 ถนนพระราม2</p>
            </div>
        <div>
    </section>

    <section class="section-our-products background-white">
        <div class="section-our-products-wrapper">
            
            <div class="section-our-products-item-container">
                <div class="section-our-products-item-header-box">
                    <h2 class="section-our-products-item-header">เลือกหมวดหมู่ย่อย</h2>
                </div>

                <?php
                $args = array(
                    'post_type'      => 'subcategory',
                    'posts_per_page' => -1, // ดึงข้อมูลทั้งหมด
                    'meta_key'       => 'subcategory_order', // ระบุ Meta Key สำหรับจัดลำดับ
                    'orderby'        => 'meta_value_num',    // จัดเรียงตามตัวเลข
                    'order'          => 'ASC'                // เรียงจากน้อยไปมาก
                );
                $query = new WP_Query($args);
                ?>

                <div id="swiper4" class="section-our-products-item-select-container product-category-prototype swiper">
                    <div class="section-our-products-item-select-wrapper product-category-prototype swiper-wrapper">

                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); 
                                // ดึงลิงก์จาก Custom Field
                                $link = get_post_meta(get_the_ID(), 'subcategory_link', true); 
                            ?>
                                <a href="<?php echo esc_url($link ? $link : '#'); ?>" class="section-our-products-item-select-box product-category-prototype swiper-slide">
                                    <p class="section-our-products-item-select-paragraph"><?php the_title(); ?></p>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>

                    </div>

                    <div class="swiper4-progressbar">
                        <div class="swiper4-progressbar-fill"></div>
                    </div>
                </div>

                
                <button class="section-our-products-arrow-previous product-category-prototype swiper4-button-prev">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </button>
                <button class="section-our-products-arrow-next product-category-prototype swiper4-button-next">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </button>

                <div class="section-find-products-box">
                    <p class="section-find-products-paragraph">ค้นพบสินค้า 26 ชิ้น</p>
                </div>

                <div id="home-category-wrapper" data-default-category="สายไฟ THW IEC01">

                    <div class="section-our-products-item-more-information-container" data-category="สายไฟ THW IEC01">
                        <div class="section-our-products-item-more-information-wrapper">
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>

                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="section-our-products-item-more-information-container" data-category="สายไฟ THW IEC02">
                        <div class="section-our-products-item-more-information-wrapper">
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="<?php echo site_url('/single-product-prototype/'); ?>" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="section-our-products-item-more-information-container" data-category="สายไฟ THW IEC03">
                        <div class="section-our-products-item-more-information-wrapper">
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">NANO-201G บล็อกกันน้ำ 2×4 เทา</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">กล่องพักสาย เหลี่ยม 4×4″” รู 3/8″”ถึง3/4″” สีเหลือง”</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-4.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">AK US-1006SL CAT6 RJ45 เต้ารับแลน LAN ตัวเมียสีขาว</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                            <a href="#" class="section-our-products-item-more-information-box">
                                <div class="section-our-products-item-more-information-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/our-product/image-product-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                </div>
                                <div class="section-our-products-item-more-information-content">
                                    <div class="section-our-products-item-more-information-content-name-box">
                                        <p class="section-our-products-item-more-information-content-name">OT คอนดูทบอดี้ 1″” SC.</p>
                                    </div>
                                    <div class="section-our-products-item-more-information-content-detail-box">
                                        <p class="section-our-products-item-more-information-content-detail">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม </p>
                                    </div>
                                    <!-- <a href="#" class="section-our-products-item-more-information-content-button">
                                        <p class="section-our-products-item-more-information-content-button-paragraph">ดูข้อมูลเพิ่มเติม</p>
                                    </a> -->
                                </div>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="section-our-products-item-more-information-pagination-wrapper">
                    <div class="section-our-products-item-more-information-pagination-list">
                        <p class="section-our-products-item-more-information-pagination-list-paragraph">แสดงผล <span>1 ถึง 12</span> จาก 100 รายการ</p>
                    </div>
                    <div class="section-our-products-item-more-information-pagination-page">
                        <div class="section-our-products-item-more-information-pagination-page-two-arrow-left"></div>
                        <div class="section-our-products-item-more-information-pagination-page-one-arrow-left"></div>
                        <div class="section-our-products-item-more-information-pagination-page-numbers active">1</div>
                        <div class="section-our-products-item-more-information-pagination-page-numbers">2</div>
                        <div class="section-our-products-item-more-information-pagination-page-numbers">3</div>
                        <div class="section-our-products-item-more-information-pagination-page-numbers">...</div>
                        <div class="section-our-products-item-more-information-pagination-page-numbers">57</div>
                        <div class="section-our-products-item-more-information-pagination-page-numbers">58</div>
                        <div class="section-our-products-item-more-information-pagination-page-one-arrow-right"></div>
                        <div class="section-our-products-item-more-information-pagination-page-two-arrow-right"></div>
                    <div>
                </div>

            </div>
        </div>

        <!-- <div class="see-more-product-button-wrapper">
            <a href="#" class="see-more-product-button">
                <p class="see-more-product-button-paragraph">ดูสินค้าทั้งหมด</p>
            </a>
        </div> -->

    </section>
    
    
    <section class="section-content-footer">
        <div class="section-content-footer-wrapper">
            <div class="section-content-footer-header-box">
                <h2 class="section-content-footer-header">โลเล็ม อิปซัมคำไกด์ไลน์เท่านั้น</h2>
            </div>
            <div class="section-content-footer-detail-box">
                <p class="section-content-footer-detail-parahraph">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม</p>
                <div class="section-content-footer-detail-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-category/image-content-footer.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <h2 class="section-content-footer-detail-header-2">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น</h2>
                <p class="section-content-footer-detail-parahraph">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม</p>
                <a href="#" class="section-content-footer-detail-read-more">
                    <p class="section-content-footer-detail-read-more-paragraph">อ่านเพิ่มเติม</p>
                </a>
            </div>

        </div>
    </section>

</main>

<?php
get_footer(); 
?>
