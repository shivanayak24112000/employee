<?php

if(isset($_POST['Address'])){
  $name=$_POST['Address'];


$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.tomorrow.io/v4/weather/realtime?location={$name}&apikey=7uHaiNxj9UbjW7FANNOkfu0FM8AOom6g",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => [
    "accept: application/json"
  ],
]);

 $response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

 $result=json_decode($response,true);
//  echo "<pre>";
// print_r($result);
$show=$result['data']['time'];
 $data =$result['data']['values']['temperature'];
 
$date = new DateTime($show);

$formattedDate = $date->format('d-m-Y');
 echo $output="<div>
 <label>location:".$result['location']['name']."</label></br>
 <label>Temperature:".$data."</label></br>
 <label>Time:".$formattedDate."</label></br>
 <label>Humidity:".$result['data']['values']['humidity']."</label></br>
 
 </div>";

 

}

?>
