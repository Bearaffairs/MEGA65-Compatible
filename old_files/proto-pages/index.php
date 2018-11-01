<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mega65 Compatability</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap Content
  ================================================== -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Font Awesome Icons
  ================================================== -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <!-- Sticky Footer Navbar Styling -->
  <link rel="stylesheet" type="text/css" href="./css/sticky-footer-navbar.css"/>

</head>

<body background="./img/dark_bg.jpg">
  <!-- Header -->
  <header class="bg-dark navbar navbar-header navbar-expand-sm navbar-dark p5">
    <nav class="container">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="index.php"><img src="./img/MEGA65_logo_shadow.png" alt="logo" style="height:40px;"></a>
      <!-- Links -->
      <ul class="navbar-nav d-flex justify-content-end">
        <li class="nav-item active"><a class="nav-link" href="./index.php">Home</a></li>
        <li class="nav-item "><a class="nav-link" href="./compatibility.php">Compatibility List</a></li>
        <li class="nav-item"><a class="nav-link" href="./reporter.php">Reporting Tool </a></li>
      </ul>
    </nav>
  </header>
  <!-- Header End -->

  <!------------------>
  <!-- Page Content -->
  <!------------------>
  <!-- Page overview -->
  <section class="jumbotron jumbotron-fluid bg-danger text-light">
    <div class="container">
      <h1 class="display-4">MEGA65 Compatibility Project</h1>
      <p class="lead">A complete 8-bit computer running around 50x faster than a C64 while being highly compatible.</p>
    </div>
  </section>

  <!-- Main content -->
  <main class="container text-light">
    <div class="row">
    <section class="col-sm-6">
      <h3 class="display-4 ">A retro classic given life in the 21st century</h3>
      <p class="lead">The MEGA65 is not an emulator but a real 8-bit computer with real gun-racing video chip and internal floppy drive!</p>
      <p>C65 design, mechanical keyboard, hd output, sd card support, ethernet, extended memory and other features increase the fun without spoiling the 8-bit feel.
      Hardware designs and software are open-source (lgpl).</p>
      <p class="text-center">
        <a href="./compatibility.php" class="btn btn-warning btn-lg mb-3" role="button"><i class="fas fa-gamepad"></i> View Game Compatibility</a>
      </p>
    </section>
    <section class="col-sm-6">
      <!-- <figure class="figure">
        <img src="./img/MEGA65_render.jpg" class="img-fluid" alt="Render of the MEGA65 hardware">
        <figcaption class="figure-caption text-right">A modern classic rendered to life.</figcaption>
      </figure> -->
      <img src="./img/sprites.png" class="img-fluid" alt="Commodore64Sprites">
    </section>
</div>
  </main>

  <!-- Page Content end-->
  <!------------------>

  <!-- Footer -->
  <footer class="border-top bg-dark text-light footer">
    <div class="container">
      <span class="float-right"><a href="#">Back to top</a></span>
      <span class="float-left"><a href="http://mega65.org/">Learn more about the MEGA65 Project</a> Site by Blake Hutt & Lukas Meinhold-Musiela 2018</span>
    </div>
  </footer>
</body>
</html>
