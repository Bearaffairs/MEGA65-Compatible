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

    <!-- Reporting Form -->
    <form id="compatabilityForm">
      <div class="form-group">
        <label for="softwareTitle">Software Title</label>
        <input id="softwareTitle" class="form-control" type="text" placeholder="e.g. Boulder Dash" required>
      </div>

      <div class="form-group">
        <label for="softwareDeveloper">Developer</label>
        <input id="softwareDeveloper" class="form-control" type="text" placeholder="e.g. Peter Liepa" required>
        <label for="softwareGenre">Genre</label>
        <input id="softwareGenre" class="form-control" type="text" placeholder="e.g. Puzzle" required>
        <label for="softwareYear">Release Year</label>
        <input id="softwareYear" class="form-control" type="text" placeholder="e.g. 1984" required>
      </div>

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
      <div class="form-group">
        <label for="softwareIssues">Issues Noticed</label>
        <textarea id="softwareIssues" class="form-control" rows="3"></textarea>
      </div>
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
  </div>

  <script>
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
  </script>
<div class="container">
  <button type="button" id="filenamer" class="btn btn-secondary btn-sm">Sugest fileName</button>
  <button type="button" onclick="buildXMLStr()" class="btn btn-secondary btn-sm">make string</button>

  <div class="form-group">
    <label for="xmlOutput">XML output</label>
    <textarea id="xmlOutput" class="form-control" rows="8" disabled></textarea>
  </div>
</div>


<script>
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
    fileContent += "\t<GAME>\n"
    fileContent += "\t\t<TITLE>" + $("#softwareTitle").val() + "</TITLE>\n";
    fileContent += "\t\t<DEVELOPER>" + $("#softwareDeveloper").val() + "</DEVELOPER>\n";
    fileContent += "\t\t<GENRE>" + $("#softwareGenre").val() + "</GENRE>\n";
    fileContent += "\t\t<YEAR>" + $("#softwareYear").val() + "</YEAR>\n";
    fileContent += "\t\t<COMPATABILITY>" + $("#softwareCompatability").val() + "</COMPATABILITY>\n";
    fileContent += "\t\t<ISSUES>" + $("#softwareIssues").val() + "</ISSUES>\n";
    fileContent += "\t</GAME>\n"
    console.log(fileContent)
    return String(fileContent);
  }

</script>


</body>
</html>
