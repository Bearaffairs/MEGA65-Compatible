<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mega65 Compatability</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <style> html,body{height:100%;}</style> -->
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

  <!-- Datatables
  ================================================== -->
  <!-- DataTables (Adding sortables tables - https://datatables.net/) -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

<body>
  <!-- Header -->
  <header class="bg-dark navbar navbar-header navbar-expand-sm navbar-dark p5">
    <nav class="container">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="index.php"><img src="./img/MEGA65_logo_shadow.png" alt="logo" style="height:40px;"></a>
      <!-- Links -->
      <ul class="navbar-nav d-flex justify-content-end">
        <li class="nav-item"><a class="nav-link" href="./index.php">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="./compatibility.php">Compatibility List</a></li>
        <li class="nav-item"><a class="nav-link" href="./reporter.php">Reporting Tool </a></li>
      </ul>
    </nav>
  </header>
  <!-- Header End -->

  <!------------------>
  <!-- Page Content -->
  <!------------------>
  <!-- Page overview -->
  <section class="jumbotron jumbotron-fluid bg-warning">
    <div class="container">
      <h1 class="display-4">Game Compatability</h1>
      <p class="lead">The MEGA65 is a spiritual succesor to the Commodore64 with aims of full backwards compatability.</p>
    </div>
  </section>

  <!-- Main content -->
  <main class="container">

    <section class="row">
        <div class="col-md-6">
            <h2>The MEGA65 & Compatibility</h2>
            <p class="lead">Backwards compatability is difficult beast to tame.</p>
            <p>Some software on the Commodore64 utilized undocumented features and quirks of the hardwaren such as <em>illegal opcodes</em>.
              This may or may not carry over to the MEGA65 and thus requires testing and documentation.</p>
            <p class="text-center">
              <a href="./reporter.php" class="btn btn-primary btn-lg mb-3" role="button"><i class="fas fa-gamepad"></i> Add a Tested Game</a>
            </p>
        </div>
        <div class="col-md-6">
          <!-- Compatability Definitions -->
          <h3>Rating Guide</h3>
          <table class="table table-sm">
            <thead class="thead-light">
              <tr><th scope="col">Rating</th><th scope="row">Description</th></tr>
            </thead>
            <tbody>
              <tr><th scope="row">&#9733;</th><td>Software does not boot.</td></tr>
              <tr><th scope="row">&#9733;&#9733;</th><td>Software boots but does not run.</td></tr>
              <tr><th scope="row">&#9733;&#9733;&#9733;</th><td>Software runs but but displays major issues or crashes.</td></tr>
              <tr><th scope="row">&#9733;&#9733;&#9733;&#9733;</th><td>Software runs and displays minor issues.</td></tr>
              <tr><th scope="row">&#9733;&#9733;&#9733;&#9733;&#9733;</th><td>Software displays no known issues.</td></tr>
            <tbody>
          </table>
        </div>
    </section>

    <section>
      <h2>Tested Games</h2>
      <!-- Compatability Table -->
        <table id="testedSoftware" class="table table-hover table-striped table-sm" data-toggle="table">
          <thead class="thead-dark">
            <tr>
              <th>Title</th><th>Compatability</th><th>Last Updated</th><th>Edit</th>
            </tr>
          </thead>
          <tbody id="testedSoftwareBody">
<?php include './titlesTestedTable.php';?>

          </tbody>
        </table>
        <script>
          $(document).ready(function(){
            $('#testedSoftware').DataTable( {
              "lengthMenu": [[25, 50, 100, 200, -1], [25, 50, 100, 200, "All"]],
              "pageLength":25
            } );
          });
        </script>
    </section>

  </main>

  <!-- Page Content end-->
  <!------------------>
  <!-- Footer -->
  <footer class="border-top bg-light footer">
    <div class="container">
      <span class="float-right"><a href="#">Back to top</a></span>
      <span class="float-left"><a href="http://mega65.org/">Learn more about the MEGA65 Project</a> Site by Blake Hutt & Lukas Meinhold-Musiela 2018</span>
    </div>
  </footer>
</body>
</html>
