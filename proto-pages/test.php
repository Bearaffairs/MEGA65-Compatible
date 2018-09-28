<?php include_once 'header.inc.php';
$pageTitle = 'Home';
?>
<!--START CONTENT-->

<!-- Main Content -->
<!-- <div class="container">
  <script>
  $(document).ready(function(){
      $("#addNewRow").click(function(){
        var newRow = $("<tr></tr>");
        var dataA = $("<td></td>").text("TestA");
        var dataB = $("<td></td>").text("TestB");
        newRow.append(dataA, dataB);

        $("#tableContents").append(newRow);
      });
  });
  </script>
<button id="addNewRow">Append table items</button>
<input type="button" value="Refresh Page" onClick="window.location.reload()">
<table id="testTable" class="table table-striped table-dark">
  <tbody id="tableContents">
    <tr>
      <th>TABLE DATA 1</th>
      <th>TABLE DATA 2</th>
    </tr>
  </tbody>
</table>
</div> -->

<div class="container">
  <h1>The XMLHttpRequest Object</h1>
  <table id="softwareTested" class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Title</th>
        <th>Developer</th>
        <th>Compatibility</th>
      </tr>
    </thead>
    <tbody id="softwareResults">
    </tbody>
  </table>

  <button id="addNewRow" onclick="loadXMLDoc('./xml/generated/software.xml')">Append table items</button>

  <script>
    function loadXMLDoc(fileName) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          makeTableRows(this);
        }
      };
      xhttp.open("GET", fileName, true);
      xhttp.send();
      console.log("loaded: " + fileName)
    }
    function makeTableRows(xml) {
      var i;
      var xmlDoc = xml.responseXML;
      var table = ''; //initialise empty string
      var x = xmlDoc.getElementsByTagName("GAME");
      //build new row
      for (i = 0; i <x.length; i++) {
        table += "<tr>"+
        "<td>" +
        x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
        "</td>" +
        "<td>" +
        x[i].getElementsByTagName("DEVELOPER")[0].childNodes[0].nodeValue +
        "</td>" +
        "<td>" +
        x[i].getElementsByTagName("COMPATIBILITY")[0].childNodes[0].nodeValue +
        "</td>" +
        "</tr>";
      }
      document.getElementById("softwareResults").innerHTML += table;
    }

    //Load selected xml file
    //window.onload = loadXMLDoc("libraryw_xsd.xml");
    window.onload = loadXMLDoc("./xml/generated/software.xml");
  </script>
</div>

<div class="container">
  <?php
  foreach (glob("./xml/generated/*.xml") as $filename) {
      echo "$filename<br>\n";
  }
  ?>
</div>

</body>
</html>
