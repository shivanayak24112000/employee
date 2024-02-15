<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api.openweathermap.org/data/2.5/weather?q=bhubaneswar&appid=848d368f9e0a88184337a2983b112cc7');

// Set the option to return the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

curl_close($ch);

// Print the response
print_r($response);
?>
