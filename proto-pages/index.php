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
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Compatability</h1>
      <p class="lead">Software tested on the Mega65</p>
    </div>
  </div>

  <div class="container mb-5">
    <!-- Compatability Definitions -->
    <div class="row">
      <div class="col-md-6">
        <h1>Mega65 Compatability </h1>
        <p>The Mega65 aims to be a faithful recreation of the Commodore65.
          Effectively an improved version of the Commodore 64, it was meant to be backwards-compatible with the older computer.</p>
          <p>This backwards compatability is not perfect.
            Some software on the Commodore64 utilized undocumented features of the hardware.
            This may or may not carry over to the Mega65 and thusly requires testing.
          </p>
      </div>
      <div class="col-md-6">
        <h3>Compatability Guide</h3>
        <table class="table table-sm">
          <thead class="thead-dark">
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
</body>
</html>
