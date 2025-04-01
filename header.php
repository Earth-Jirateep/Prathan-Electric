<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
    <div class="header-top-wrapper">
      <div class="header-top-box">
        <a href="https://page.line.me/cqv3387x" class="header-top-line-box">
          <div class="header-top-line-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/header-top-line.png" alt="<?php bloginfo( 'name' ); ?> Logo">
          </div>
          <div class="header-top-line-paragraph-box">
            <p class="header-top-line-paragraph d">แชทไลน์ตอบเร็ว @prathan</p>
            <p class="header-top-line-paragraph m">@prathan</p>
          </div>
        </a>
        <div class="header-top-telephone-box">
          <div class="header-top-telephone-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/header-top-phone.png" alt="<?php bloginfo( 'name' ); ?> Logo">
          </div>
          <div class="header-top-telephone-paragraph-box">
            <p class="header-top-telephone-paragraph d"><a href="tel:02-892-7946">02-892-7946,</a>  <a href="tel:092-265-8564">092-265-8564</a></p>
            <p class="header-top-telephone-paragraph m"><a href="tel:02-892-7946">02-892-7946,</a>  <a href="tel:092-265-8564">092-265-8564</a></p>
          </div>
        </div>
      </div>

    </div>

    <div class="header-navigation-wrapper">

      <div class="header-navigation-box">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
        </a>
        <div class="navigation-bar">
          <?php wp_nav_menu( array(
              'theme_location' => 'prathan-electric-menu',
              'container' => 'nav',
              'container_class' => 'main-navigation',
              'menu_class' => 'nav-menu',
              'fallback_cb' => false
          ) ); ?>

          <div class="close-menu-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/close.png" alt="<?php bloginfo( 'name' ); ?> Logo">
          </div>

          <div class="section-header-first-bottom-wrapper">
            <a href="https://page.line.me/cqv3387x" class="section-header-first-bottom-button-first">
              <div class="section-header-first-bottom-button-first-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/image-footer-contact-2.png" alt="<?php bloginfo( 'name' ); ?> Logo">
              </div>
              <p class="section-header-first-bottom-button-first-paragraph">สั่งสินค้า @prathan</p>
            </a>
            <a href="#" class="section-header-first-bottom-button-second">
              <p class="section-header-first-bottom-button-first-paragraph">เลือกดูสินค้า</p>
            </a>
          </div>

        </div>

        <div class="header-search-container">
          <form action="<?php echo site_url('search-result-prototype'); ?>" method="GET">
              <input type="text" name="q" placeholder="ค้นหาสินค้า">
              <button type="submit" class="header-search-image">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/image-search.png" alt="<?php bloginfo('name'); ?> Logo">
              </button>
          </form>
        </div>

      </div>

      <div class="hamburger-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <div class="header-call-to-action-floating-wrapper">
          <div class="header-call-to-action-floating-container">
            <a href="https://page.line.me/cqv3387x" class="header-call-to-action-floating-button">
              <div class="header-call-to-action-floating-line-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/header-floating-line-logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
              </div>
              <div class="header-call-to-action-floating-line-paragraph-box">
                <p class="header-call-to-action-floating-line-paragraph">สั่งสินค้าผ่านไลน์</p>
              </div>
            </a>
            <a href="<?php echo site_url('contact-us'); ?>" class="header-call-to-action-floating-button">
              <div class="header-call-to-action-floating-location-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header/header-floating-location-logo.png" alt="<?php bloginfo( 'name' ); ?> Logo">
              </div>
              <div class="header-call-to-action-floating-location-paragraph-box">
                <p class="header-call-to-action-floating-location-paragraph">สาขาของเรา</p>
              </div>
            </a>
          </div>
          <button id="toggle-floating" class="header-call-to-action-floating-button" type="button">
            <div class="header-call-to-action-floating-order-image">
              <img class="d" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/header-floating-arrow.png" alt="<?php bloginfo( 'name' ); ?> Logo">
              <img class="m" src="<?php echo get_template_directory_uri(); ?>/assets/images/header/header-floating-arrow-m.png" alt="<?php bloginfo( 'name' ); ?> Logo">
            </div>
            <div class="header-call-to-action-floating-order-paragraph-box">
              <p class="header-call-to-action-floating-order-paragraph">สั่งสินค้ากับเรา</p>
            </div>
          </button>

      </div>

    </div>

    
  </header>
