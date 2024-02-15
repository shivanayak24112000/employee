
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Document</title>
    
    <style>
        
        .updatedata {
            display: none; 
                 }
                .deletess {
                     display: none; 
                }
                 .delete{
                    display: none;
                 }
                 #stataeid{
                    display: none;
                 }
                 #pincode{
                    display: none;
                 }
                 .update{ display: none; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- <div class="container-fludi mt-1 pb-2 border"> -->

  <!-- <div class="container mt-5 pb-2 border" id="mainformaddress">
    <div class="row">
        <div class="col">
            <form id="formdata" class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="Address" class="form-label">Address</label>
                    <input type="text" class="form-control" name="Address" id="Address" required>
                    <div class="invalid-feedback">
                        Please provide a valid address.
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <button class="btn btn-primary" type="submit" id="addressubmit">Submit form</button>
                </div>
            </form>
        </div>
        <div class="col" id="datashow">

        </div>
    </div>
</div> -->

<!-- </div> -->
<div class="container mt-5 pb-2 border" id="mainform">
    <div class="row">
        <div class="col">
            <form id="form" class="row g-3 needs-validation" enctype="multipart/form-data" >
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label"> NAME </label>
                    <input type="text" class="form-control" name="Firstname" id="validationCustom01" required>
                   <div id="message"></div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Mobile NUmber</label>
                    <input type="Number" class="form-control" name="mobile" id="validationCustom02" required>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" class="form-control" name="email" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom03" class="form-label">Address</label>
                   
                    
                
                    <input type="text" class="form-control" name="Address" id="validationCustom05" required>
              
                </div>
                <div class="col-md-3" id="stata">
                    <label for="validationCustom04" class="form-label">State</label>
                
                    <input type="text" class="form-control" name="state" id="validationCustom05" required>
              
                </div>
                <div class="col-md-3" id="pin">
                    <label for="validationCustom05" class="form-label">PINCODE</label>
                    <input type="text" class="form-control" name="zip" id="validationCustom05" required>
                </div>
                <div class="col-md-3" >
                    <label for="validationCustom05" class="form-label">City</label>
                    <input type="text" class="form-control" name="City" id="" required>
                </div>
                <div class="col-md-3">
                
    <label for="fileInput" class="form-label">Choose an image file:</label>
    <input type="file" class="form-control" id="fileInput" name="featured_img" accept="image/*" required>
    <div class="invalid-feedback">
      Please choose a file.
    </div>
  </div>
  
                   
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit" id="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
</div>
<a href="javascript:void(0)" onclick="myFunction()">Click me</a>
<div class="container border" id="updatedata">
    
  <div id="model"></div>

</div>
<div class="container  mt-5  pb-2 border">
    
  <div id="loaddata"></div>

</div>




<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="javascript.js"></script>


<script>
    $(document).ready(function() {
        $(document).on('click', '.select-all', function() {
            
    $(".delete").toggle();
    $(".update").toggle();
    $(".deletess").toggle();
   
});
        $(document).on('click', '.selectAll', function() {
            
    $(".delete").show();
    $(".update").show();
    $(".deletess").show();
   
});

});
// $("#validationCustom04").change(function () {
//             var selectedValue = $(this).val();
//             if(selectedValue=="state"){
//                 $('#stataeid').show();
//                 $('#pincode').hide(); 
//             }else if(selectedValue=="PINCODE"){
//                 $('#pincode').show(); 
//                 $('#stataeid').hide();
//             }
//         });

</script>
<script>
 



 
</script>

</body>
</html>