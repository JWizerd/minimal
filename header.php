<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

</head>
<body>
  <header class="container">
    <nav class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <?php get_template_part('navigation') ?>
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3 text-center logo-wrap">
        <h1>
          <a href="<?php bloginfo('url'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="Simple Stoic: Stoicism Blog">
          </a>
        </h1>
      </div>
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="slogan text-center">Test driven strategies towards financial and mental freedom.</h3>
      </div>
    </div>
  </header>
