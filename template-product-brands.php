<?php
/**
 * Template Name: Product Brands
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
                <p class="section-pagination-paragraph">แบรนด์ทั้งหมด</p>
            </div>
        </div>
    </section>

    <section class="section-hero-page">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header">แบรนด์ทั้งหมด</h1>
                </div>
                <div class="section-hero-page-header-english-box">
                    <p class="section-hero-page-header-english">Product brands</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-content-after-hero-page">
        <div class="section-content-after-hero-page-wrapper">
            <div class="section-content-after-hero-page-header-box">
                <h2 class="section-content-after-hero-page-header">ตัวแทนจำหน่ายอุปกรณ์ไฟฟ้า</h2>
            </div>
            <div class="section-content-after-hero-page-paragraph-box">
                <p class="section-content-after-hero-page-paragraph">สอบถามราคา สั่งซื้อสินค้า จากยี้ห้อชั้นนำกับเรา<br class="m"> ของแท้จากโรงงาน ราคาถูก</p>
            </div>
        <div>
    </section>

    <section class="section-select-the-desired-brand">
        <div class="section-select-the-desired-brand-wrapper">
            <div class="section-select-the-desired-brand-box">
                <div class="section-select-the-desired-brand-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-brand/product-brand-alphabet.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-select-the-desired-brand-paragraph-box">
                    <div class="section-select-the-desired-brand-paragraph-top-box">
                        <p class="section-select-the-desired-brand-paragraph-top">เลือกแบรนด์ที่ต้องการ</p>
                    </div>
                    <div class="section-select-the-desired-brand-paragraph-bottom-box">
                        <p class="section-select-the-desired-brand-paragraph-bottom">แล้วเลือกหาสินค้าได้เลย</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-brand-popular">
        <div class="section-brand-popular-wrapper">
            <div class="section-brand-popular-header-box">
                <div class="section-brand-popular-header-2-box">
                    <h2 class="section-brand-popular-header-2">แบรนด์<br class="d">ยอดนิยม</h2>
                </div>
                <div class="section-brand-popular-header-english-box">
                    <p class="section-brand-popular-header-english">Popular brands</p>
                </div>
            </div>

            <?php
            // ดึงข้อมูลแบรนด์ โดยจำกัดให้แสดงเพียง 5 แบรนด์
            $brands = get_brands(10);
            ?>

            <div class="section-brand-popular-list-container">
                <div class="section-brand-popular-list-wrapper">
                    <?php foreach ($brands as $brand) : ?>
                        <a href="<?php echo esc_url($brand['permalink']); ?>" class="section-brand-popular-list-box">
                            <div class="section-brand-popular-list-image">
                                <img src="<?php echo esc_url($brand['brand_image']); ?>" alt="<?php bloginfo('name'); ?> Logo">
                            </div>
                            <div class="section-brand-popular-list-paragraph-box">
                                <p class="section-brand-popular-list-paragraph"><?php echo esc_html($brand['brand_name']); ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-select-brand">
        <div class="section-select-brand-wrapper">
            <div class="section-select-brand-header-wrapper">
                <div class="section-select-brand-header-top-wrapper">
                    <div class="section-select-brand-header-top-paragraph-box">
                        <p class="section-select-brand-header-top-paragraph">
                            เลือกแบรนด์ <span id="brand-count"></span>
                        </p>
                    </div>
                    <div class="section-select-brand-header-top-clear-box">
                        <button class="section-select-brand-header-top-clear"></button>
                    </div>
                </div>


                <div class="section-select-brand-header-top-search-container">
                    <div class="section-select-brand-header-top-search-box">
                        <div class="section-select-brand-header-top-search-paragraph-box active" data-letter="all">
                            <p class="section-select-brand-header-top-search-paragraph">ทั้งหมด</p>
                        </div>
                        <?php 
                        $letters = range('A', 'Z');
                        array_unshift($letters, '0-9'); // เพิ่มหมวดหมู่ตัวเลขด้านหน้า
                        
                        foreach ($letters as $letter) : ?>
                            <div class="section-select-brand-header-top-search-paragraph-box" data-letter="<?php echo esc_attr($letter); ?>">
                                <p class="section-select-brand-header-top-search-paragraph"><?php echo esc_html($letter); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <?php
            $brands = get_brands();
            ?>

            <div class="section-select-brand-header-bottom-container">
                <div class="section-select-brand-header-bottom-wrapper">
                    <?php foreach ($brands as $brand) : 
                        $first_letter = strtoupper(mb_substr($brand['brand_name'], 0, 1)); // ดึงตัวอักษรตัวแรก
                        $first_letter = preg_match('/[A-Z]/', $first_letter) ? $first_letter : '0-9'; // ถ้าไม่ใช่ A-Z ให้เป็น 0-9
                    ?>
                        <a href="<?php echo esc_url($brand['permalink']); ?>" class="section-select-brand-header-bottom-box" data-letter="<?php echo esc_attr($first_letter); ?>">
                            <div class="section-select-brand-header-bottom-image">
                                <img src="<?php echo esc_url($brand['brand_image']); ?>" alt="<?php echo esc_attr($brand['brand_name']); ?>">
                            </div>
                            <div class="section-select-brand-header-bottom-paragraph-box">
                                <p class="section-select-brand-header-bottom-paragraph"><?php echo esc_html($brand['brand_name']); ?></p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- ข้อความแจ้งเตือนเมื่อไม่มีแบรนด์ที่ตรงกับตัวกรอง -->
                <p class="no-brand-message" style="display: none;">ไม่พบแบรนด์ที่ตรงกับตัวกรองที่เลือก</p>
            </div>

        </div>

    </section>
    

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
            </div>
        </div>
    </section>

</main>

<?php
get_footer(); 
?>
