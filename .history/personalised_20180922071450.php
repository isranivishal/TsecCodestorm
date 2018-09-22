<!DOCTYPE html> 
<html lang="en"> 
<head> 
  <title>Home Page</title> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/> 
  <link href="css/bootstrap-form-helpers.min.css" rel="stylesheet"> 
  <script src="js/bootstrap-formhelpers.min.js"></script> 
  <link href="assets/css/bootstrap.css" rel="stylesheet"> 
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet"> 
    <link href="assets/css/bootstrap-formhelpers.css" rel="stylesheet"> 
    <link href="assets/css/bootstrap-formhelpers-countries.flags.css" rel="stylesheet"> 
    <link href="assets/css/bootstrap-formhelpers-currencies.flags.css" rel="stylesheet"> 
    <link href="assets/css/docs.css" rel="stylesheet"> 
    <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet"> 
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>-->
 
 
    <script> 
            function myFunction() { 
                var x = document.getElementById("myNavbar"); 
                if (x.className === "myNavbar") { 
                    x.className += " responsive"; 
                } else { 
                    x.className = "myNavbar"; 
                } 
            } 
     </script> 
 
 
<style> 
    #myNavbar { 
        overflow: hidden; 
        background-color: #333; 
        } 
 
        #myNavbar a { 
        float: left; 
        display: block; 
        color: #f2f2f2; 
        text-align: center; 
        padding: 14px 16px; 
        text-decoration: none; 
        font-size: 17px; 
        } 
 
        .myNavbar a:hover { 
        background-color: #ddd; 
        color: black; 
        } 
 
        .active { 
        background-color: #4CAF50; 
        color: white; 
        } 
 
        .myNavbar .icon { 
        display: none; 
        } 
 
        @media screen and (max-width: 600px) { 
        .myNavbar a:not(:first-child) {display: none;} 
        .myNavbar a.icon { 
            float: right; 
            display: block; 
        } 
        } 
 
        @media screen and (max-width: 600px) { 
        .myNavbar.responsive {position: relative;} 
        .myNavbar.responsive .icon { 
            position: absolute; 
            right: 0; 
            top: 0; 
        } 
        .myNavbar.responsive a { 
            float: none; 
            display: block; 
            text-align: left; 
        } 
        } 
</style> 
 
 
  <script> 
        $(function () { 
          $('#login').click(function () { 
            var url = "login_submit.php"; 
            $('#myModal .btn-primary').click(function () { 
              window.location.href = url; 
            }); 
          }); 
        }); 
 
        $(function () { 
          $('#register').click(function () { 
            var url = "student_details.php"; 
            $('#myModal2 .btn-primary').click(function () { 
              window.location.href = url; 
            }); 
          }); 
        }); 
    $(document).ready(function(){ 
      var date_input=$('input[name="date"]'); //our date input has the name "date" 
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body"; 
      var options={ 
        format: 'yyyy-mm-dd', 
        container: container, 
        todayHighlight: true, 
        autoclose: true, 
      }; 
      date_input.datepicker(options); 
    }); 
</script> 
 
 
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" /> 
  <style> 
  .mySlides {display:none} 
  .w3-left, .w3-right, .w3-badge {cursor:pointer} 
  .w3-badge {height:13px;width:13px;padding:0} 
 
  .navbar-inverse { margin : 0;} 
  </style> 
 
 
  <!-- footer starts--> 
  <style> 
    .footer { 
    position: fixed; 
    left: 0; 
    bottom: 0; 
    height: 20px; 
    width: 100%; 
    background-color: #1a1a1a; 
    color: white; 
    text-align: center; 
    } 
 </style> 
 <!-- footer ends--> 
 
 <!--media query for university list--> 
 
 <style> 
     @media only screen and (max-width: 600px) { 
        .unilist { 
            width:10px; 
        } 
 
        h1{ 
            color:red; 
        } 
 
 
    } 
 </style> 
 
 <!--media query ends--> 
 
</head> 
 
<script> 
 
</script> 


 
<style> 
.sidenav { 
    height: 87%; 
    width: 0; 
    position: fixed; 
    z-index: 1; 
    top: 0; 
    left: 0; 
    background-color: #0d0d0d; 
    overflow-x: hidden; 
    transition: 0.5s; 
    padding-top: 60px; 
} 
 
.sidenav a { 
    padding: 8px 8px 8px 32px; 
    text-decoration: none; 
    font-size: 18px; 
    color: white; 
    display: block; 
    transition: 0.3s; 
} 
 
.sidenav a:hover { 
    color: blue; 
} 
 
.sidenav .closebtn { 
    position: absolute; 
    top: 0; 
    right: 25px; 
    font-size: 36px; 
    margin-left: 50px; 
} 
 
@media screen and (max-height: 450px) { 
  .sidenav {padding-top: 15px;} 
  .sidenav a {font-size: 18px;} 
} 
</style> 
 
<!-- for search --> 
<!-- <style> 
.dropbtn { 
    background-color: black; 
    color: white; 
    padding: 16px; 
    font-size: 16px; 
    border-radius: 10px; 
    cursor: pointer; 
} 
 
.dropbtn:hover, .dropbtn:focus { 
    background-color: white; 
    color: black; 
} 
 
#myInput { 
    border-box: box-sizing; 
    background-color: #1a1a1a; 
    color: white; 
    background-position: 14px 12px; 
    background-repeat: no-repeat; 
    font-size: 16px; 
    padding: 14px 20px 12px 45px; 
     
    border-radius: 10px; 
     
} 
 
#myInput:focus { 
color:white;} 
 
.dropdown { 
    position: relative; 
    display: inline-block; 
    color: white; 
} 
 
.dropdown-content { 
    display: none; 
    position: absolute; 
    background-color: #1a1a1a; 
    color: white; 
    min-width: 230px; 
    overflow: auto; 
    border: 1px solid #ddd; 
    z-index: 1; 
} 
 
.dropdown-content a { 
    color: white; 
    padding: 12px 16px; 
    text-decoration: none; 
    display: block; 
} 
 
.dropdown a:hover {background-color: blue;} 
 
.show {display: block;} 
 
.searchbtn :hover{ 
    background-color:blue 
} 
 
</style> --> 
<!-- search ends --> 
 
<body style="background-color:#e6e6e6"> 
 
<!-- Nav Bar Starts--> 
 
<nav class="navbar navbar-inverse"> 
  <div class="container-fluid"> 
    <div class="navbar-header">       
    <div style="float:right";>            
       
      </div> 
    </div>  
 
 
    <div class="nav navbar-nav navbar" id="myNavbar"> 
    <div class="nav navbar-nav navbar"> 
 
    <!-- Side bar starts--> 
  <!--   
    <div id="mySidenav" class="sidenav" > 
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
  <a href="#">Upload Documents</a> 
  <a href="#">Apply Now</a> 
  <a href="#">Application Status</a> 
  <a href="#">Your Profile</a> 
</div> 
 
 
<span style="font-size:30px;cursor:pointer;color:white; padding-left:3px;" onclick="openNav()">&#9776;</span> 
 
<script> 
function openNav() { 
    document.getElementById("mySidenav").style.width = "250px"; 
} 
 
function closeNav() { 
    document.getElementById("mySidenav").style.width = "0"; 
} 
</script>  -->
 
<!-- side bar ends--> 
</div> 
<span style="font-size:30px;cursor:pointer;color:white; padding-left:3px; float:left;" onclick="openNav()">&#9776;</span> 
    <a class="navbar-brand" href="index.blade.php" style="padding-left:50px;color:white;">Scheme Portal</a> 
    </div> 
     
      <ul class="nav navbar-nav navbar-right"> 
 
        <li class="active"><a href="index.blade.php">Home</a></li> 
        <li><a href="#">Services</a></li> 
        <li><a href="#">About Us</a></li>   
        <li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-user"></span>Profile</a></li> 
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li> 
      </ul> 
    </div> 
  </div>   
</nav> 
<!-- Nav Bar Ends--> 

<!-- Side bar starts--> 

<div id="mySidenav" class="sidenav" > 
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> 
<button class="dropdown-btn">Categories 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="#">Education</a>
                      <a href="#">Jobs</a>
                      <a href="#">Agriculture</a>
                      <a href="#">Pension and retirement</a>
                    </div>
<a href="Upload_documents.php">Upload Documents</a> 
<a href="University_search.php">Apply Now</a> 
<a href="application_status.php">Application Status</a> 
<a href="profile.php">Your Profile</a> 
</div> 


<script>
                  /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
                  var dropdown = document.getElementsByClassName("dropdown-btn");
                  var i;
                  
                  for (i = 0; i < dropdown.length; i++) {
                    dropdown[i].addEventListener("click", function() {
                      this.classList.toggle("active");
                      var dropdownContent = this.nextElementSibling;
                      if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                      } else {
                        dropdownContent.style.display = "block";
                      }
                    });
                  }
                  </script>
                  

<script> 
function openNav() { 
document.getElementById("mySidenav").style.width = "250px"; 
} 

function closeNav() { 
document.getElementById("mySidenav").style.width = "0"; 
} 
</script>  

<!-- side bar ends--> 

 
 
