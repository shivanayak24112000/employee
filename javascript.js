function selectall() {
    $('.selectAll').prop('checked', $('.select-all').prop('checked'));
    $('.selectAll').prop('checked', $(this).prop('checked'));
    
   
  }

$(document).ready(function() {

    function loaddata(){
$.ajax({
    url: "load.php",
    type: "POST",
  
    success: function(data) {
       
        $("#loaddata").html(data);

    },
});
}
loaddata();


$(document).on('click','#deletess', function() {
           
           
    var selectedIds = $('input[name="delete[]"]:checked').map(function(){
        return $(this).data('id');
    }).get();

    // Now you have an array of selected IDs in 'selectedIds'
    // console.log(selectedIds);
    $.ajax({
        url:'backdelet.php',
        type:"POST",
        data:{selectedIds:selectedIds},
        success:function(data){
            if(data==1){
             

                loaddata();}

        }
    });

   
});

$("#formdata").submit(function(e){
e.preventDefault(); 

$.ajax({
    url: "apicerate.php",
    type: "POST",
    data: $(this).serialize(),
    success: function(data) {
        $("#datashow").html(data); // Assuming you want to update an element with id "datashow" with the response data
    },
   
});
});




$("#form").submit(function(e){
    e.preventDefault();
    
    var formData = new FormData(this);
      
        $.ajax({
            url: "backend.php",
            type: "POST",
           
             data: formData,
        contentType: false,
        processData: false,
            success: function(response) {
                if(response!=null){
                    $("#datashow").html(response);
                    loaddata();
                }
            },
            
            
        });
      
    });



$(document).on("click", "#submits", function(e) {
e.preventDefault();

var formData = new FormData();
        formData.append('fname', $("#fname").val());
        formData.append('updateids', $("#updateids").val());
        formData.append('mobile', $("#mobile").val());
        formData.append('email', $("#email").val());
        formData.append('Address', $("#Address").val());
        formData.append('City', $("#city").val());
        formData.append('state', $("#state").val());
        formData.append('zip', $("#zip").val());
        formData.append('featured_img', $('#fileInput')[0].files[0]);

        $.ajax({
            url: "updatedata.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
    success: function(responds) {
        if (responds == true) { 
            $("#model").hide();
            loaddata();
        }
    },
   
});
});





    
    

    $(document).on("click", ".delete", function() {
var id = $(this).data("id");


$.ajax({
    url: "backend.php",
    type: "POST",
    data: { datavalue: id },
    success: function(response) {
        if(response==1){
            alert("success");
            loaddata();
        }  
           },
    error: function(xhr, status, error) {
        // Handle errors if any
        console.error("AJAX Error:", status, error);
    }
});
});





$(document).on("click",".update",function(){
  var id=$(this).data("update");
  
$.ajax({
url:"updatefetch.php",
type:"POST",
data:{updateid:id},
success:function(data){
$("#mainform").hide(); 
$("#model").html(data);


}



});




   
       
  

    







});

// $(document).on('click','#deletess', function() {
           
           
//     var selectedIds = $('input[name="delete[]"]:checked').map(function(){
//         return $(this).data('id');
//     }).get();

//     // Now you have an array of selected IDs in 'selectedIds'
//     // console.log(selectedIds);
//     $.ajax({
//         url:'backdelet.php',
//         type:"POST",
//         data:{selectedIds:selectedIds},
//         success:function(data){
//             console.log(data);

//         }
//     });

   
// });



});