<?php get_header();?>



     
        <section id="cafe">
            <div  class="image-container">
        <img id="imgDev" src="<?php echo get_stylesheet_directory_uri().'/assets/images/design.jpg' ?>" alt="image de bureau">
        <h1 class="title1">Développeur Web</h1>
        <h1 class="title2"> Wordpress</h1>
        </div>
        </section>
        <section id="hero">
    <div id="leftHero">
    <p id ="presentation">Bonjour, je suis Kévin Philippon, développeur front-end passionné situé en France.</p>
    </div>
        <div id="rightHero">
           
        <?php get_template_part('templates_part/swiper');?>
        </div>
</section>

          <section id="projet">
            <h2>
              Mes projets
            </h2>

          </section>
          
          
         
          <section class="galerie">
    <?php
    $categories = get_terms(
        array(
            'taxonomy' => 'categorie', // assurez-vous que la taxonomie existe
            'orderby' => 'name',
        ) 
    );

    if ( !is_wp_error( $categories ) && !empty( $categories ) ) :
    ?>
        <select id="category-filter">
            <option value="">Compétence</option>
            <?php
            foreach ( $categories as $category ) :
                ?><option value="<?php echo esc_attr( $category->term_id ); ?>"><?php echo esc_html( $category->name ); ?></option><?php
            endforeach;
            ?>
        </select>
    <?php
    endif;
    ?>


    <div id="posts-container">
        <?php 
        $publications = new WP_Query([
            'post_type' => 'projet',
            'posts_per_page' => 4,
            'orderby' => 'date',
            'order' => 'DESC',
            'paged' => 1,
        ]);
        ?>

        <?php if($publications->have_posts()): ?>
            <?php 
            while ($publications->have_posts()): $publications->the_post();
            get_template_part('templates_part/content');
            endwhile;
            ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>
<div id="bouton">
<button id="btnL" type="button">Plus de projets</button>
</div>


<?php get_footer();?>