<?php

$bot = $_GET["bot"];
echo "bot: " . $bot;

$path = "bots/{$bot}.json";
echo "<br><br>path: " . $path;

$jsonRaw = file_get_contents($path);
echo "<br><br>raw file contents: " . $jsonRaw;

$jsonData = json_decode($jsonRaw, true);
echo "<br><br>php array: ";
print_r($jsonData);
?>