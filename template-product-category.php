<?php
/**
 * Template Name: Product Category
 * Description: A custom home page template for the website.
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
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หมวดหมู่สินค้า</p>
            </div>
        </div>
    </section>

    <section class="section-hero-page">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header">หมวดหมู่สินค้า</h1>
                </div>
                <div class="section-hero-page-header-english-box">
                    <p class="section-hero-page-header-english">Product category</p>
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

    <section class="section-select-product-category">
        <div class="section-select-product-category-wrapper">
            <div class="section-select-product-category-header-box">
                <h2 class="section-select-product-category-header">เลือกหมวดหมู่สินค้า</h2>
            </div>

            <?php
            $args = array(
                'post_type' => 'product_category',
                'posts_per_page' => -1,
                'meta_key'       => 'product_category_order', // ระบุ Meta Key สำหรับจัดลำดับ
                'orderby'        => 'meta_value_num',         // จัดเรียงตามตัวเลข
                'order'          => 'ASC'                     // เรียงจากน้อยไปมาก (1-2-3)
            );
            $query = new WP_Query($args);
            ?>

            <div class="section-select-product-category-item-container">
                <div class="section-select-product-category-item-wrapper">
                    <?php if ($query->have_posts()) : ?>
                        <?php while ($query->have_posts()) : $query->the_post(); 
                            $image = get_post_meta(get_the_ID(), 'product_category_image', true);
                            // $description = get_post_meta(get_the_ID(), 'product_category_description', true);
                            // $link = get_post_meta(get_the_ID(), 'product_category_link', true);
                        ?>
                            <a href="<?php echo get_permalink(); ?>" class="section-select-product-category-item-box">
                                <div class="section-select-product-category-item-image">
                                    <?php if ($image) : ?>
                                        <img src="<?php echo esc_url($image); ?>" alt="<?php the_title(); ?>">
                                    <?php endif; ?>
                                </div>
                                <div class="section-select-product-category-item-paragraph-box">
                                    <p class="section-select-product-category-item-paragraph"><?php the_title(); ?></p>
                                    <!-- <?php if ($description) : ?>
                                        <p class="section-select-product-category-item-description"><?php echo esc_html($description); ?></p>
                                    <?php endif; ?> -->
                                </div>
                            </a>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>


        </div>
    </section>

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
            </div>
        </div>
    </section>


</main>

<?php
get_footer(); 
?>
