<?php
  //Get xml directory from URI
  if (!empty($_GET['xml'])) {
    // echo 'something in xml: '. $_GET['xml']; //Trace statement
    /* Proceed only if xml path is valid */
    if (file_exists($_GET['xml'])) {
      $targetFile = $_GET['xml'];
      unlink($targetFile) or die("Couldn't delete file");
    } //file exists block
  } //GET block
  header("Location:" . "compatibility.php");
  die();
?>
