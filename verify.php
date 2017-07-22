<?php
$access_token = '7kyaYPHc9qiBrGw9+9zez0AAxmgWMO2fMGmfqvkoOpNwxL/EOVPo8WRmRZcNcPNZjjMP4Q93bNOdbkx0/ewsVwa25JsvCRR2gZW+FHwp0Wt6gI+x+7wjnGJUvpsMxHyFYWcnZG4qwP4OMYL1gB0uCwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;