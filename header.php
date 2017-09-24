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
      <div class="col-sm-4 col-sm-offset-4 text-center logo-wrap">
        <a href="<?php bloginfo('url'); ?>">
          <div class="logo">
            <div class="logo-inner">
              <h1>The Simple Stoic</h1>
            </div>
          </div><!-- logo -->
        </a>
      </div>
      <div class="col-sm-6 col-sm-offset-3">
        <h3 class="slogan text-center">Test driven strategies towards financial and mental freedom.</h3>
      </div>
    </div>
  </header>
