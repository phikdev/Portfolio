
<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: white;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    swiper-container {
      width: 100%;
      height: 100%;
    }

    swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>


  <swiper-container class="mySwiper" pagination="true">
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/html.png' ?>" alt="logo html"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/css3.png' ?>" alt="logo css"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/js.png' ?>" alt="logo javascript"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/sass (2).png' ?>" alt="logo sass"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/php.png' ?>" alt="logo php"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/wp.png' ?>" alt="logo wordpress"></swiper-slide>
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>