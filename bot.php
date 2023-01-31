<?php

$bot = $_GET["bot"];
$path = "bots/{$bot}.json";
$jsonRaw = file_get_contents($path);
$jsonData = json_decode($jsonRaw, true);


/* TESTING */
//echo "bot: " . $bot;
//echo "<br><br>path: " . $path;
//echo "<br><br>raw file contents: " . $jsonRaw;
// echo "<br><br>php array: ";
// print_r($jsonData);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://nest.place/css/style.css">
   <link rel="stylesheet" href="https://nest.place/css/index.css">
   <title><?php echo $bot; ?></title>
</head>

<body>
   <div id="tempBoxHolder">
      <div class="textBox" id="thickBox">
         <div class="textHeader">
            <?php echo $bot; ?>
         </div>
         <div class="textBody">
            <pre>
status:<?php        echo "\t\t" . $jsonData["status"] . "\n\n"; ?>
aliases:<?php       echo "\t" . join(",\n\t\t", $jsonData["aliases"]) . "\n\n"; ?>
creators:<?php      echo "\t" . join(",\n\t\t", $jsonData["creators"]) . "\n\n"; ?>
year created:<?php  echo "\t" . $jsonData["created"] . "\n\n"; ?>
sources:<?php       echo "\t" . join(",\n\t\t", $jsonData["sources"]) . "\n\n"; ?>
active rooms:<?php  echo "\t" . join(",\n\t\t", $jsonData["activeRooms"]) . "\n\n"; ?>
            </pre>
         </div>
      </div>

      <div class="textBox" id="smallBox">
         <div class="textHeader">
            about
         </div>
         <div class="textBody">
<?php echo $jsonData["description"]; ?>
            <br><br>
            <b>timeline:</b>
            <br>
<?php echo join("<br>", $jsonData["timeline"]) . "\n"; ?>   
         </div>
      </div>
   </div>
</body>
</html>
