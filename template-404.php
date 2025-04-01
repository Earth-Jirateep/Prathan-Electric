<?php
/**
 * Template Name: 404
 * Description: A custom home page template for the website.
 */

get_header(); 
?>

<main id="main" class="site-main">
    <section class="section-404">
        <div class="section-404-wrapper">
            <div class="section-404-number-box">
                <p class="section-404-number">404</p>
            </div>
            <div class="section-404-praragraph-box">
                <p class="section-404-praragraph">ขออภัยไม่พบหน้าที่คุณต้องการ</p>
            </div>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="section-404-button">
                <p class="section-404-button-paragraph">กลับไปหน้าหลัก</p>
            </a>

        </div>

    </section>

</main>

<?php
get_footer(); 
?>
