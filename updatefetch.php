<?php
$conn = new mysqli('localhost', 'root', '', 'test');


$output="";
if(isset($_POST['updateid'])){
$id=$_POST['updateid'];
$sql=$conn->query("select * from employee  where ID='$id'")->fetch_assoc();

$output='
<div class="container mt-5 pb-2 border" id="mainform">
    <div class="row">
        <div class="col">
            <form id="form" class="row g-3 needs-validation" enctype="multipart/form-data" >
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label"> NAME </label>
                    <input type="text" class="form-control" id="fname" name="Firstname" value="'.$sql['NAME'].'" required>
                    <input type="hidden" class="form-control" id="updateids" name="updateids" value="'.$sql['ID'].'" required>
                                    <div id="message"></div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Mobile NUmber</label>
                    <input type="Number" class="form-control" name="mobile" id="mobile"  value="'.$sql['mobile'].'"required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="email" id="email" aria-describedby="inputGroupPrepend" value="'.$sql['Email'].'" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Address</label>
                   
                    
                
                    <input type="text" class="form-control" name="Address" id="Address" value="'.$sql['address'].'" required>
              
                </div>
                <div class="col-md-3" id="stata">
                    <label for="validationCustom04" class="form-label">State</label>
                
                    <input type="text" class="form-control" name="state" id="state" value="'.$sql['state'].'" required>
              
                </div>
                <div class="col-md-3" id="pin">
                    <label for="validationCustom05" class="form-label">PINCODE</label>
                    <input type="text" class="form-control" name="zip" id="zip" value="'.$sql['pincode'].'" required>
                </div>
                <div class="col-md-3" >
                    <label for="validationCustom05" class="form-label">City</label>
                    <input type="text" class="form-control" name="city" id="city"  value="'.$sql['city'].'"required>
                </div>
                <div class="col-md-3">
                
    <label for="fileInput" class="form-label">Choose an image file:</label>
    <img src="images/'.$sql['img'].'" width="200">
    <input type="file" class="form-control" id="fileInput" name="featured_img"  accept="image/*" required>
    <div class="invalid-feedback">
      Please choose a file.
    </div>
  </div>
  
                   
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" id="submits">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>

';
}
echo $output;
?>