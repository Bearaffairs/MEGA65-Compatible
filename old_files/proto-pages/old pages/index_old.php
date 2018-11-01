<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mega65 Compatability</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- JQuery  -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <!-- DataTables (Adding sortables tables - https://datatables.net/) -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>
<body>
  <!-- Nav Bar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container navbar-header">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="index.php">
        <img src="./img/MEGA65_logo_shadow.png" alt="logo" style="height:40px;">
      </a>
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">Compatability</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./reporter.php">Reporter</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Nav Bar End -->

  <!-- Main Content -->
  <!-- Call to action -->
  <div class="jumbotron jumbotron-fluid bg-warning" tyle="color:ivory;background-color:crimson;">
    <div class="container">
      <h1 class="display-4">Mega65 Compatability</h1>
      <p class="lead">Software tested on the Mega65</p>
    </div>
  </div>

  <div class="container mb-5">
    <!-- Compatability Definitions -->
    <div class="row">
      <div class="col-md-6">
        <h1>What is the Mega65?</h1>
        <p>The Mega65 is a spiritual succesor to the Commodore64 with aims of full backwards compatability.</p>
          <p>However, this backwards compatability is not always perfect.
            Some software on the Commodore64 utilized undocumented features and quirks of the hardwaren such as <em>illegal opcodes</em>.
            This may or may not carry over to the Mega65 and thus requires testing and documentation.
          </p>
          <p class="text-center">
            <a href="./reporter.php" class="btn btn-primary btn-lg mb-3" role="button"><i class="fas fa-gamepad"></i> Add a Tested Game</a>
          </p>
      </div>
      
      <div class="col-md-6">
        <h3>Compatability Guide</h3>
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
    </div>


    <!-- AJAX Script -->
    <script>
      $(document).ready(function(){
        // $("#ajaxContent").load("titlesTestedTable.php");
        $('#testedSoftware').DataTable( {
          "lengthMenu": [[25, 50, 100, 200, -1], [25, 50, 100, 200, "All"]],
          "pageLength":25
        } );
      });
    </script>

    <h2>Tested Games</h2>
    <!-- Compatability Table -->
      <table id="testedSoftware" class="table table-hover table-striped table-sm" data-toggle="table">
        <thead class="thead-dark">
          <tr>
            <th>Title</th><th>Compatability</th><th>Last Updated</th><th>Edit</th>
          </tr>
        </thead>
        <tbody id="testedSoftwareBody">
  <?php include 'titlesTestedTable.php';?>
        </tbody>
      </table>

  </div><!-- Container End -->

  <footer class="mt-3 mt-md-5 pt-md-3 border-top bg-light sticky-bottom">
    <div class="container py-3">
      <p class="float-right">
        <a href="#">Back to top</a>
      </p>
      <a href="http://mega65.org/"><p>Learn more about the Mega65 Project</p></a>
      <p>Site by Blake Hutt & Lukas Meinhold-Musiela 2018</p>
    </div>
  </footer>

</body>
</html>
