<?php
$conn=new mysqli('localhost',"root","","test");

if(isset($_POST['Firstname'])){
   

 $name=$_POST['Firstname'];

$email=$_POST['email'];
$ads=$_POST['Address'];
$city=$_POST['City'];
$state=$_POST['state'];
$pin=$_POST['zip'];


$mobile=$_POST['mobile'];

$file_name = $_FILES['featured_img']['name'];
   $file_size = $_FILES['featured_img']['size'];
   $file_tmp = $_FILES['featured_img']['tmp_name'];
   $file_type = $_FILES['featured_img']['type'];
   $file_name_parts = explode('.', $_FILES['featured_img']['name']);
   $file_ext = strtolower(end($file_name_parts));
   
   $upload_path = "images/" . $file_name;
       move_uploaded_file($file_tmp, $upload_path);




// $curl = curl_init();

// curl_setopt_array($curl, [
//   CURLOPT_URL => "https://api.tomorrow.io/v4/weather/realtime?location={$pin}&apikey=7uHaiNxj9UbjW7FANNOkfu0FM8AOom6g",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => [
//     "accept: application/json"
//   ],
// ]);

//  $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

//  $result=json_decode($response,true);
// //  echo "<pre>";
// // print_r($result);
// $show=$result['data']['time'];
//  $data =$result['data']['values']['temperature'];
 
// $date = new DateTime($show);

// $formattedDate = $date->format('d-m-Y');
//  echo $output="<div>
//  <label>location:".$result['location']['name']."</label></br>
//  <label>Temperature:".$data."</label></br>
//  <label>Time:".$formattedDate."</label></br>
//  <label>Humidity:".$result['data']['values']['humidity']."</label></br>
 
//  </div>";
//  $city = $result['location']['name'] . " " . $show . " " . $data . " " . $result['data']['values']['humidity'];


// echo "INSERT INTO `employee`(  `NAME`, `mobile`, `Email`, `state`, `city`, `address`, `pincode`, `img`)
// VALUES('$name','$mobile','$email','$state','$city','$ads','$pin','$file_name')";
$sql=$conn->query("INSERT INTO `employee`(  `NAME`, `mobile`, `Email`, `state`, `city`, `address`, `pincode`, `img`)
VALUES('$name','$mobile','$email','$state','$city','$ads','$pin','$file_name')");

if($sql)

{


echo 1;

}else{
    echo 2;
}



}




?>