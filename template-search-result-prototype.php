<?php
/**
 * Template Name: Search Result Prototype
 * Description: ค้นหาสินค้าจาก Title ที่ตรงกับคำค้นหา
 */

get_header(); 

// รับค่าค้นหาจาก URL
$search_query = isset($_GET['q']) ? sanitize_text_field($_GET['q']) : '';

// Query สินค้าจากคำค้นหา
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 12, // จำกัด 12 รายการต่อหน้า
    'paged'          => get_query_var('paged') ? get_query_var('paged') : 1, // รองรับ Pagination
    's'              => $search_query, // ค้นหาเฉพาะ Title
);

$search_results = new WP_Query($args);

?>

<main id="main" class="site-main">
    
    <section class="section-pagination">
        <div class="section-pagination-wrapper">
            <a href="<?php echo site_url(); ?>" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">หน้าแรก</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <a href="#" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">ผลลัพธ์การค้นหาคำว่า “<?php echo esc_html($search_query); ?>”</p>
            </a>
        </div>
    </section>

    <section class="section-hero-page brand-prototype">
        <div class="section-hero-page-wrapper">
            <div class="section-hero-page-box">
                <div class="section-hero-page-header-box">
                    <h1 class="section-hero-page-header">ผลลัพธ์การค้นหาคำว่า “<?php echo esc_html($search_query); ?>”</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section-our-products background-white">
        <div class="section-our-products-wrapper">
            
            <div class="section-our-products-item-container">
                <div class="section-find-products-box">
                    <p class="section-find-products-paragraph">
                        ค้นพบสินค้า <?php echo esc_html($search_results->found_posts); ?> ชิ้น
                    </p>
                </div>

                <div id="home-category-wrapper">

                    <div class="section-our-products-item-more-information-container">
                        <div class="section-our-products-item-more-information-wrapper">
                            
                            <?php if ($search_results->have_posts()) : ?>
                                <?php while ($search_results->have_posts()) : $search_results->the_post(); ?>
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
                                                    <?php echo wp_trim_words(get_post_meta(get_the_ID(), 'footer_detail_paragraph', true), 20, '...'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p style="color: red;">❌ ไม่พบสินค้าที่เกี่ยวข้องกับ "<?php echo esc_html($search_query); ?>"</p>
                            <?php endif; ?>

                        </div>
                    </div>

                </div>

                <!-- Pagination -->
                <div class="section-our-products-item-more-information-pagination-wrapper">
                    <?php
                    echo paginate_links(array(
                        'total'   => $search_results->max_num_pages,
                        'current' => max(1, get_query_var('paged')),
                        'format'  => '?paged=%#%',
                        'prev_text' => '« ก่อนหน้า',
                        'next_text' => 'ถัดไป »',
                    ));
                    ?>
                </div>

            </div>
        </div>
    </section>

</main>

<?php
get_footer();
?>
