<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BOXING CLUB BEHREN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <script src="https://kit.fontawesome.com/a79506ba3d.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../public/assets/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


  <!-- test police Play -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Playball&display=swap" rel="stylesheet">

  <!-- police Poppins Arial -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- police i am a player -->
  <link href="https://fonts.cdnfonts.com/css/i-am-a-player" rel="stylesheet">

  <!-- police bodoni -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400..700;1,400..700&family=Play:wght@400;700&family=Playball&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>


<body>

  <?php

  session_start();

  include("../vue/header.php");

  if (isset($_GET['page'])) {
    if ($_GET['page'] == 1) {
      include("../vue/accueil.php");
    }
    if ($_GET['page'] == 2) {
      include("../vue/contact.php");
    }
    if ($_GET['page'] == 3) {
      include("../vue/a-propos.php");
    }
    if ($_GET['page'] == 4) {
      include("../vue/presentation-club.php");
    }
    if ($_GET['page'] == 5) {
      include("../vue/galerie.php");
    }
    // if ($_GET['page'] == 6) {
    //   include("../vue/imagePlanning.php");
    // }
    if ($_GET['page'] == 7) {
      include("../vue/competiteur.php");
    }
    if ($_GET['page'] == 8) {
      include("../vue/actualites.php");
    }
    if ($_GET['page'] == 9) {
      include("../vue/partenaires.php");
    }
    if ($_GET['page'] == 11) {
      include("../vue/actualiteView.php");
    }
  }
  include("../vue/footer.php");

  ?>

</body>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- mosaique photo -->
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    disable: window.innerWidth < 768
  });
</script>


<script>
  AOS.init();
</script>
<script src="./assets/js/script.js"></script>
</body>

</html>