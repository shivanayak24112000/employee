<?php
$conn = new mysqli('localhost', 'root', '', 'test');



if(isset($_POST['fname'])){

  $id=$_POST['updateids'];
  $name=$_POST['fname'];
  $mobile=$_POST['mobile'];
 
  $email=$_POST['email'];
  $Address=$_POST['Address'];
  $City=$_POST['City'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];
  $featured_img=$_POST['featured_img'];
  // $file_name = $_FILES['featured_img']['name'];
  // $file_size = $_FILES['featured_img']['size'];
  // $file_tmp = $_FILES['featured_img']['tmp_name'];
  // $file_type = $_FILES['featured_img']['type'];
  // $file_name_parts = explode('.', $_FILES['featured_img']['name']);
  // $file_ext = strtolower(end($file_name_parts));
  
  // $upload_path = "images/" . $file_name;
  //     move_uploaded_file($file_tmp, $upload_path);

  

  $sql=$conn->query("UPDATE `employee` SET `NAME`='$name',`mobile`='$mobile',`Email`='$email',`state`='$state',`city`='$City',`address`='$Address',`pincode`='$zip' WHERE `ID`='$id' ");
if($sql){

    echo true;
}else{
    echo false;
}


}
?>