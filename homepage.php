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
        <?php echo do_shortcode('[metaslider id="52"]'); ?>
      </div>

      <div class="presentation-course">
        <h2><?php the_field('titre'); ?></h2>
        <p> <?php the_field('description'); ?> </p>
        <button> <?php the_field('lien_inscriptions'); ?></button>
      </div>
    </div>

    <div class="les-parcours">
      <h2>Les Parcours</h2>

      <div class="parcours">
        <div class="courses">
          <div class="course" data-course='trail'>
            <div class="titre">
              <a href=""><img src=" <?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg' ?>" class="chevron actif" alt=""></a>
              <h3><?php the_field('titre_course_trail'); ?> </h3>
            </div>
            <div class="description">
              <p> <?php the_field('trail_urbain'); ?> </p>
            </div>
          </div>
          <div class="course" data-course='herons'>
            <div class="titre">
              <a href=""><img src=" <?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg' ?>" class="chevron " alt=""></a>
              <h3><?php the_field('titre_course_herons'); ?> </h3>
            </div>
            <div class="description close">
              <p> <?php the_field('boucle_herons'); ?> </p>
            </div>
          </div>
          <div class="course" data-course='defi'>
            <div class="titre">
              <a href=""><img src=" <?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg' ?>" class="chevron " alt=""></a>
              <h3><?php the_field('titre_defi_butte'); ?> </h3>
            </div>
            <div class="description yelloback close">
              <p> <?php the_field('description_defi'); ?> </p>
            </div>
          </div>
        </div>
        <div class="carte">
          <img src="<?php the_field('parcours_trail'); ?>" alt="" data-course="trail">
          <img src="<?php the_field('parcours_herons'); ?>" class="close" alt="" data-course="herons">
          <img src="<?php the_field('photo_defi'); ?>" class="close" alt="" data-course="defi">
        </div>
      </div>
    </div>



    <div id="inscriptions" class="inscriptions">
      <h2>Inscriptions </h2>
      <div class="text-button">
        <div class="text">
          <p> <?php the_field('inscriptions'); ?> </p>
        </div>
        <button> <?php the_field('lien_inscriptions'); ?> </button>
      </div>
    </div>

    <div id="infos" class="infos">
      <h2>Infos Pratiques </h2>

      <div class="cards">

        <div class="card">
          <div class="content">
            <div class="front">
              <h3> <?php the_field('titre_info_1'); ?> </h3>
              <img src="<?php the_field('logo_info_1'); ?>" alt="">
            </div>
            <div class="back">
              <h3> <?php the_field('titre_info_1'); ?> </h3>
              <p> <?php the_field('description_info_1'); ?> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="content">
            <div class="front">
              <h3> <?php the_field('titre_info_2'); ?> </h3>
              <img src="<?php the_field('logo_info_2'); ?>" alt="">
            </div>
            <div class="back">
              <h3> <?php the_field('titre_info_2'); ?> </h3>
              <p> <?php the_field('description_info_2'); ?> </p>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="content">
            <div class="front">
              <h3> <?php the_field('titre_info_3'); ?> </h3>
              <img src="<?php the_field('logo_info_3'); ?>" alt="">
            </div>
            <div class="back">
              <h3> <?php the_field('titre_info_3'); ?> </h3>
              <p> <?php the_field('description_info_3'); ?> </p>
            </div>
          </div>
        </div>

        <div class="card" id="resultats">
          <div class="content">
            <div class="front">
              <h3> <?php the_field('titre_info_4'); ?> </h3>
              <img src="<?php the_field('logo_info_4'); ?>" alt="">
            </div>
            <div class="back">
              <h3> <?php the_field('titre_info_4'); ?> </h3>
              <p> <?php the_field('description_info_4'); ?> </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- CETTE DIV PART DANS UNE DES "CARD" CI DESSUS -->
    <!-- <div id="resultats" class="resultats">
      <h2>Résultats </h2>
      <div class="text-button">
        <div class="text">
          <p> <?php the_field('resultats'); ?> </p>
        </div>
      </div>
    </div> -->

    <div id="galerie">
      <h2>Dernières photos </h2>
      <div class="timeline">
        <div class="years-wrapper">
          <div class="years">
            <ul>
              <?php if (get_field('afficher_2017')) : ?>
                <li class="year"><?php the_field('annee_2017') ?></li>
              <?php endif ?>
              <?php if (get_field('afficher__2018')) : ?>
                <li class="year"><?php the_field('annee_2018') ?></li>
              <?php endif ?>
              <?php if (get_field('afficher__2019')) : ?>
                <li class="year"><?php the_field('annee_2019') ?></li>
              <?php endif ?>
              <?php if (get_field('afficher__2021')) : ?>
                <li class="year"><?php the_field('annee_2021') ?></li>
              <?php endif ?>
            </ul>

          </div><!-- .years -->
        </div><!-- .years-wrapper -->
      </div> <!-- .timeline -->

      <div class="years-content">
        <?php if (get_field('afficher__2021')) : ?>
          <div class="year-pics close" data-year="2021">
            <p> <?php echo do_shortcode(the_field('gallerie_2021')); ?> </p>
          </div>
        <?php endif ?>

        <?php if (get_field('afficher__2019')) : ?>
          <div class="year-pics close" data-year="2019">
            <p> <?php echo do_shortcode(get_field('gallerie2019')); ?> </p>

          </div>
        <?php endif ?>

        <?php if (get_field('afficher__2018')) : ?>
          <div class="year-pics close" data-year="2018">
            <p> <?php echo do_shortcode(get_field('gallerie2018')); ?> </p>
          </div>
        <?php endif ?>

        <?php if (get_field('afficher_2017')) : ?>
          <div class="year-pics close" data-year="2017">
            <p> <?php echo do_shortcode(get_field('gallerie2017')); ?> </p>
          </div>
        <?php endif ?>
      </div> <!-- .year-content -->
    </div>

  </div>
</div>


<?php get_footer(); ?>
