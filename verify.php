<?php
$access_token = 'JHds/MsOrPZiT8IiLh2uGl1tBL3wfOa0D0ugJYhjQL4lXZT2mm9vMZQnM5e6+g67X6Wzpb9eZR0sIq/JAMzPvM5jwkBDS4//KdyTNUPTGPW2bjOzpfhgcECPEmdYyaOPJejz/q1NVNpw5DYokG651AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
