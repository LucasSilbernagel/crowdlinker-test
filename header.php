<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <!-- Import Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Merriweather&display=swap" rel="stylesheet"> 

<!-- Import FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

  <!-- Connect to stylesheet -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

  <header>
    <div class="wrapper">
      <div class="hero">
      
        <div class="topContainer">
          <!-- Header logo -->
          <?php
            $header_logo = get_field('header_logo');
            if( $header_logo ) { ?>
              <img class="headerLogo" src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" />
          <?php } ?>

          <!-- CTA button -->
          <button class="cta header-cta"><?php the_field('cta_button_text'); ?></button>
        </div>

      </div>
    </div>
  </header>

  <main>
    <div class="wrapper">
