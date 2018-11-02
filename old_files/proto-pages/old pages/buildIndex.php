<?php
  //Script to generate a static index.html file

  //define filenames
  $inputFile = "index.php";
  $outputFile = "index.html";

  // Start output buffering
  ob_start();
  //include and run code in x.php
  include $inputFile;
  // saving captured output to file
  file_put_contents("$outputFile", ob_get_contents());
  // end buffering and displaying page
  ob_end_clean();

  header("Location:" . "$outputFile");
  die();
?>
