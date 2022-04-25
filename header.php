<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/477a276a77.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<body>
  <section id="site-trail-chantenay">

    <div class="navbar">
      <div class="logo">
        <img src="<?php echo $GLOBALS['logo']?>" alt="">
      </div>
      <!-- <ul class="menu responsive">
        <li><a href="#inscriptions" class="effect-underline">Inscription</a></li>
        <li><a href="#infos" class="effect-underline">Infos Pratiques</a></li>
        <li><a href="#resultats" class="effect-underline">Résultats</a></li>
        <li><a href="#galerie" class="effect-underline">Galerie Photos</a></li>
      </ul> -->
      <?php trail_menu(); ?>

      <a href="#!" class="nav-icon">  <img src="<?php echo get_template_directory_uri().'/assets/images/menu.svg'; ?>">
 </a>

    </div>
