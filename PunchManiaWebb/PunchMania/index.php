<?php
require 'main.php';
?>
<!doctype html>
<html lang="se">
<head>
  <!--Author Marcus Nordström -->
  <title>PunchMania</title>
  <meta name="author" content="Marcus Nordström">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="Best game in the world!">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script type="text/javascript" src="main.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
  <link rel="manifest" href="manifest.txt">
  <meta name="theme-color" content="#0A0A0A">
  <meta name="display" content="standalone">
  <link rel="icon" href="images/logo512.png" sizes="512x512" />
  <link rel="icon" href="images/logo192.png" sizes="192x192" />
  <link rel="icon" href="images/logo168.png" sizes="168x168" />
  <link rel="icon" href="images/logo96.png" sizes="96x06" />
  <link rel="apple-touch-icon" href="images/logo192.png" sizes="192x192" />
  <link rel="apple-touch-icon" href="images/logo168.png" sizes="168x168" />
  <link rel="apple-touch-icon" href="images/logo96.png" sizes="96x06" />
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="#0A0A0A">
  <meta name="apple-mobile-web-app-title" content="PunchMania">
  <meta name="msapplication-TileImage" content="images/logo192.png">
  <meta name="msapplication-TileColor" content="#0A0A0A">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="init();">
    <div class="pageScroll">
      <h1 class="uparrow" onclick="up()">&uarr;</h1>
      <h1 class="downarrow" onclick="down()">&darr;</h1>
    </div>
    <?php
    if (!isset($_GET["site"])) {
      index(null);
    } else {
      index($_GET["site"]);
    }

    ?>
  </body>
  </html>
