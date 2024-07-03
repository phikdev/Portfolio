<!-- declaration des variables -->
<?php 
$categories = get_the_terms( get_the_ID(), 'categorie' );
$nbCompetence = 0;
?>
<?php 
get_header();
?>
<main>
	<section id="single">
 	<div id ="bloc-description">
		<div id="ref">
			<h2 id="titre"><?php the_title()?><h2>
				
			<h3 id ="description">Compétence : <?php   foreach ( $categories as $categorie ) :
			if ($nbCompetence > 0 ){
				echo esc_html(', ');
			};
			
             echo esc_html( $categorie->name ); 
			 $nbCompetence++;
            endforeach;?></h3>
			
			
		</div>
		<div class="contexte">
		<?php echo get_field ('contexte');?>
		</div>
		</br>
		<div class="description">
		<?php echo get_field ('description');?>
		</div>
		
		<a href="<?php echo get_field ('web');?>">
		<?php echo get_field ('web');?>
		</a>
		<div>
		
		</div>
	</div>
	
	
	<div id="bloc-image">
	<img id="photo" src="<?php echo get_the_post_thumbnail_url() ?>" alt="Photo" > 
	</div>
</section>



</main>



<?php
get_footer();?>