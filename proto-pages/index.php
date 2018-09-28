<?php include_once 'header.inc.php';
$pageTitle = 'Home';
?>
<!--START CONTENT-->

<!-- Main Content -->
<div class="container">

  <!-- Compatability Definitions -->
  <div class="row">
    <div>
      <h3>Compatability Guide</h3>
      <table class="table table-sm">
        <thead>
          <tr>
            <th scope="row">Rating</th>
            <th scope="col">&#x2605</th>
            <th scope="col">&#x2605&#x2605</th>
            <th scope="col">&#x2605&#x2605&#x2605</th>
            <th scope="col">&#x2605&#x2605&#x2605&#x2605</th>
            <th scope="col">&#x2605&#x2605&#x2605&#x2605&#x2605</th>
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

  <!-- Software tested table -->
  <h2>Software Titles Tested</h2>

  <!-- Sample Data Warning -->
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sample data</strong> is being used here.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <!-- Sample Data Warning End -->


  <!-- DataTables Script -->
  <script>
    $(document).ready(function() {
        $('#testedSoftware').DataTable(){
          "pageLength": 50;
        };
    } );
  </script>
  <table id="testedSoftware" class="table table-hover table-striped table-sm" data-toggle="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Compatability</th>
        <th>Last Updated</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Bubble Bobble</td>
        <td>&#x2605&#x2605&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Impossible Mission</td>
        <td>&#x2605&#x2605&#x2605&#x2605&#x2605</td>
        <td>2018-09-01</td>
      </tr>
      <tr>
        <td>Boulder Dash</td>
        <td>&#x2605&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>The Great Giana Sisters</td>
        <td>&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Prince of Persia</td>
        <td>&#x2605&#x2605&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Wizball</td>
        <td>&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Turrican II</td>
        <td>&#x2605&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Zak McKracken and the Alien Mindbenders</td>
        <td>&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Pirates!</td>
        <td>&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
      <tr>
        <td>Armalyte</td>
        <td>&#x2605&#x2605&#x2605&#x2605</td>
        <td>2018-08-31</td>
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>
