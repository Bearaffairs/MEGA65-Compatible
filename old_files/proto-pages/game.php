<?php
  /* Initialise blank value */
  $softwareTitleValue = '';
  $softwareDeveloperValue = '';
  $softwarePublisherValue = '';
  $softwareGenreValue = '';
  $softwareYearValue = '';
  $softwareCompatibilityValue = '';
  $softwareIssuesValue = '';
  $xmlFilePath = '';

  function getCompatabilityStars($inStr) {
    $starRating = "N/A";
    switch ($inStr) {
      case 1:  $starRating = '&#9733;'; break;
      case 2:  $starRating = '&#9733;&#9733;'; break;
      case 3:  $starRating = '&#9733;&#9733;&#9733;'; break;
      case 4:  $starRating = '&#9733;&#9733;&#9733;&#9733;'; break;
      case 5:  $starRating = '&#9733;&#9733;&#9733;&#9733;&#9733;'; break;
      default: $starRating = 'Untested';
    }
    // Return number of star symbols
    return $starRating;
  }

  //Get xml directory from URI
  if (!empty($_GET['xml'])) {
    // echo 'something in xml: '. $_GET['xml']; //Trace statement

    /* Proceed only if xml path is valid */
    if (file_exists($_GET['xml'])) {
      // echo "<br/>file exists"; //Trace statement
      $xmlFilePath = $_GET['xml'];
      $xml = simplexml_load_file($_GET['xml']);

      /* Set values from xml file */
      $softwareTitleValue = trim($xml->game->title);
      $softwareDeveloperValue = trim($xml->game->developer);
      $softwarePublisherValue = trim($xml->game->publisher);
      $softwareGenreValue = trim($xml->game->genre);
      $softwareYearValue = trim($xml->game->year);
      $softwareCompatibilityValue = trim($xml->game->compatibility);
      $softwareIssuesValue = trim($xml->game->issues);

    } //file exists block
  } else {
    //header("Location:" . "compatibility.php");
  }
?>

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

<body>
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
  <section class="jumbotron jumbotron-fluid bg-success text-light">
    <div class="container">
      <h1 class="display-4">Game Compatibility Information</h1>
      <p class="lead">Information about a specific tested game.</p>
    </div>
  </section>

  <!-- Main content -->
  <main class="container">
    <!-- Game Title -->
    <section>
      <h2 class="display-4 "><?php echo $softwareTitleValue; ?>
        <a class="btn btn-outline-primary mb-3 d-inline" role="button"
        <?php echo "href='./reporter.php?xml=$xmlFilePath'"?>
           ><i class="fas fa-pencil-alt"></i> Edit</a>
      </h2>
      <p class="lead">Compatibility Rating: <?php echo getCompatabilityStars($softwareCompatibilityValue); ?></p>
    </section>
    <!-- Game Information -->
    <section class="row">
      <div class="col-sm-6">
        <h3>Developer</h3>
        <p><?php echo $softwareDeveloperValue; ?></p>
        <h3>Publisher</h3>
        <p><?php echo $softwarePublisherValue; ?></p>
        <h3>Genre</h3>
        <p><?php echo $softwareGenreValue; ?></p>
        <h3>Year Released</h3>
        <p><?php echo $softwareYearValue; ?></p>
      </div>
      <div class="col-sm-6">
        <h3><i class="far fa-clock"></i> Compatibility Last Updated</h3>
        <p class="text-monospace"><?php echo date("Y-m-d H:i:s T", filemtime($xmlFilePath)) ?></p>
        <h3><i class="fas fa-bug"></i> Known Bugs & Issues</h3>
        <p><?php echo $softwareIssuesValue; ?></p>
      </div>
    </section>

    <p class="text-center">
      <a href="./compatibility.php" class="btn btn-warning btn-lg mb-3" role="button"><i class="fas fa-gamepad"></i> View Game Compatibility</a>
    </p>
  </main>

  <!-- Page Content end-->
  <!------------------>

  <!-- Footer -->
  <footer class="border-top bg-light footer">
    <div class="container">
      <span class="float-right"><a href="#">Back to top</a></span>
      <span><a href="http://mega65.org/">Learn more about the MEGA65 Project</a> Site by Blake Hutt & Lukas Meinhold-Musiela 2018</span>
    </div>
  </footer>
</body>
</html>
