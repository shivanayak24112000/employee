<?php
$conn=new mysqli('localhost',"root","","test");
if(isset($_POST['datavalue'])==1||$_POST['selectedIds']){
   $arr=$_POST['selectedIds'];
 foreach( $arr as $val){
 
 $sql=$conn->query("delete from employee where ID='$val'");
 }
 if($sql){
   echo true;
}else{
   echo false;
}

}
?>