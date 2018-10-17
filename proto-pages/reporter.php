<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mega65 Compatability Reporter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- JQuery  -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

  <!-- Bootstrap -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- DataTables (Adding sortables tables - https://datatables.net/) -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

  <!-- StarRating Styling -->
  <link rel="stylesheet" type="text/css" href="./css/starRating.css"/>


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
      <h1 class="display-4">Compatability Report Tool</h1>
      <p class="lead">Generate an xml compatability file</p>
    </div>
  </div>

  <!-- Form Content -->
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
              <!-- Reporting Form -->
              <form id="compatabilityForm" method="post" action="writeDOM.php">
                <!-- Title -->
                <div class="form-group">
                  <label for="softwareTitle">Software Title</label>
                  <input name="softwareTitle" id="softwareTitle" class="form-control" type="text" placeholder="e.g. Boulder Dash" required>
                </div>

                <!-- Developer, Publisher, Genre, Year -->
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-md-6">
                      <label for="softwareDeveloper">Developer</label>
                      <input name="softwareDeveloper" id="softwareDeveloper" class="form-control" type="text" placeholder="e.g. Peter Liepa" required>
                    </div>
                    <div class="col-md-6">
                      <label for="softwarePublisher">Publisher</label>
                      <input name="softwarePublisher" id="softwarePublisher" class="form-control" type="text" placeholder="e.g. First Star Software">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-6">
                      <label for="softwareGenre">Genre</label>
                      <input name="softwareGenre" id="softwareGenre" class="form-control" type="text" placeholder="e.g. Puzzle" required>
                    </div>
                    <div class="col-md-6">
                      <label for="softwareYear">Release Year</label>
                      <input name="softwareYear" id="softwareYear" class="form-control" type="number" min="1976" placeholder="e.g. 1984" required>
                    </div>
                  </div>
                </div>


                <div class="form-row">
                  <div class="col-md-6">
                    <!-- Compatability Rating -->
                    <div class="form-group">
                      <p >Compatability Rating</p>
                      <div class="starrating d-inline-flex justify-content-center flex-row-reverse rounded bg-secondary p-2">
                        <input type="radio" id="star5" name="softwareCompatibility" value="5" /><label for="star5" title="5 star" ></label>
                        <input type="radio" id="star4" name="softwareCompatibility" value="4" /><label for="star4" title="4 star"></label>
                        <input type="radio" id="star3" name="softwareCompatibility" value="3" /><label for="star3" title="3 star"></label>
                        <input type="radio" id="star2" name="softwareCompatibility" value="2" /><label for="star2" title="2 star"></label>
                        <input type="radio" id="star1" name="softwareCompatibility" value="1" checked /><label for="star1" title="1 star"></label>
                      </div>
                    </div>
                    <!-- Compatability Rating End -->
                  </div>
                  <div class="col-md-6">
                    <!-- Issues -->
                    <div class="form-group">
                      <label for="softwareIssues">Issues Noticed</label>
                      <textarea name="softwareIssues" id="softwareIssues" class="form-control" rows="6" placeholder="e.g. Stuttering, frame tearing, etc."></textarea>
                    </div>
                    <!-- Issues End -->
                  </div>
                </div>
                <!-- Submission Buttons -->
                <div class="form-group">
                  <div class="form-check">
                    <input id="invalidCheck" class="form-check-input" type="checkbox" value="true" required>
                    <label class="form-check-label" for="invalidCheck">
                        I'm sure I want to generate a report
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <button id="btnSave" type="submit" class="btn btn-secondary" disabled>Generate Report</button>
              </form>
              <!-- Reporting Form End -->
      </div><!-- col end -->
      <!-- XML DISPLAY -->
      <div class ="col-sm-5">
        <div class="form-group">
          <label for="xmlOutput">XML output</label>
          <textarea id="xmlOutput" class="form-control" rows="16" disabled></textarea>
        </div>
          <!-- <button type="button" id="filenamer" class="btn btn-secondary btn-sm">Sugest fileName</button> -->
          <!-- <button type="button" onclick="buildXMLStr()" class="btn btn-secondary btn-sm">make string</button> -->
          <button type="button" id="btnCopyXML" onclick="copyText('xmlOutput')" class="btn btn-info btn-sm float-right">Copy XML</button>
      </div><!-- col end -->

    </div><!-- row end -->
  </div> <!-- container end -->

  <!-- functions for the page -->
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
  $("#filenamer").click( function() {
    var filename = $("#softwareTitle").val()
    filename = filename.toLowerCase();
    filename = filename.replace(/\s+/g, '_');
    filename += ".xml";
    console.log("suggested filename: " + filename)
  });

  //On page load build xml string

  //Update disabled text area with XML string
  $("#compatabilityForm").on('change keyup', function(e) {
    console.log($("#softwareTitle").val())
    $("#xmlOutput").val(buildXMLStr());
  });

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


  function copyText(ID) {
    $("#" + ID).removeAttr('disabled');
    var str = document.getElementById(ID);
    str.select();
    document.execCommand("copy");
    $("#" + ID).attr("disabled","disabled");
    alert("Copied XML text:\n");
  }

</script>

</body>
</html>
