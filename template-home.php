<?php
/**
 * Template Name: Home
 * Description: A custom home page template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
    <section class="section-hero">
        <div class="section-hero-wrapper">
            <div class="section-hero-detail-box">
                <div class="section-hero-header-1-box">
                    <h1 class="section-hero-header-1">ประธานการไฟฟ้า<br>จำหน่ายอุปกรณ์ไฟฟ้า<br>ทุกชนิดราคาส่ง</h1>
                </div>
                <div class="section-hero-paragraph-box">
                    <p class="section-hero-paragraph">บริษัท ประธานการไฟฟ้า จำกัด<br class="m"> จำหน่ายอุปกรณ์ไฟฟ้าทุกชนิดราคาส่ง ราคาโรงงาน<br class="m"> สำหรับช่างไฟ และผู้รับเหมาระบบไฟฟ้ารวมไปถึงสินค้า<br class="m">อุปกรณ์ไฟฟ้าโรงงานอุตสหกรรมทุกชนิด</p>
                </div>
                <div class="section-hero-button-wrapper">
                    <a href="https://page.line.me/cqv3387x" class="section-hero-button-box-one">
                        <p class="section-hero-button-paragraph-one">สั่งสินค้า @prathan</p>
                    </a>
                    <a href="<?php echo home_url('product-category'); ?>/" class="section-hero-button-box-two">
                        <p class="section-hero-button-paragraph-two">เลือกซื้อสินค้า</p>
                    </a>
                </div>
            </div>
            <div class="section-hero-detail-image">
                <img class="d" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/image-hero.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            
        </div>
    </section>

    <section class="section-our-advantages">
        <div class="section-our-advantages-wrapper">
            <div class="section-our-advantages-box">
                <div class="section-our-advantages-header-box">
                    <p class="section-our-advantages-header">50000+</p>
                </div>
                <div class="section-our-advantages-paragraph-box">
                    <p class="section-our-advantages-paragraph">สินค้าให้เลือก</p>
                </div>
            </div>
            <div class="section-our-advantages-box">
                <div class="section-our-advantages-header-box">
                    <p class="section-our-advantages-header">30 ปี</p>
                </div>
                <div class="section-our-advantages-paragraph-box">
                    <p class="section-our-advantages-paragraph">ประสบการณ์ในวงการ</p>
                </div>
            </div>
            <div class="section-our-advantages-box">
                <div class="section-our-advantages-header-box">
                    <p class="section-our-advantages-header">มีมาตรฐาน</p>
                </div>
                <div class="section-our-advantages-paragraph-box">
                    <p class="section-our-advantages-paragraph">ของแท้ มีประกัน</p>
                </div>
            </div>
            <div class="section-our-advantages-box">
                <div class="section-our-advantages-header-box">
                    <p class="section-our-advantages-header">ส่งทั่วไทย</p>
                </div>
                <div class="section-our-advantages-paragraph-box">
                    <p class="section-our-advantages-paragraph">ภายใน 1-2 วัน</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-our-services">
        <div class="section-our-services-wrapper">
            <div class="section-our-services-top-wrapper">
                <div class="section-our-services-top-left-box">
                    <div class="section-our-services-top-left-header-box">
                        <h2 class="section-our-services-top-left-header">ยินดีต้อนรับสู่<br>ประธานการไฟฟ้า</h2>
                    </div>
                    <!-- <div class="section-our-services-top-left-paragraph-box">
                        <p class="section-our-services-top-left-paragraph">Lolem Ipsum</p>
                    </div> -->
                </div>
                <div class="section-our-services-top-right-box">
                    <p class="section-our-services-top-right-paragraph">ประธานการไฟฟ้า ร้านขายอุปกรณ์ไฟฟ้าครบวงจรสำหรับทุกความต้องการด้านไฟฟ้า เรารวบรวมสินค้าคุณภาพสูงจากหลากหลายแบรนด์ชั้นนำสำหรับงานระบบไฟฟ้าทุกประเภท ไม่ว่าคุณจะเป็นช่างไฟฟ้า ผู้รับเหมา หรือต้องการสินค้าสำหรับการติดตั้งไฟฟ้าในบ้านหรืออุตสาหกรรม เรามีสินค้าครบครันที่พร้อมตอบโจทย์ทุกความต้องการ</p>
                </div>
            </div>
            <div class="section-our-services-detail-container">
                <div class="section-our-services-detail-wrapper">
                    <a href="<?php echo site_url('product-category'); ?>" class="section-our-services-detail-box">
                        <div class="section-our-services-detail-content">
                            <div class="section-our-services-detail-content">
                                <div class="section-our-services-detail-content-arrow"></div>
                                <div class="section-our-services-detail-content-header-box">
                                    <h3 class="section-our-services-detail-content-header">ดูอุปกรณ์ไฟฟ้าทั้งหมด</h3>
                                </div>
                                <div class="section-our-services-detail-content-paragraph-box">
                                    <p class="section-our-services-detail-content-paragraph">เราจำหน่ายอุปกรณ์ไฟฟ้าครบวงจร เช่น สายไฟ หลอดไฟ เบรกเกอร์ สวิทช์ไฟ และอื่นๆ สินค้าทุกชิ้นได้รับการรับรองคุณภาพจากแบรนด์ที่เชื่อถือได้ เช่น ABB, Schneider Electric, Mitsubishi พร้อมให้คุณเลือกสรรได้ตามความต้องการ</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="section-our-services-detail-second-box">
                        <div class="section-our-services-detail-second-image-top">
                            <img class="d" src="<?php echo get_template_directory_uri(); ?>/assets/images/our-services/prathan-word.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                            <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/our-services/prathan-word-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-our-services-detail-second-content-box">
                            <div class="section-our-services-detail-second-content-header-box">
                                <h3 class="section-our-services-detail-second-content-header">ช่องทางจำหน่าย</h3>
                            </div>
                            <div class="section-our-services-detail-second-content-paragraph-box">
                                <p class="section-our-services-detail-second-content-paragraph"><span>01.</span> หน้าร้านถนนพระราม 2 ปากซอย 67</p>
                                <p class="section-our-services-detail-second-content-paragraph"><span>02.</span> Line: <a href="https://page.line.me/cqv3387x">@prathan</a> รับของหน้าร้าน<br> หรือจัดส่งผ่านขนส่ง</p>
                                <p class="section-our-services-detail-second-content-paragraph"><span>03.</span> สั่งซื้อผ่านเว็ปไซต์ <a href="https://prathan.co.th/">www.prathan.co.th</a></p>
                            </div>
                        </div>
                    </div>
                    <a href="https://page.line.me/cqv3387x" class="section-our-services-detail-box">
                        <div class="section-our-services-detail-content">
                            <div class="section-our-services-detail-content">
                                <div class="section-our-services-detail-content-arrow"></div>
                                <div class="section-our-services-detail-content-header-box">
                                    <h3 class="section-our-services-detail-content-header">สอบถามราคาส่งราคาโรงงาน</h3>
                                </div>
                                <div class="section-our-services-detail-content-paragraph-box">
                                    <p class="section-our-services-detail-content-paragraph">ประธานการไฟฟ้า พร้อมให้คำปรึกษาและเสนอราคาพิเศษ ไม่ว่าคุณจะเป็นร้านค้า ผู้รับเหมา หรือองค์กรที่ต้องการสั่งซื้ออุปกรณ์ไฟฟ้าจำนวนมาก เราพร้อมให้บริการด้วยสินค้าคุณภาพสูงและราคาที่คุ้มค่า</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="section-our-services-detail-fourth-box">
                        <div class="section-our-services-detail-fourth-content">
                        
                            <div class="section-our-services-detail-content-header-box">
                                <h3 class="section-our-services-detail-content-header">บริการรวดเร็ว สั่งซื้อง่าย</h3>
                            </div>
                            <div class="section-our-services-detail-content-paragraph-box">
                                <p class="section-our-services-detail-content-paragraph">เรามุ่งมั่นให้บริการที่รวดเร็วและสะดวกสบาย ลูกค้าสามารถสั่งซื้ออุปกรณ์ไฟฟ้าผ่านทาง เว็บไซต์ของเรา หรือผ่านไลน์ <a href="https://page.line.me/cqv3387x">@prathan</a> นอกจากนี้ยังมีหน้าร้านให้บริการที่สาขาพระราม 2 และบางแค ที่พร้อมให้คำแนะนำจากทีมงานผู้เชี่ยวชาญด้านอุปกรณ์ไฟฟ้า</p>
                            </div>

                            <div class="section-our-services-detail-fourth-content-header-box">
                                <h3 class="section-our-services-detail-fourth-content-header">ที่ตั้งร้าน</h3>
                            </div>
                            <div class="section-our-services-detail-fourth-content-paragraph-box">
                                <p class="section-our-services-detail-fourth-content-paragraph">สาขาพระราม 2 <a href="https://maps.app.goo.gl/exCLh3dEYde9qyxVA">ดูแผนที่</a></p>
                                <p class="section-our-services-detail-fourth-content-paragraph">สาขาบางแค <a href="https://maps.app.goo.gl/1QhNow7ok5oniZhc7">ดูแผนที่</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section-our-products-header-text">
        <div class="section-our-products-header-text-wrapper">
            <p class="section-our-products-header-text-paragraph">ประธานการไฟฟ้าเป็นร้านขายอุปกรณ์ไฟฟ้าที่ครบ จบในที่เดียวสำหรับผู้ที่มองหาอุปกรณ์ไฟฟ้าคุณภาพสูง เช่น ตู้คอนซูมเมอร์ ตู้โหลดเซ็นเตอร์ สวิตช์ไฟ ท่อร้อยสายไฟ เบรกเกอร์ แร็คไฟฟ้า และหางปลาสายไฟ ซึ่งล้วนถูกออกแบบมาให้เหมาะสมกับงานระบบไฟฟ้าตั้งแต่ขนาดเล็กจนถึงขนาดใหญ่ ทั้งในบ้าน อาคาร และโรงงาน เพื่อรองรับทุกความต้องการด้านงานระบบไฟฟ้าได้อย่างครบถ้วนในที่เดียว</p>
        </div>
    </section>

    <section class="section-our-products">
        <div class="section-our-products-wrapper">
            <div class="section-our-products-top-box">
                <div class="section-our-products-top-header-2-box">
                    <h2 class="section-our-products-top-header-2">สินค้าของเรา</h2>
                </div>
                <div class="section-our-products-top-header-paragraph-box">
                    <p class="section-our-products-top-header-paragraph">Our Product</p>
                </div>
            </div>
            <div class="section-our-products-item-container">
                <div class="section-our-products-item-header-box">
                    <h2 class="section-our-products-item-header">เลือกตามหมวดหมู่สินค้า</h2>
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
        </div>

    </section>

    <section class="section-product-brand">
        <div class="section-product-brand-wrapper">
            <div class="section-product-brand-header">
                <div class="section-product-brand-header-box">
                    <h2 class="section-product-brand-header-2">เลือกตามแบรนด์สินค้า</h2>
                </div>
                <div class="section-product-brand-header-paragraph-box">
                    <p class="section-product-brand-header-paragraph">สำหรับลูกค้าที่ต้องการเลือกสินค้าตามแบรนด์ ร้านขายอุปกรณ์ไฟฟ้าของเรามีสินค้าให้เลือกจากแบรนด์ชั้นนำมากมาย ไม่ว่าจะเป็น KJL, Schneider, Mitsubishi, Yazaki, Omron, Fotek, ABB, bticino, Panasonic, EVE, LINK, NANO, Phelps Dodge, WIP และ KYORITSU เพื่อให้คุณมั่นใจได้ในคุณภาพและมาตรฐานของสินค้า</p>
                </div>
            </div>

            <div id="swiper2" class="section-product-brand-image-slide-container swiper">
                <div class="section-product-brand-image-slide-wrapper swiper-wrapper">
                    <?php
                    // WP_Query สำหรับดึงโพสต์ประเภท 'brand'
                    $args = array(
                        'post_type'      => 'brand',
                        'posts_per_page' => -1, // ดึงข้อมูลแบรนด์ทั้งหมด
                        'orderby'        => 'menu_order',
                        'order'          => 'ASC'
                    );
                    $brands_query = new WP_Query($args);
                    ?>

                    <?php if ($brands_query->have_posts()) : ?>
                        <?php while ($brands_query->have_posts()) : $brands_query->the_post(); ?>
                            <div class="section-product-brand-image-slide-box swiper-slide">
                                <?php 
                                // ดึงรูปแบรนด์จาก Custom Field 'brand_image' หรือใช้ Featured Image ถ้ามี
                                $brand_image = get_post_meta(get_the_ID(), 'brand_image', true);
                                if ($brand_image) : ?>
                                    <img src="<?php echo esc_url($brand_image); ?>" alt="<?php the_title(); ?>">
                                <?php elseif (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-brand/default-logo.png" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>ไม่มีแบรนด์ที่จะแสดง.</p>
                    <?php endif; ?>
                </div>
                
            </div>

            <button class="section-product-brand-arrow-previous swiper2-button-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </button>
            <button class="section-product-brand-arrow-next swiper2-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </button>


            <div class="see-more-brand-button-wrapper">
                <a href="<?php echo site_url('product-brands'); ?>" class="see-more-brand-button">
                    <p class="see-more-brand-button-paragraph">ดูแบรนด์ทั้งหมด</p>
                </a>
            </div>

        </div>
    </section>

    <section class="section-article">
        <div class="section-article-wrapper">
            <div class="section-article-header-wrapper">
                <div class="section-article-header-box">
                    <h2 class="section-article-header-2">บทความ</h2>
                </div>
                <div class="section-article-header-paragraph-box">
                    <h2 class="section-article-header-paragraph">Article</h2>
                </div>
            </div>
            
            <div id="swiper3" class="section-article-content-container">
                <div class="section-article-content-wrapper swiper-wrapper">
                    
                    <?php
                    // เริ่มต้น WP_Query เพื่อดึงโพสต์ล่าสุด 6 โพสต์
                    $recent_posts = new WP_Query(array(
                        'post_type'      => 'post',     // กำหนดให้ดึงโพสต์ประเภท 'post'
                        'posts_per_page' => 6,         // จำนวนโพสต์ที่ต้องการดึง
                        'orderby'        => 'date',    // จัดเรียงตามวันที่
                        'order'          => 'DESC'     // จากใหม่ไปเก่า
                    ));

                    if ($recent_posts->have_posts()) :
                        while ($recent_posts->have_posts()) : $recent_posts->the_post();
                    ?>
                        <a href="<?php the_permalink(); ?>" class="section-article-content-box swiper-slide">
                            <div class="section-article-content-image">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); // แสดงรูป Thumbnail ?>
                                <?php else : ?>
                                    <div>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/default-image.png" alt="<?php bloginfo('name'); ?> Logo">
                                    </div>
                                <?php endif; ?>
                            </div>
                            
                            <div class="section-article-content-detail-wrapper">
                                <div class="section-article-content-header-box">
                                    <!-- แสดงหัวข้อบทความ -->
                                    <h3 class="section-article-content-header"><?php the_title(); ?></h3>
                                </div>
                                <div class="section-article-content-paragraph-box">
                                    <!-- แสดงเนื้อหาย่อของบทความ -->
                                    <p class="section-article-content-paragraph"><?php echo get_the_excerpt(); ?></p>
                                </div>
                                <div class="section-article-content-bottom-box">
                                    <div class="section-article-content-date-box">
                                        <!-- แสดงวันที่โพสต์ -->
                                        <p class="section-article-content-date"><?php echo get_the_date('j M Y'); ?></p>
                                    </div>
                                    <div class="section-article-content-read-more-box">
                                        <!-- ปุ่มอ่านเพิ่มเติม -->
                                        <p class="section-article-content-read-more">อ่านเพิ่มเติม</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                        endwhile;
                        wp_reset_postdata(); // คืนค่า post data
                    else :
                        echo '<p>ไม่พบบทความ</p>';
                    endif;
                    ?>

                </div>

                <!-- ปุ่มดูบทความทั้งหมด -->
                <div class="see-more-article-button-wrapper">
                    <a href="<?php echo site_url('article'); ?>" class="see-more-article-button">
                        <p class="see-more-article-button-paragraph">บทความทั้งหมด</p>
                    </a>
                </div>
            </div>

            <!-- ปุ่มเลื่อนซ้ายและขวาของ Swiper -->
            <button class="section-article-content-arrow-previous swiper3-button-prev">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left.png" alt="Previous">
            </button>
            <button class="section-article-content-arrow-next swiper3-button-next">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.png" alt="Next">
            </button>
        </div>
    </section>


    <section class="section-sale-channels">
        <div class="section-sale-channels-wrapper">
            <div class="section-sale-channels-header-wrapper">
                <div class="section-sale-channels-header-box">
                    <h2 class="section-sale-channels-header">ช่องทางการสั่งซื้อ</h2>
                </div>
                <div class="section-sale-channels-header-paragraph-box">
                    <p class="section-sale-channels-header-paragraph">Sales channels</p>
                </div>
            </div>
            <div class="section-sale-channels-paragraph-box">
                <p class="section-sale-channels-paragraph">หากคุณกำลังมองหา ร้านขายอุปกรณ์ไฟฟ้า ที่มีสินค้าครบวงจรในราคาส่ง ราคาโรงงาน ประธานการไฟฟ้า คือร้านที่คุณวางใจได้ เรามีสินค้าหลากหลายให้เลือก พร้อมบริการที่รวดเร็วและคำแนะนำจากทีมผู้เชี่ยวชาญ สั่งซื้อกับเรา เพื่อให้งานติดตั้งระบบไฟฟ้าของคุณดำเนินไปอย่างราบรื่นและมีประสิทธิภาพ</p>
            </div>
            <div class="section-sale-channels-content-wrapper">
                <div class="section-sale-channels-content-box">
                    <div class="section-sale-channels-content-header-box">
                        <h3 class="section-sale-channels-content-header">หน้าร้าน</h3>
                    </div>
                        <div class="section-our-services-detail-fourth-content-paragraph-box">
                            <p class="section-our-services-detail-fourth-content-paragraph">สาขาพระราม 2 <a href="#">ดูแผนที่</a></p>
                            <p class="section-our-services-detail-fourth-content-paragraph">สาขาบางแค <a href="#">ดูแผนที่</a></p>
                        </div>
                    <div class="section-sale-channels-content-bottom-wrapper">
                        <!-- <div class="section-sale-channels-content-bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale-channels/image-sale-channels-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div> -->
                        
                        <!-- <div class="section-sale-channels-content-bottom-paragraph-box">
                            <a href="#" class="section-sale-channels-content-bottom-paragraph">ดูแผนที่ร้าน</a>
                        </div> -->
                    </div>
                </div>
                <div class="section-sale-channels-content-box">
                    <div class="section-sale-channels-content-header-box">
                        <h3 class="section-sale-channels-content-header">สั่งผ่านไลน์ <span class="show">@prathan</span></h3>
                    </div>
                    <div class="section-sale-channels-content-paragraph-box">
                        <p class="section-sale-channels-content-paragraph"><span class="hide">@prathan</span> รับของหน้าร้าน<br class="d">หรือจัดส่งผ่านขนส่ง</p>
                    </div>
                    <div class="section-sale-channels-content-bottom-wrapper">
                        <div class="section-sale-channels-content-bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale-channels/image-sale-channels-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-sale-channels-content-bottom-paragraph-box">
                            <a href="https://page.line.me/cqv3387x" class="section-sale-channels-content-bottom-paragraph">แอดไลน์</a>
                        </div>
                    </div>
                </div>
                <div class="section-sale-channels-content-box">
                    <div class="section-sale-channels-content-header-box">
                        <h3 class="section-sale-channels-content-header">เวปไซต์</h3>
                    </div>
                    <div class="section-sale-channels-content-paragraph-box">
                        <p class="section-sale-channels-content-paragraph">สั่งซื้อผ่านเว็ปไซต์<br><a href="https://prathan.co.th/">www.prathan.co.th</a></p>
                    </div>
                    <div class="section-sale-channels-content-bottom-wrapper">
                        <!-- <div class="section-sale-channels-content-bottom-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale-channels/image-sale-channels-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                        <div class="section-sale-channels-content-bottom-paragraph-box">
                            <a href="#" class="section-sale-channels-content-bottom-paragraph">สร้างใบเสนอราคา</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="section-sale-channels-image-background">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sale-channels/image-background-sales-channels.png" alt="<?php bloginfo( 'name' ); ?> Logo">  
        </div>

    </section>

    <section class="section-electrical-innovation">
        <div class="section-electrical-innovation-wrapper">
            <div class="section-electrical-innovation-header-box">
                <h2 class="section-electrical-innovation-header">ส่งมอบ <span>“ไฟฟ้า”</span><br>คุณภาพเพื่อความเติบโต<br class="m"> ที่มั่นคงไปด้วยกัน</h2>
            </div>
            <div class="section-electrical-innovation-content-wrapper">
                <div class="section-electrical-innovation-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-1.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-electrical-innovation-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-electrical-innovation-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-electrical-innovation-content-paragraph-box">
                    <div class="section-electrical-innovation-header-list">
                        <ul class="section-electrical-innovation-header-list-ul">
                            <li class="section-electrical-innovation-header-list-li">ครบวงจรในที่เดียว</li>
                            <li class="section-electrical-innovation-header-list-li">มาพร้อมกับสินค้าคุณภาพ</li>
                            <li class="section-electrical-innovation-header-list-li">ราคาคุ้มค่า</li>
                            <li class="section-electrical-innovation-header-list-li">จัดส่งรวดเร็ว</li>
                        </ul>
                    </div>
                </div>
                <div class="section-electrical-innovation-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-5.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-electrical-innovation-content-image-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-6.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-electrical-innovation-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-7.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
                <div class="section-electrical-innovation-content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-8.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                </div>
            </div>
            <!-- <div class="section-electrical-innovation-content-bottom-wrapper">
                <div class="section-electrical-innovation-content-bottom-header-box">
                    <div class="section-electrical-innovation-content-bottom-header">
                        <h3 class="section-electrical-innovation-content-bottom-header-3">โลเล็มอิปซัม<h3>
                    </div>
                    <div class="section-electrical-innovation-content-bottom-header-paragraph-box">
                        <p class="section-electrical-innovation-content-bottom-header-paragraph">Lorem Ipsum</p>
                    </div>
                </div>
                <div class="section-electrical-innovation-content-bottom-paragraph-box">
                    <p class="section-electrical-innovation-content-bottom-paragraph">โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม อิปซัม โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน แมคเคอเรล มอคอัพภาษา บ็อกซ์พาร์ตเนอร์ ตัวตน ซิติี้ทาวน์ โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยนแมคเคอเรล มอคอัพภาษา โลเล็ม อิปซัม คำไกด์ไลน์เท่านั้น กิริยา แชมเปี้ยน โลเล็ม</p>
                </div>
            </div> -->

        </div>
    </section>

    <section class="section-frequently-asked-questions">
        <div class="section-frequently-asked-questions-wrapper">
            <div class="section-frequently-asked-questions-header-wrapper">
                <div class="section-frequently-asked-questions-header-box">
                    <h2 class="section-frequently-asked-questions-header">คำถามที่พบบ่อย</h2>
                </div>
                <div class="section-frequently-asked-questions-header-paragraph-box">
                    <p class="section-frequently-asked-questions-header-paragraph">FAQ</p>
                </div>
            </div>
            <div class="section-frequently-asked-questions-content-wrapper">
                
                <?php
                $faq_items = get_post_meta(get_the_ID(), 'faq_group', true);

                if (!empty($faq_items)) :
                    foreach ($faq_items as $faq) :
                        $question = isset($faq['faq_question']) ? esc_html($faq['faq_question']) : '';
                        $answer = isset($faq['faq_answer']) ? esc_html($faq['faq_answer']) : '';
                ?>
                    <div class="section-frequently-asked-questions-content-box">
                        <div class="section-frequently-asked-questions-content-paragraph-box">
                            <h3 class="section-frequently-asked-questions-content-header"><?php echo $question; ?></h3>
                            <p class="section-frequently-asked-questions-content-paragraph"><?php echo $answer; ?></p>
                        </div>
                        <div class="section-frequently-asked-questions-content-plus-box">
                            <div class="section-frequently-asked-questions-content-plus-sign"></div>
                        </div>
                    </div>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </section>





</main>

<?php
get_footer(); 
?>
