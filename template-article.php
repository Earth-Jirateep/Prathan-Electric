<?php
/**
 * Template Name: Article
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
                <p class="section-pagination-paragraph">บทความ</p>
            </div>
        </div>
    </section>

    <section class="section-hero-page">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header">บทความ</h1>
                </div>
                <div class="section-hero-page-header-english-box">
                    <p class="section-hero-page-header-english">Article</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-all-article">
        <div class="section-all-article-cover">
            <div class="section-all-article-wrapper">

                <?php
                // ตั้งค่าการดึงบทความ
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'      => 'post', // ประเภทโพสต์ (บทความทั่วไป)
                    'posts_per_page' => 12,     // จำนวนโพสต์ต่อหน้า
                    'paged'          => $paged, // หน้าที่จะดึงข้อมูล
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>

                <!-- แสดงบทความ -->
                <a href="<?php the_permalink(); ?>" class="section-article-content-box">
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
                            <h3 class="section-article-content-header"><?php the_title(); ?></h3>
                        </div>
                        <div class="section-article-content-paragraph-box">
                            <p class="section-article-content-paragraph">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); // ตัดข้อความสั้น ?>
                            </p>
                        </div>
                        <div class="section-article-content-bottom-box">
                            <div class="section-article-content-date-box">
                                <p class="section-article-content-date"><?php echo get_the_date('j M Y'); ?></p>
                            </div>
                            <div class="section-article-content-read-more-box">
                                <p class="section-article-content-read-more">อ่านเพิ่มเติม</p>
                            </div>
                        </div>
                    </div>
                </a>

                <?php
                    endwhile;
                    wp_reset_postdata(); // รีเซ็ตข้อมูลโพสต์
                else :
                    echo '<p>ไม่พบบทความ</p>';
                endif;
                ?>

            </div>

            <!-- การแบ่งหน้า (Pagination) -->
            <div class="section-our-products-item-more-information-pagination-wrapper">
                <div class="section-our-products-item-more-information-pagination-list">
                    <?php
                    // ค่าตั้งต้น
                    $current_page = max(1, get_query_var('paged')); // หน้าปัจจุบัน
                    $posts_per_page = $query->get('posts_per_page'); // จำนวนโพสต์ต่อหน้า
                    $total_posts = $query->found_posts; // จำนวนโพสต์ทั้งหมด

                    // คำนวณลำดับโพสต์
                    $start_post = ($current_page - 1) * $posts_per_page + 1; // โพสต์เริ่มต้น
                    $end_post = min($start_post + $posts_per_page - 1, $total_posts); // โพสต์สุดท้าย (ต้องไม่เกินจำนวนโพสต์ทั้งหมด)
                    ?>

                    <p class="section-our-products-item-more-information-pagination-list-paragraph">
                        แสดงผล <span><?php echo $start_post . ' ถึง ' . $end_post; ?></span> จาก <?php echo $total_posts; ?> รายการ
                    </p>
                </div>

                <?php
                echo paginate_links(array(
                    'total'        => $query->max_num_pages,
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
    </section>


    <section class="section-innovation-picture">
        <div class="section-innovation-picture-wrapper">
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <a href="https://page.line.me/cqv3387x" class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/image-innovation-article.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </a>
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-3.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-7.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>

        </div>

    </section>

    <section class="section-featured-articles">
        <div class="section-featured-articles-wrapper">

            <div class="section-featured-articles-header-box">
                <h2 class="section-featured-articles-header">บทความแนะนำ</h2>
            </div>

            <div class="section-featured-articles-cover-container">
                <div class="section-featured-articles-cover">

                    <?php
                    // สร้าง Query สำหรับดึงบทความล่าสุด
                    $args = array(
                        'post_type'      => 'post',           // ใช้ 'post' สำหรับบทความปกติ หรือเปลี่ยนเป็น CPT อื่นถ้ามี
                        'posts_per_page' => 3,                // ดึงบทความ 3 บทความล่าสุด
                        'orderby'        => 'date',           // จัดเรียงตามวันที่
                        'order'          => 'DESC'            // เรียงจากใหม่ไปเก่า
                    );

                    $latest_articles = new WP_Query($args);
                    ?>

                    <!-- ตรวจสอบว่ามีบทความหรือไม่ -->
                    <?php if ($latest_articles->have_posts()) : ?>
                        <?php while ($latest_articles->have_posts()) : $latest_articles->the_post(); ?>
                            
                            <div class="section-article-content-box featured-articles">
                                <!-- แสดงรูปภาพ Featured Image -->
                                <div class="section-article-content-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else : ?>
                                        <!-- ถ้าไม่มีรูปภาพ featured ให้แสดงรูป Default -->
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/default-article.png" alt="<?php bloginfo('name'); ?> Logo">
                                    <?php endif; ?>
                                </div>

                                <!-- แสดงรายละเอียดบทความ -->
                                <div class="section-article-content-detail-wrapper">
                                    <div class="section-article-content-header-box">
                                        <h3 class="section-article-content-header"><?php the_title(); ?></h3>
                                    </div>
                                    <div class="section-article-content-paragraph-box">
                                        <p class="section-article-content-paragraph">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?> <!-- แสดงเนื้อหาสั้น -->
                                        </p>
                                    </div>
                                    <div class="section-article-content-bottom-box">
                                        <div class="section-article-content-date-box">
                                            <p class="section-article-content-date"><?php echo get_the_date('j M Y'); ?></p> <!-- แสดงวันที่ -->
                                        </div>
                                        <div class="section-article-content-read-more-box">
                                            <a href="<?php the_permalink(); ?>" class="section-article-content-read-more">อ่านเพิ่มเติม</a> <!-- ลิงก์ไปยังบทความเต็ม -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?> <!-- รีเซ็ตข้อมูลหลังจากใช้ WP_Query -->
                    <?php else : ?>
                        <p>ไม่พบบทความในขณะนี้</p>
                    <?php endif; ?>

                </div>
            </div>

        </div>

    </section>

    
</main>

<?php
get_footer(); 
?>
