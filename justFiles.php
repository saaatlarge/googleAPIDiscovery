<?php
$file = "https://www.googleapis.com/discovery/v1/apis/drive/v3/rest";
$json = json_decode(file_get_contents($file),true);

$resources = $json["resources"];

$files = $resources["files"];
print_r($files);
