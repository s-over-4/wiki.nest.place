<?php

$bot = $_GET["bot"];
$path = "../bots/{$bot}.json";
$jsonRaw = file_get_contents($path);
$jsonData = json_decode($jsonRaw, true);


/* TESTING */
//echo "bot: " . $bot;
//echo "<br><br>path: " . $path;
//echo "<br><br>raw file contents: " . $jsonRaw;
// echo "<br><br>php array: ";
// print_r($jsonData);

function commands ($c) {
   foreach ($c as $key=>$value) {
      if ($value !== null) {
         echo $key . ":  " . $value . "\n";
      }
   }
}

function sources ($s) {
   foreach ($s as $n) {
      echo "\t<a href=\"https://$n\" target=\"_blank\">&{$n}</a>\n\t";
   }
   echo "\n";
}

function rooms ($r) {
   foreach ($r as $n) {
      echo "\t<a href=\"https://euphoria.io/room/{$n}/\" target=\"_blank\">&{$n}</a>\n\t";
   }
   echo "\n";
}

// function statusColor ($s) {
//    if ($s == "EOL") {
//       echo ""
//    }
// }



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
<?php if ($jsonData["eol"] !== null) {echo "\t" . $jsonData["eol"] . "\n\n"; } ?>
sources:<?php       sources ($jsonData["sources"]); ?>
active rooms:<?php  rooms ($jsonData["activeRooms"]); ?>
            </pre>
         </div>
      </div>

      <div class="textBox" id="smallBox">
         <div class="textHeader">
            about
         </div>
         <div class="textBody">

            <b>overview:</b>
            <br>        
<?php echo $jsonData["description"]; ?>

            <br><br>
            <b>timeline:</b>
            <br>
<?php echo join("<br>", $jsonData["timeline"]); ?>
            
            <br><br>
            <b>specific commands:</b>
            <br>
            <pre class="textInset">
<?php echo commands($jsonData["otherCommands"]); ?>
            </pre>

            <br><br>
            <b>standard commands:</b>
            <br>
            <pre class="textInset">
<?php echo commands($jsonData["standardCommands"]); ?>
            </pre>
            
         </div>
      </div>
   </div>
</body>
</html>
