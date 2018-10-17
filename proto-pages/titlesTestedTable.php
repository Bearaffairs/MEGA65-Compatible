<?php

  // Convert XML compatability number into star rating
  function getCompatabilityStars($inStr) {
    $starRating = "N/A";
    switch ($inStr) {
      case 1:  $starRating = '&#9733;'; break;
      case 2:  $starRating = '&#9733;&#9733;'; break;
      case 3:  $starRating = '&#9733;&#9733;&#9733;'; break;
      case 4:  $starRating = '&#9733;&#9733;&#9733;&#9733;'; break;
      case 5:  $starRating = '&#9733;&#9733;&#9733;&#9733;&#9733;'; break;
      default: $starRating = 'Untested';
    }
    // Return number of star symbols
    return $starRating;
  }

  //Define directory where XML game files are located
  $directory = "./xml/generated/";

  // Loop through each XML file in specified directory
  foreach (glob($directory . "*.xml") as $filename) {
    $xml=simplexml_load_file($filename) or die("Error: Cannot create object");
    // Loop through each child "GAME" element and extract info
    // XML elements are CASE SESITIVE!
    foreach($xml->children() as $childGAME) {
      echo "        <tr>\n";
      echo "          <td>" . $childGAME->title . "</td>\n";
      echo "          <td>" . getCompatabilityStars($childGAME->compatibility) . "</td>\n";
      echo "          <td>" . date("Y-m-d H:i:s", filemtime($filename)) . "</td>\n";
      echo "        </tr>\n";
    }//inner loop end
  }//outer loop end

?>
