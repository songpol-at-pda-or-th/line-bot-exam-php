<?php


$access_token = 'WoLLQMekSIQM3HRRLp2jJJ2VzLhaDVNUz3HhVOmROiGQtiUtwSd9KX74PCZxaAOEc/4tIFSAbPGEka9StC95j65wDh8kVVdP5KjTrY6B0ujYGnUQG7f2JyM91BTjcQguQHHGfCufCcb7oMjy0ygIvgdB04t89/1O/w1cDnyilFU=';

$userId = 'Ufff8fbd55df9d72fee9fe75ba0043c3f';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

