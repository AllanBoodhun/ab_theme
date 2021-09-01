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
        <?php echo do_shortcode('[metaslider id="117"]'); ?>
      </div>
      <div class="presentation-course">
        <h1 class="underline"><?php the_field('titre'); ?></h1>
        <p> <?php the_field('description'); ?> </p>
        <button>Je m'inscris</button>
      </div>
    </div>
    <div class="les-parcours">
      <h1 class="underline">Les Parcours</h1>
      <div class="parcours">
        <div class="course">
          <h1><?php the_field('titre_course_trail'); ?> </h1>
          <p> <?php the_field('trail_urbain'); ?> </p>
        </div>
        <div class="carte">
          <img src="<?php the_field('parcours_trail'); ?>" alt="">
        </div>
      </div>
      <div class="parcours">
        <div class="course">
          <h1><?php the_field('titre_course_herons'); ?> </h1>
          <p> <?php the_field('boucle_herons'); ?> </p>
        </div>
        <div class="carte">
          <img src="<?php the_field('parcours_herons'); ?>" alt="">
        </div>
      </div>
      <div class="parcours">
        <div class="course">
          <h1><?php the_field('titre_défi'); ?> </h1>
          <p> <?php the_field('description_defi'); ?> </p>
        </div>
          <div class="carte">
            <img src="<?php the_field('img_accueil'); ?>" alt="">
          </div>
      </div>
    </div>
  </div>

    <h1 class="underline">Inscriptions </h1>
  <div class="inscriptions">
    <p> <?php the_field('boucle_herons'); ?> </p>
    <button>Je m'inscris</button>
  </div>

  <div class="infos">
    <h1 class="underline">Infos Pratiques </h1>

    <div class="cards">
      <div class="card">
        <div class="content">
          <div class="front">
            <h2> <?php the_field('titre_info_1'); ?> </h2>
          </div>
          <div class="back">
            <h2> <?php the_field('titre_info_1'); ?> </h2>
            <p> <?php the_field('description_info_1'); ?> </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="front">
            <h2> <?php the_field('titre_info_2'); ?> </h2>
          </div>
          <div class="back">
            <h2> <?php the_field('titre_info_2'); ?> </h2>
            <p> <?php the_field('description_info_2'); ?> </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="front">
            <h2> <?php the_field('titre_info_3'); ?> </h2>
          </div>
          <div class="back">
            <h2> <?php the_field('titre_info_3'); ?> </h2>
            <p> <?php the_field('description_info_3'); ?> </p>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<?php get_footer(); ?>
