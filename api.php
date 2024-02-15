<?php
echo $datetime=date('D-M-Y');
$curl = curl_init();


curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-19-statistics.p.rapidapi.com/reports/total?date=2022-12-01",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: covid-19-statistics.p.rapidapi.com",
		"X-RapidAPI-Key: 4ad824aca6mshcd164af2518e823p17fa31jsnb1933785807a"
	],
]);

$response = curl_exec($curl);



$dataArray = json_decode($response,true);
echo "<pre>";
print_r($dataArray);

// foreach ($dataArray as $key => $val) {
   
//         foreach ($val as $innerKey => $innerVal) {
//             echo $innerKey . ': ' . $innerVal . '<br>';
        
//     } 
// }
// echo $data=$dataArray['data']['date']."</br>";
// echo $data1=$dataArray['data']['last_update'];
// echo $data2=$dataArray['data']['confirmed'];
// echo $data3=$dataArray['data']['confirmed_diff'];
// echo $data4=$dataArray['data']['deaths_diff'];
// echo $data5=$dataArray['data']['recovered'];
// echo $data6=$dataArray['data']['recovered_diff'];
// echo$data7=$dataArray['data']['recovered_diff'];
// echo$data8=$dataArray['data']['active_diff'];
// echo $data9=$dataArray['data']['fatality_rate'];


$err = curl_error($curl);

curl_close($curl);

