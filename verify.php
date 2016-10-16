<?php
$access_token = 'lmGpExc4gjZdHi/DLnKQMhmURPJejuvl0quGHZgUiF5WhxyIqSxAroCX8mT8SlHtPpeV0KJo7Enob0HV8GDX3QervSGi+f5wiF2ITh6g62plVKRFhjMr8hlO5oQpt62U5aeISBkvuxVqyIQ4NoajwQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;