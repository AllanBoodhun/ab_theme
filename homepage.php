<!-- /**
 * Template Name: Homepage
 * 
 */ -->
<?php 
$GLOBALS['logo'] = get_field('logo');

?>



<?php get_header(); ?>
<div class="wraper">

  <div class="homepage">
    <div class="banner">
      <div class="slider-home">
        <!-- idéalement un slider photos -->
        <img src="<?php the_field('img_accueil'); ?>" alt="">
      </div>
      <div class="presentation-course">
        <h1 class="underline"><?php the_field('titre'); ?></h1>
        <p> <?php the_field('description'); ?> </p>
        <button>Je m'inscris</button>
      </div>
    </div>
    <div class="parcours">
      <h1 class="underline">Les Parcours</h1>
      <div class="trail-urbain course">
        <h1><?php the_field('titre_course_trail'); ?> </h1>
        <p> <?php the_field('trail_urbain'); ?> </p>
        <div class="carte">
          <img src="<?php the_field('parcours_trail'); ?>" alt="">
        </div>
      </div>
      <div class="boucle-heron course">
        <h1><?php the_field('titre_course_herons'); ?> </h1>
        <p> <?php the_field('boucle_herons'); ?> </p>
        <div class="carte">
          <img src="<?php the_field('parcours_herons'); ?>" alt="">
        </div>
      </div>
      <div class="defi course">
        <h1><?php the_field('titre_défi'); ?> </h1>
        <p> <?php the_field('description_defi'); ?> </p>
        <div class="carte">
          <img src="<?php the_field('img_accueil'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="inscriptions">
    <h1 class="underline">Inscriptions </h1>
    <p> <?php the_field('boucle_herons'); ?> </p>
    <button>Je m'inscris</button>
  </div>

  <div class="infos">
    <h1>Infos Pratiques </h1>

    <div class="infos cards">
      <div class="dossard">Dossards</div>
      <div class="recompenses">Récompenses</div>
      <div class="venir">Comment venir ?</div>
      <div class="eco">Notre démarche éco responsable</div>
    </div>
  </div>

</div>


<?php get_footer(); ?>
