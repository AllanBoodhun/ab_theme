<!-- /**
 * Template Name: Homepage
 * 
 */ -->

<?php get_header(); ?>
<div class="wraper">

  <div class="homepage">

    <div class="slider-home">
      slider-photos de la course
    </div>
    <div class="presentation-course">
      <h1>La Course </h1>
      <p> <?php the_field('description'); ?> </p>
    </div>

    <div class="parcours">
      <div class="checkpoints">
        <div class="checkpoint1">checkpoint 1</div>
        <div class="checkpoint2">checkpoint 2</div>
        <div class="checkpoint3">checkpoint 3</div>
        <div class="checkpoint4">checkpoint 4</div>
      </div>
      <div class="carte">
        carte du parcours
      </div>
    </div>
  </div>

  <div class="inscriptions">
    <h1>Inscriptions </h1>

    <div class="inscris cards">
      <div class="date">date</div>
      <div class="dossard">dossard</div>
      <div class="tarif">tarif</div>
      <div class="reglement">reglement</div>
    </div>

    <div class="inscris-btn">Je m'inscris</div>
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
