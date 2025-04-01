<?php
/**
 * The template for displaying single subcategory posts.
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

            <?php
            // ดึง ID ของหมวดหมู่หลักที่เชื่อมโยงกับหมวดหมู่ย่อยนี้
            $product_category_id = get_post_meta(get_the_ID(), 'linked_product_category', true);

            // ตรวจสอบว่ามีหมวดหมู่หลักหรือไม่
            if ($product_category_id) :
                $category_title = get_the_title($product_category_id);
                $category_link = get_permalink($product_category_id);
            ?>
                <a href="<?php echo esc_url($category_link); ?>" class="section-pagination-paragraph-box">
                    <p class="section-pagination-paragraph"><?php echo esc_html($category_title); ?></p>
                </a>
                <div class="section-pagination-paragraph-box">
                    <p class="section-pagination-paragraph">/</p>
                </div>
            <?php endif; ?>

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
                <!-- <div class="section-our-products-item-header-box">
                    <h2 class="section-our-products-item-header">เลือกหมวดหมู่ย่อย</h2>
                </div>

                <?php
                $args = array(
                    'post_type'      => 'subcategory',
                    'posts_per_page' => -1, 
                    'meta_key'       => 'subcategory_order', 
                    'orderby'        => 'meta_value_num',   
                    'order'          => 'ASC'             
                );
                $query = new WP_Query($args);
                ?>

                <div id="swiper4" class="section-our-products-item-select-container product-category-prototype swiper">
                    <div class="section-our-products-item-select-wrapper product-category-prototype swiper-wrapper">

                        <?php if ($query->have_posts()) : ?>
                            <?php while ($query->have_posts()) : $query->the_post(); 

                            ?>
                                <a href="<?php echo get_permalink(); ?>" class="section-our-products-item-select-box product-category-prototype swiper-slide active">
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
                </button> -->

                <?php
                $current_subcategory_id = get_the_ID(); // ดึง ID ของหมวดหมู่ย่อยที่กำลังดูอยู่

                $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => -1,
                    'meta_query'     => array(
                        array(
                            'key'     => 'linked_subcategory', // ฟิลด์ที่เก็บ ID ของหมวดหมู่ย่อย
                            'value'   => $current_subcategory_id,
                            'compare' => '='
                        )
                    )
                );

                $query = new WP_Query($args);
                ?>

                <!-- <p class="section-find-products-paragraph">
                    ค้นพบสินค้า <?php echo esc_html($query->found_posts); ?> ชิ้น
                </p> -->

                <div id="home-category-wrapper">
                    <div class="section-our-products-item-more-information-container">
                        <div class="section-our-products-item-more-information-wrapper">
                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
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

    </section>

    <section class="section-content-footer">
      <div class="section-content-footer-wrapper">
          <div class="section-content-footer-header-box">
              <h2 class="section-content-footer-header">
                  <?php echo esc_html( get_post_meta( get_the_ID(), 'subcategory_footer_header', true ) ); ?>
              </h2>
          </div>
          <div class="section-content-footer-detail-box">
                <div class="section-content-footer-detail-parahraph">
                    <?php echo wp_kses_post( get_post_meta( get_the_ID(), 'subcategory_footer_detail_paragraph', true ) ); ?>
                </div>
          </div>
      </div>
  </section>



</main>

<?php
get_footer();
?>
