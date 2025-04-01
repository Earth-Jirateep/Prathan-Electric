<?php
/**
 * The template for displaying single post.
 * 
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
            <a href="<?php echo home_url('article'); ?>" class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">บทความ</p>
            </a>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph">/</p>
            </div>
            <div class="section-pagination-paragraph-box">
                <p class="section-pagination-paragraph"><?php the_title(); ?></p>
            </div>
        </div>
    </section>

    <section class="article-content">
        <div class="article-content-wrapper">
            <div class="article-content-header">
                <h1><?php the_title(); ?></h1>
                <div class="article-content-header-detail">
                    <p class="article-content-header-date"><?php echo get_the_date('j F Y'); ?></p>
                    <div class="article-content-header-pipe">|</div>
                    <p class="article-content-header-poster">By <?php the_author(); ?></p>
                </div>
                <div class="article-content-header-image">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/default-article.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="article-content-container">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <section class="section-innovation-picture">
        <div class="section-innovation-picture-wrapper">
            <div class="section-innovation-picture-box">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/electrical-innovation/image-electrical-innovation-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <a href="#" class="section-innovation-picture-box">
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
                    $recent_posts = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post__not_in' => array(get_the_ID()),
                    ));
                    if ($recent_posts->have_posts()) : 
                        while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
                            <a href="" class="section-article-content-box featured-articles">
                                <div class="section-article-content-image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php else : ?>
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/article/default-article.png" alt="<?php bloginfo( 'name' ); ?> Logo">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="section-article-content-detail-wrapper">
                                    <div class="section-article-content-header-box">
                                        <h3 class="section-article-content-header"><?php the_title(); ?></h3>
                                    </div>
                                    <div class="section-article-content-paragraph-box">
                                        <p class="section-article-content-paragraph">
                                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
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
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer(); 
?>
