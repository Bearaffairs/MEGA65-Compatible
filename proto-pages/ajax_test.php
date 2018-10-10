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
      <a class="navbar-brand" href="#">
        <img src="./img/MEGA65_logo_shadow.png" alt="logo" style="height:40px;">
      </a>
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="./index.html">Compatability</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./reporter.html">Reporter</a>
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
  <div class="container">


    <!-- Compatability Definitions -->
    <!-- Currently Hidden -->
    <div class="row" hidden>
      <div>
        <h3>Compatability Guide</h3>
        <table class="table table-sm">
          <thead>
            <tr>
              <!-- Star Ratings  &#9733; is html symbol for star-->
              <th scope="row">Rating</th>
              <th scope="col">&#9733;</th>
              <th scope="col">&#9733;&#9733;</th>
              <th scope="col">&#9733;&#9733;&#9733;</th>
              <th scope="col">&#9733;&#9733;&#9733;&#9733;</th>
              <th scope="col">&#9733;&#9733;&#9733;&#9733;&#9733;</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Desc.</th>
              <td>Software does not boot.</td>
              <td>Software boots but does not run.</td>
              <td>Software runs but but displays major issues or crashes.</td>
              <td>Software runs and displays minor issues.</td>
              <td>Software displays no known issues.</td>
            </tr>
          </tbody>
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


    <!-- Compatability Table -->
    <table id="testedSoftware" class="table table-hover table-striped table-sm" data-toggle="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Compatability</th>
          <th>Last Updated</th>
        </tr>
      </thead>
      <tbody id="ajaxContent">
<?php include 'titlesTestedTable.php';?>
      </tbody>
    </table>
  </div>


</body>
</html>
