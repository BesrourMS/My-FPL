<?php
header('Access-Control-Allow-Origin: *');header('X-Powered-By: Mohamed Safouan Besrour');
$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://fantasy.premierleague.com/api/entry/3297181/history/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}