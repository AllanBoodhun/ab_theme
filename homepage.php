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
        <?php echo do_shortcode('[metaslider id="117"]'); ?>
      </div>
      <div class="presentation-course">
        <h2><?php the_field('titre'); ?></h2>
        <p> <?php the_field('description'); ?> </p>
        <button>Je m'inscris</button>
      </div>
    </div>
    <div class="les-parcours">
      <h2>Les Parcours</h2>
      <div class="parcours">
        <div class="course">
          <h3><?php the_field('titre_course_trail'); ?> </h2>
            <p> <?php the_field('trail_urbain'); ?> </p>
        </div>
        <div class="carte">
          <img src="<?php the_field('parcours_trail'); ?>" alt="">
        </div>
      </div>
      <div class="parcours">
        <div class="course">
          <h3><?php the_field('titre_course_herons'); ?> </h2>
            <p> <?php the_field('boucle_herons'); ?> </p>
        </div>
        <div class="carte">
          <img src="<?php the_field('parcours_herons'); ?>" alt="">
        </div>
      </div>
      <div class="parcours">
        <div class="course">
          <h3><?php the_field('titre_défi'); ?> </h2>
            <p> <?php the_field('description_defi'); ?> </p>
        </div>
        <div class="carte">
          <img src="<?php the_field('img_accueil'); ?>" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="inscriptions">

    <h2>Inscriptions </h2>
    <div class="text-button">
      <div class="text">
      <p> <?php the_field('boucle_herons'); ?> </p>
      </div>
     
      <button>Je m'inscris</button>
    </div>
  </div>

  <div class="infos">
    <h2>Infos Pratiques </h2>

    <div class="cards">
      <div class="card">
        <div class="content">
          <div class="front">
            <h3> <?php the_field('titre_info_1'); ?> </h2>
              <img src="<?php the_field('logo_info_1'); ?>" alt="">
          </div>
          <div class="back">
            <h3> <?php the_field('titre_info_1'); ?> </h2>
              <p> <?php the_field('description_info_1'); ?> </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="front">
            <h3> <?php the_field('titre_info_2'); ?> </h2>
              <img src="<?php the_field('logo_info_2'); ?>" alt="">
          </div>
          <div class="back">
            <h3> <?php the_field('titre_info_2'); ?> </h2>
              <p> <?php the_field('description_info_2'); ?> </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="content">
          <div class="front">
            <h3> <?php the_field('titre_info_3'); ?> </h2>
              <img src="<?php the_field('logo_info_3'); ?>" alt="">
          </div>
          <div class="back">
            <h3> <?php the_field('titre_info_3'); ?> </h2>
              <p> <?php the_field('description_info_3'); ?> </p>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>


<?php get_footer(); ?>