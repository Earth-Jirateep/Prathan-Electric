<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <?php get_header(); ?>

  <main>
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          the_title( '<h2>', '</h2>' );
          the_content();
        endwhile;
      else :
        echo '<p>No content found</p>';
      endif;
    ?>
  </main>

  <?php get_footer(); ?>

</body>
</html>
