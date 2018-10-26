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
  } //GET block
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

  <!-- StarRating Styling -->
  <link rel="stylesheet" type="text/css" href="./css/starRating.css"/>
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
        <li class="nav-item"><a class="nav-link" href="./compatibility.php">Compatibility List</a></li>
        <li class="nav-item active"><a class="nav-link" href="./reporter.php">Reporting Tool </a></li>
      </ul>
    </nav>
  </header>
  <!-- Header End -->

  <!------------------>
  <!-- Page Content -->
  <!------------------>
  <!-- Page overview -->
  <section class="jumbotron jumbotron-fluid bg-primary text-light">
    <div class="container">
      <h1 class="display-4">Compatability Report Tool</h1>
      <p class="lead">Generate an xml compatability file</p>
    </div>
  </section>

  <!-- Main content -->
  <main class="container">

  <!-- Form Content -->
    <div class="row flex-fill d-flex">
      <div class="col-sm-7">
              <!-- Reporting Form -->
              <form id="compatabilityForm" method="post" action="writeDOM.php">
                <!-- Title -->
                <div class="form-group">
                  <label for="softwareTitle">Software Title</label>
                  <div class="input-group">
                  <?php if (!empty($xmlFilePath)) {echo
                    '<input class="form-control" type="text" value="'.$softwareTitleValue.'" disabled>'.
                    '<div class="input-group-append">'.
                    '<button class="btn btn-outline-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-trash-alt"></i> Remove</button>'.
                    '<div class="dropdown-menu">'.
                    '<a class="dropdown-item" href="./deleteDOM.php?xml='. $xmlFilePath .'">Delete <em>' . $softwareTitleValue . '</em> XML file</a>'.
                    '</div>'.
                    '</div>'
                  ;}?>
                    <input name="softwareTitle" id="softwareTitle" class="form-control" type="text" placeholder="e.g. Boulder Dash"
                    value="<?php echo $softwareTitleValue; ?>" required <?php if (!empty($xmlFilePath)) {echo 'hidden';}?> >
                  </div>
                </div>

                <!-- Developer, Publisher, Genre, Year -->
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <label for="softwareDeveloper">Developer</label>
                      <input name="softwareDeveloper" id="softwareDeveloper" class="form-control" type="text" placeholder="e.g. Peter Liepa"
                      value="<?php echo $softwareDeveloperValue; ?>" required>
                    </div>
                    <div class="col-md-6">
                      <label for="softwarePublisher">Publisher</label>
                      <input name="softwarePublisher" id="softwarePublisher" class="form-control" type="text" placeholder="e.g. First Star Software"
                      value="<?php echo $softwarePublisherValue; ?>">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <label for="softwareGenre">Genre</label>
                      <input name="softwareGenre" id="softwareGenre" class="form-control" type="text" placeholder="e.g. Puzzle"
                      value="<?php echo $softwareGenreValue; ?>" required>
                    </div>
                    <div class="col-md-6">
                      <label for="softwareYear">Release Year</label>
                      <input name="softwareYear" id="softwareYear" class="form-control" type="number" min="1976" placeholder="e.g. 1984"
                      value="<?php echo $softwareYearValue; ?>" required>
                    </div>
                  </div>
                </div>


                <div class="form-row">
                  <div class="col-md-6">
                    <!-- Compatability Rating -->
                      <label>Compatability Rating</label>
                        <div class="starrating d-inline-flex justify-content-center flex-row-reverse rounded bg-secondary p-2" style="width:100%;">
                          <input type="radio" id="star5" name="softwareCompatibility" value="5"
                            <?php if($softwareCompatibilityValue == '5') echo 'checked'; ?>
                          /><label for="star5" title="5 star" ></label>
                          <input type="radio" id="star4" name="softwareCompatibility" value="4"
                            <?php if($softwareCompatibilityValue == '4') echo 'checked'; ?>
                          /><label for="star4" title="4 star"></label>
                          <input type="radio" id="star3" name="softwareCompatibility" value="3"
                            <?php if($softwareCompatibilityValue == '3') echo 'checked'; ?>
                          /><label for="star3" title="3 star"></label>
                          <input type="radio" id="star2" name="softwareCompatibility" value="2"
                            <?php if($softwareCompatibilityValue == '2') echo 'checked'; ?>
                          /><label for="star2" title="2 star"></label>
                          <input type="radio" id="star1" name="softwareCompatibility" value="1"
                            <?php if($softwareCompatibilityValue == '1' || empty($softwareCompatibilityValue) ) echo 'checked'; ?>
                          /><label for="star1" title="1 star"></label>
                        </div>
                    <!-- Compatability Rating End -->
                  </div>
                  <div class="col-md-6">
                    <!-- Issues -->
                      <label for="softwareIssues">Issues Noticed</label>
                      <textarea name="softwareIssues" id="softwareIssues" class="form-control" rows="5" placeholder="e.g. Stuttering, frame tearing, etc."><?php echo $softwareIssuesValue; ?></textarea>
                    <!-- Issues End -->
                  </div>
                </div>
                <!-- Submission Buttons -->
                <div class="form-group">
                  <div class="form-check">
                    <input id="invalidCheck" class="form-check-input" type="checkbox" value="true" required>
                    <label class="form-check-label" for="invalidCheck">
                        I'm sure I want to submit a report
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <!-- Submit report -->
                <button id="btnSave" type="submit" class="btn btn-secondary" disabled><i class="fas fa-check"></i> Save Report</button>
              </form>
              <!-- Reporting Form End -->
      </div><!-- col end -->

      <!-- XML DISPLAY AREA -->
      <div class ="col-sm-5">
        <div class="form-group">
          <label for="xmlOutput" id="xmlOutputName">XML output</label>
          <textarea id="xmlOutput" class="form-control text-light bg-dark" rows="15" disabled></textarea>
        </div>
          <button type="button" id="btnCopyXML" onclick="copyText('xmlOutput')" class="btn btn-outline-secondary btn-sm float-right"><i class="fas fa-file-code"></i> Copy XML</button>
      </div><!-- col end -->
    </div><!-- row end -->
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


  <!-- Custom javascript & Jquery functions
  ================================================== -->
  <script>
    //Disable submit button until checkbox confirmed
    $("#invalidCheck").click( function() {
      if(!$(this).is(':checked')){
        $('#btnSave').attr({
          "disabled" : "disabled",
          "class" : "btn btn-secondary"
        });

      } else {
        $('#btnSave').removeAttr('disabled');
        $('#btnSave').attr("class", "btn btn-success");
      }
    });

    //Suggest a filename
    function buildFilename() {
      var filename = $("#softwareTitle").val()
      filename = filename.toLowerCase();
      filename = filename.replace(/\s+/g, '_');
      filename += ".xml";
      console.log("suggested filename: " + filename)
      return String(filename);
    }

    //On page load build xml string
    $(function(){
     // jQuery methods go here...

     $("#softwareTitle").val().trim();
     buildStrings();
    });

    //Update disabled text area with XML string
    $("#compatabilityForm").on('change keyup', function(e) {
      buildStrings();
    });

    // Build all dynamic strings
    function buildStrings() {
      $("#softwareTitle").val($.trim($("#softwareTitle").val()));
      $("#xmlOutput").val(buildXMLStr());
      $("#xmlOutputName").text("XML Output for: " + buildFilename());
    }

    //Build the XML string
    function buildXMLStr() {
      var fileContent = '';
      fileContent += '<?xml version="1.0" encoding="utf-8"?>\n<library>\n';
      fileContent += "  <game>\n"
      fileContent += "    <title>" + $("#softwareTitle").val() + "</title>\n";
      fileContent += "    <developer>" + $("#softwareDeveloper").val() + "</developer>\n";
      fileContent += "    <publisher>" + $("#softwarePublisher").val() + "</publisher>\n";
      fileContent += "    <genre>" + $("#softwareGenre").val() + "</genre>\n";
      fileContent += "    <year>" + $("#softwareYear").val() + "</year>\n";
      fileContent += "    <compatibility>" + $('input[name=softwareCompatibility]:checked', '#compatabilityForm').val() + "</compatibility>\n";
      fileContent += "    <issues>" + $("#softwareIssues").val() + "</issues>\n";
      fileContent += "  </game>\n";
      fileContent += "</library>\n";
      console.log(fileContent)
      return String(fileContent);
    }

    //Copy text from XML Box
    function copyText(ID) {
      $("#" + ID).removeAttr('disabled');
      var str = document.getElementById(ID);
      str.select();
      document.execCommand("copy");
      $("#" + ID).attr("disabled","disabled");
      alert("Copied XML text\n");
    }
  </script>

</body>
</html>
