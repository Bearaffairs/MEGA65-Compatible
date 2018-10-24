<?php
  if (!empty($_POST))
  {
    // echo $_POST["softwareTitle"] ."\n";
    // echo $_POST["softwareDeveloper"] ."\n";
    // echo $_POST["softwareGenre"] ."\n";
    // echo $_POST["softwareYear"] ."\n";
    // echo $_POST["softwareCompatibility"] ."\n";
    // echo $_POST["softwareIssues"] ."\n";

    $softwareTitle = "Boulder Dash";


    $dom = new DOMDocument('1.0', 'utf-8');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;

    $library = $dom->createElement('library');
      $game = $dom->createElement('game');

        $game->appendChild( $dom->createElement('title', $_POST["softwareTitle"]) );
        $game->appendChild( $dom->createElement('developer', $_POST["softwareDeveloper"]) );
        $game->appendChild( $dom->createElement('publisher', $_POST["softwarePublisher"]) );
        $game->appendChild( $dom->createElement('genre', $_POST["softwareGenre"]) );
        $game->appendChild( $dom->createElement('year', $_POST["softwareYear"]) );
        $game->appendChild( $dom->createElement('compatibility', $_POST["softwareCompatibility"]) );
        $game->appendChild( $dom->createElement('issues', $_POST["softwareIssues"]) );

      $library->appendChild($game);
    $dom->appendChild($library);

    //echo $dom->saveXML();
    $fileName = strtolower($_POST["softwareTitle"]);
    $fileName = str_replace(' ', '_', $fileName);
    $dom->save("xml/generated/" . $fileName . ".xml");
    header("Location:" . "compatibility.php");
    die();

  } else {
    echo "Nothing in POST";
    header("Location:" . "reporter.php");
    die();
  }
?>
