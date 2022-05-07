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
      <div class="container-nav innerWidth">
        <div class="logo">
          <?= get_custom_logo(); ?>
        </div>
        <input type="checkbox" id="nav-burger">
        <label for="nav-burger">
          <span class="line line__top"></span>
          <span class="line line__mid"></span>
          <span class="line line__bot"></span>
        </label>
      <?php trail_menu(); ?>
 </div>
    </div>
