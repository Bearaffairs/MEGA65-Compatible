<?php include_once 'header.inc.php';
$pageTitle = 'Reporter';
?>
<!--START CONTENT-->

  <!-- Main Content -->
  <!-- Call to action -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Compatability Report Tool</h1>
      <p class="lead">Generate an xml compatability file</p>
    </div>
  </div>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
              <!-- Reporting Form -->
              <form id="compatabilityForm" method="post">
                <!-- Title -->
                <div class="form-group">
                  <label for="softwareTitle">Software Title</label>
                  <input id="softwareTitle" class="form-control" type="text" placeholder="e.g. Boulder Dash" required>
                </div>

                <!-- Dev, Genre, Year -->
                <div class="form-group">
                  <label for="softwareDeveloper">Developer</label>
                  <input id="softwareDeveloper" class="form-control" type="text" placeholder="e.g. Peter Liepa" required>
                  <label for="softwareGenre">Genre</label>
                  <input id="softwareGenre" class="form-control" type="text" placeholder="e.g. Puzzle" required>
                  <label for="softwareYear">Release Year</label>
                  <input id="softwareYear" class="form-control" type="number" min="1976" placeholder="e.g. 1984" required>
                </div>

                <!-- Compatability Rating -->
                <div class="form-group">
                  <label for="softwareCompatability">Compatability Rating</label>
                  <select id="softwareCompatability" class="form-control" required>
                    <option>Untested</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <!-- Issues -->
                <div class="form-group">
                  <label for="softwareIssues">Issues Noticed</label>
                  <textarea id="softwareIssues" class="form-control" rows="3" placeholder="e.g. Stuttering, frame tearing, etc."></textarea>
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
                <button id="btnSave" type="button" class="btn btn-primary" disabled>Generate Report</button>
              </form>
              <!-- Reporting Form End -->
      </div><!-- col end -->
      <!-- XML DISPLAY -->
      <div class ="col-sm-5">
        <div class="form-group">
          <label for="xmlOutput">XML output</label>
          <textarea id="xmlOutput" class="form-control" rows="15" disabled></textarea>
        </div>
          <!-- <button type="button" id="filenamer" class="btn btn-secondary btn-sm">Sugest fileName</button> -->
          <!-- <button type="button" onclick="buildXMLStr()" class="btn btn-secondary btn-sm">make string</button> -->
          <button type="button" id="btnCopyXML" onclick="copyText('xmlOutput')" class="btn btn-info btn-sm float-right">Copy XML</button>
      </div><!-- col end -->

    </div><!-- row end -->
  </div> <!-- container end -->

  <script>
  // Mini Validations
  $("#invalidCheck").click( function() {
    if(!$(this).is(':checked')){
      $('#btnSave').attr("disabled","disabled");
    } else
      $('#btnSave').removeAttr('disabled');
  });

  //Build an XML File from the input
  $("#btnSave").click( function() {
    var filename = $("#softwareTitle").val()
    filename = filename.replace(/\s+/g, '_');
    filename += ".xml";
    console.log("suggested filename: " + filename)
  });

  //Disable submit button until checkbox confirmed
  $("#invalidCheck").click( function() {
    if(!$(this).is(':checked')){
      $('#btnSave').attr("disabled","disabled");
    } else
      $('#btnSave').removeAttr('disabled');
  });


  //Suggest a filename
  $("#filenamer").click( function() {
    var filename = $("#softwareTitle").val()
    filename = filename.toLowerCase();
    filename = filename.replace(/\s+/g, '_');
    filename += ".xml";
    console.log("suggested filename: " + filename)
  });

  //Update disabled text area with XML string
  $("#compatabilityForm").on('change keyup', function(e) {
    console.log($("#softwareTitle").val())
    $("#xmlOutput").val(buildXMLStr());
  });

  //Build the XML string
  function buildXMLStr() {
    var fileContent = '';
    fileContent += "<GAME>\n"
    fileContent += "  <TITLE>" + $("#softwareTitle").val() + "</TITLE>\n";
    fileContent += "  <DEVELOPER>" + $("#softwareDeveloper").val() + "</DEVELOPER>\n";
    fileContent += "  <GENRE>" + $("#softwareGenre").val() + "</GENRE>\n";
    fileContent += "  <YEAR>" + $("#softwareYear").val() + "</YEAR>\n";
    fileContent += "  <COMPATABILITY>" + $("#softwareCompatability").val() + "</COMPATABILITY>\n";
    fileContent += "  <ISSUES>" + $("#softwareIssues").val() + "</ISSUES>\n";
    fileContent += "</GAME>\n"
    console.log(fileContent)
    return String(fileContent);
  }


  function copyText(ID) {
    var str = document.getElementById(ID);
    str.select();
    document.execCommand("copy");
    alert("COPIED TEXT:\n" + str.value);
  }

</script>

</body>
</html>
