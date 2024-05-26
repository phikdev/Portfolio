<?php get_header();?>
<section>
    <h1>
        Développeur Web / Développeur Wordpress
    </h1>
</section>
<section>
<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
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
  <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/html.png' ?>" alt="photo-header"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/css3.png' ?>" alt="photo-header"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/sass (2).png' ?>" alt="photo-header"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/js.png' ?>" alt="photo-header"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/php.png' ?>" alt="photo-header"></swiper-slide>
    <swiper-slide><img id="language" src="<?php echo get_stylesheet_directory_uri().'/assets/images/wp.png' ?>" alt="photo-header"></swiper-slide>
  </swiper-container>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>


</section>

<?php get_footer();?>