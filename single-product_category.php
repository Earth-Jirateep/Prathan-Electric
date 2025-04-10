<?php
/**
 * The template for displaying single product categories posts.
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
            <a href="<?php echo site_url('product-category'); ?>" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หมวดหมู่สินค้า</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph"><?php the_title(); ?></p>
            </div>
        </div>
    </section>

    <section class="section-hero-page">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header"><?php the_title(); ?></h1>
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
                // ดึง ID ของหมวดหมู่สินค้า (Product Category) ที่กำลังดูอยู่
                $current_category_id = get_the_ID();

                // Query ดึงเฉพาะหมวดหมู่ย่อยที่เชื่อมโยงกับหมวดหมู่สินค้านี้
                $args = array(
                    'post_type'      => 'subcategory',
                    'posts_per_page' => -1, // แสดงทั้งหมด
                    'meta_query'     => array(
                        array(
                            'key'     => 'linked_product_category', // คีย์ที่เชื่อมโยงกับหมวดหมู่สินค้า
                            'value'   => $current_category_id,
                            'compare' => '='
                        )
                    )
                );

                $query = new WP_Query($args);
                ?>

                <div id="swiper4" class="section-our-products-item-select-container product-category-prototype swiper">
                    <div class="section-our-products-item-select-wrapper product-category-prototype swiper-wrapper">

                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); ?>
                                <a href="<?php echo get_permalink(); ?>" class="section-our-products-item-select-box product-category-prototype swiper-slide">
                                    <p class="section-our-products-item-select-paragraph"><?php the_title(); ?></p>
                                </a>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <!-- <p>ไม่มีหมวดหมู่ย่อยที่เกี่ยวข้อง</p> -->
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

                <?php
                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'meta_query'     => array(
                        array(
                            'key'     => 'linked_product_category',
                            'value'   => get_the_ID(),
                            'compare' => '='
                        )
                    )
                );

                $query = new WP_Query($args);
                ?>

                <?php 
                $products = get_posts($args);
                $product_count = count($products);
                ?>
                <div class="section-find-products-box">
                    <!-- <p class="section-find-products-paragraph">ค้นพบสินค้า <?php echo $product_count; ?> ชิ้น</p> -->
                </div>

                <div id="home-category-wrapper">
                    <div class="section-our-products-item-more-information-container">
                        <div class="section-our-products-item-more-information-wrapper">

                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <a href="<?php echo get_permalink(); ?>" class="section-our-products-item-more-information-box">
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
                                                <p class="section-our-products-item-more-information-content-name">
                                                    <?php the_title(); ?>
                                                </p>
                                            </div>
                                            <div class="section-our-products-item-more-information-content-detail-box">
                                            <p class="section-our-products-item-more-information-content-detail">
                                                <?php
                                                $footer_detail = get_post_meta(get_the_ID(), 'footer_detail_paragraph', true);
                                                if ($footer_detail) {
                                                    echo wp_trim_words(wp_kses_post($footer_detail), 15, '...');
                                                } else {
                                                    echo wp_trim_words(get_the_content(), 15, '...');
                                                }
                                                ?>
                                            </p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <!-- <p style="color:red;">❌ ไม่มีสินค้าที่เกี่ยวข้อง</p> -->
                            <?php endif; ?>

                        </div>
                    </div>
                </div>



                <!-- การแบ่งหน้า (Pagination) -->
                <div class="section-our-products-item-more-information-pagination-wrapper">
                    <div class="section-our-products-item-more-information-pagination-list">
                        <?php
                        // ค่าตั้งต้น
                        $current_page = max(1, get_query_var('paged')); // หน้าปัจจุบัน
                        $posts_per_page = ($query->get('posts_per_page') > 0) ? $query->get('posts_per_page') : 3; // กำหนดค่าเริ่มต้นให้ไม่เป็น -1
                        $total_posts = $query->found_posts; // จำนวนโพสต์ทั้งหมด

                        // ตรวจสอบก่อนคำนวณ
                        if ($total_posts > 0) {
                            $start_post = ($current_page - 1) * $posts_per_page + 1; // โพสต์เริ่มต้น
                            $end_post = min($start_post + $posts_per_page - 1, $total_posts); // โพสต์สุดท้าย
                        } else {
                            $start_post = 0;
                            $end_post = 0;
                        }
                        ?>

                        <!-- <p class="section-our-products-item-more-information-pagination-list-paragraph">
                            แสดงผล <span><?php echo esc_html($start_post) . ' ถึง ' . esc_html($end_post); ?></span> จาก <?php echo esc_html($total_posts); ?> รายการ
                        </p> -->
                    </div>

                    <?php
                    echo paginate_links(array(
                        'total'        => max(1, $query->max_num_pages), // ป้องกันการแบ่งหน้าที่มีค่าเป็น 0
                        'current'      => $current_page,
                        'prev_text'    => __(''),
                        'next_text'    => __(''),
                        'type'         => 'list', // แสดงผลเป็นลิสต์ <ul>
                        'before_page_number' => '<span class="page-number">',
                        'after_page_number'  => '</span>',
                    ));
                    ?>
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
                <h2 class="section-content-footer-header">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'footer_header', true ) ); ?>
                </h2>
            </div>
            <div class="section-content-footer-detail-box">
                <div class="section-content-footer-detail-parahraph">
                    <?php echo wp_kses_post( get_post_meta( get_the_ID(), 'footer_detail_paragraph', true ) ); ?>
                </div>
                <!-- <div class="section-content-footer-detail-image">
                    <img src="<?php echo esc_url( get_post_meta( get_the_ID(), 'footer_detail_image', true ) ); ?>">
                </div>
                <h2 class="section-content-footer-detail-header-2">
                    <?php echo esc_html( get_post_meta( get_the_ID(), 'footer_detail_header_2', true ) ); ?>
                </h2>
                <p class="section-content-footer-detail-parahraph">
                    <?php echo wp_kses_post( get_post_meta( get_the_ID(), 'footer_detail_paragraph_2', true ) ); ?>
                </p>
                <a href="<?php echo esc_url( get_post_meta( get_the_ID(), 'footer_read_more_link', true ) ); ?>" class="section-content-footer-detail-read-more">
                    <p class="section-content-footer-detail-read-more-paragraph">อ่านเพิ่มเติม</p>
                </a> -->
            </div>
        </div>
    </section>


</main>

<?php
get_footer();
?>
