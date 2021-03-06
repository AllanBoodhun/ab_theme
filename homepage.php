<!-- /**
 * Template Name: Homepage
 * 
 */ -->

<?php get_header(); ?>
<div class="main-banner">
  <h1>Trail de chantenay</h1>
  <div class="anim_scroll"></div>
  <img src="<?= get_field('main_banner'); ?>" alt="">
</div>
<div class="homepage">

  <div class="banner innerWidth">
    <div class="slider-home">
      <?php echo do_shortcode('[metaslider id="52"]'); ?>
    </div>

    <div class="presentation-course">
      <h2><?php the_field('titre'); ?></h2>
      <p> <?php the_field('description'); ?> </p>
      <?php if( get_field('lien_inscriptions')):?>
        <button class="button-primary"> <?php the_field('lien_inscriptions'); ?></button>
      <?php endif; ?>
    </div>
  </div>

  <div class="les-parcours innerwidth">
    <h2>Les Parcours</h2>
    <div class="parcours ">
      <div class="courses">
        <input type="radio" name="course" id="trail" value="trail" checked>
        <label for="trail">
          <div class="titre">
            <span><img src=" <?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg' ?>" class="chevron actif" alt=""></span>
            <h3><?php the_field('titre_course_trail'); ?> </h3>
          </div>
          <div class="description">
            <p> <?php the_field('trail_urbain'); ?> </p>
          </div>
        </label>
        <input type="radio" name="course" id="herons" value="herons">
        <label for="herons">
          <div class="titre">
            <span><img src=" <?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg' ?>" class="chevron " alt=""></span>
            <h3><?php the_field('titre_course_herons'); ?> </h3>
          </div>
          <div class="description">
            <p> <?php the_field('boucle_herons'); ?> </p>
          </div>
        </label>
        <input type="radio" name="course" id="defi" value="defi">
        <label for="defi">
          <div class="titre">
            <span><img src=" <?php echo get_template_directory_uri() . '/assets/images/chevron-left.svg' ?>" class="chevron " alt=""></span>
            <h3><?php the_field('titre_defi_butte'); ?> </h3>
          </div>
          <div class="description yelloback">
            <p> <?php the_field('description_defi'); ?> </p>
          </div>
        </label>
      </div>
      <div class="carte">
        <img src="<?php the_field('parcours_trail'); ?>" class ="image-parcours" data-course="trail">
        <img src="<?php the_field('parcours_herons'); ?>" class="close image-parcours" data-course="herons">
        <img src="<?php the_field('parcours_defi'); ?>" class="close image-parcours"  data-course="defi">
      </div>
    </div>
  </div>



  <div id="inscriptions" class="inscriptions">
    <h2>Inscriptions </h2>
    <div class="text-button innerwidth ">
      <div class="text">
        <p> <?php the_field('inscriptions'); ?> </p>
      </div>
      <?php if(get_field('lien_inscriptions')):?>
        <button class="button-primary"> <?php the_field('lien_inscriptions'); ?> </button>
      <?php endif; ?>
    </div>
  </div>

  <div id="infos" class="infos innerLargeWidth">
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
      <h2>R??sultats </h2>
      <div class="text-button">
        <div class="text">
          <p> <?php the_field('resultats'); ?> </p>
        </div>
      </div>
    </div> -->

  <div id="galerie" class="innerLargewidth">
    <h2>Derni??res photos </h2>
    <div class="timeline">
      <div class="years-wrapper">
        <div class="years">
          <?php  
            $args = array(
              'post_type' => 'gallerie',
              'status'    => 'publish'
           );
           $query = new WP_Query( $args );
           if ( $query->have_posts() ) :?>

           
           <div class="container-years innerWidth">
            <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
              <input type="radio" name="years" id="<?= $post->ID ?>">  
              <label for="<?= $post->ID ?>"><?php the_title(); ?></label>
            <?php endwhile;
            wp_reset_postdata()?>
           </div>
          <?php endif; ?>
          <?php if ( $query->have_posts() ) :?>
           <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
           <div class="year-content hidden" data-year="<?= $post->ID ?>">
              <?php if($post->post_content): ?>
                  <?= the_content() ?>
              <?php endif; ?>
              </div>
              <?php endwhile;
            wp_reset_postdata()?>
         
            <?php endif; ?>
        </div><!-- .years -->
      </div><!-- .years-wrapper -->
    </div> <!-- .timeline -->
  </div>
</div>


<?php get_footer(); ?>