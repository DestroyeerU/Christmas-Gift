<?php

function readJson($fileName) {
  $path = "database" . DIRECTORY_SEPARATOR . $fileName;

  $string = file_get_contents($path);
  $jsonData = json_decode($string, true);

  return $jsonData;
}

function writeCustomFile($fileName, $data) {
  $path = "database" . DIRECTORY_SEPARATOR . $fileName;
  $fp = fopen($path, "w");

  fwrite($fp, $data);
  fclose($fp);
}

function updateDonations($clothes, $food, $money) {
  $array = array(
    'clothes' => $clothes,
    'food' => $food,
    'money' => $money,
  );

  writeCustomFile('donations.json', json_encode($array));
}

function readDonations() {
  $donations = readJson('donations.json');

  return $donations;
}

function readDonationsGoal() {
  $donations = readJson('donations-goal.json');

  return $donations;
}

function readCustomFile($fileName) {
  $path = "settings" . DIRECTORY_SEPARATOR . $fileName;

  $fp = fopen($path, "r");
  $data = fread($fp, filesize($path));

  fclose ($fp);

  return $data;
}
?>
