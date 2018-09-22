<!--<?php 
    include('login_submit.php');  
    include('student_details.php');    
?> 
<?php   
  session_start(); 
  if(isset($_SESSION['User_Email'])){ 
    header("location:index.html"); 
  } 
?> 
-->
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
        <li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> 
        <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
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

 
 
<!-- Image Slider Starts--> 
<script type="text/javascript"> 
  $(document).ready(function() { 
    $('#myCarousel').carousel({ 
      interval: 5000 
    }) 
  }); 
</script> 
     
 
   
<!-- Full Page Image Background Carousel Header --> 
<header id="myCarousel" class="carousel slide"> 
    <!-- Indicators --> 
    <ol class="carousel-indicators"> 
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
        <li data-target="#myCarousel" data-slide-to="1"></li> 
        <li data-target="#myCarousel" data-slide-to="2"></li> 
        <li data-target="#myCarousel" data-slide-to="3"></li> 
        <li data-target="#myCarousel" data-slide-to="4"></li> 
        <li data-target="#myCarousel" data-slide-to="5"></li> 
        <li data-target="#myCarousel" data-slide-to="6"></li> 
        <li data-target="#myCarousel" data-slide-to="7"></li> 
        
    </ol> 
 
    <!-- Wrapper for Slides --> 
    <div class="carousel-inner"> 
        <div class="item active"> 
            <!-- Set the first background image using inline CSS below. --> 
            <img src="education.jpg" style="width:100%; height:450px;"> 
             
        </div> 
        <div class="item"> 
            <!-- Set the second background image using inline CSS below. --> 
            <img src="agriculture.jpg" style="width:100%; height:450px;"> 
        </div> 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="busi.jpg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="health.jpg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="elec.jpg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="job.jpg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="money.jpg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="pension.png" style="width:100%; height:450px;"> 
        </div> 
 
        
    </div> 
 
    <!-- Controls --> 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> 
        <span class="icon-prev"></span> 
    </a> 
    <a class="right carousel-control" href="#myCarousel" data-slide="next"> 
        <span class="icon-next"></span> 
    </a> 
 
</header><style> 
    button{ 
        padding:0px; 
        margin:0px; 
        background:none; 
        border:none; 
    } 
    button:focus {outline:0;} 
</style> 
<script> 
$(document).ready(function(){ 
    $("#post").click(function(){ 
        $("#box").load("post.php"); 
    }); 
  $("#profile").click(function(){ 
        $("#box").load("profile.php"); 
    }); 
}); 
</script> 
 
<!-- Image Slider Ends--> 
 
<!-- search by university starts--> 
<!-- 
<div style="float:right; padding-right:200px; padding-top:20px;"> 
<div class="dropdown"> 
<button onclick="myFunction()" class="dropbtn">Universities</button> 
<br><br> 
  <div id="myDropdown" class="dropdown-content"> 
    <input type="text" placeholder="Search by University .." id="myInput" onkeyup="filterFunction()"> 
    <a href="#"></a> 
    <a href="#">University of Oxford</a> 
    <a href="#">Massachusetts Institute of Technology</a> 
    <a href="#">Stanford University</a> 
    <a href="#">Harvard University</a> 
    <a href="#">California Institute of Technology</a> 
    <a href="#">University of Cambridge</a> 
    <a href="#">Imperial College London</a> 
    <a href="#">University of Chicago</a> 
  </div> 
</div> 
</div> 
 
<script> 
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */ 
function myFunction() { 
    document.getElementById("myDropdown").classList.toggle("show"); 
} 
 
function filterFunction() { 
    var input, filter, ul, li, a, i; 
    input = document.getElementById("myInput"); 
    filter = input.value.toUpperCase(); 
    div = document.getElementById("myDropdown"); 
    a = div.getElementsByTagName("a"); 
    for (i = 0; i < a.length; i++) { 
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) { 
            a[i].style.display = ""; 
        } else { 
            a[i].style.display = "none"; 
        } 
    } 
} 
</script>--> 
 
<!-- search by course--> 
<!-- 
<div style="float:right; padding-right:400px; padding-top:20px;"> 
<div class="dropdown"> 
<button onclick="myFunctionC()" class="dropbtn">Courses</button> 
<br><br> 
  <div id="myDropdownC" class="dropdown-content"> 
    <input type="text" placeholder="Search by Courses .." id="myInputC" onkeyup="filterFunctionC()"> 
    <a href="#"></a> 
    <a href="#">Masters in Graphics</a> 
    <a href="#">Natural Sciences</a> 
    <a href="#">Diploma in Tourism</a> 
    <a href="#">Hotel Managmenet/a> 
    <a href="#">Mass Communication</a> 
    <a href="#">Biological Sciences</a> 
    <a href="#">History and Philosphy</a> 
    <a href="#">Business</a> 
  </div> 
</div> 
</div> 
 
<script> 
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */ 
function myFunctionC() { 
    document.getElementById("myDropdownC").classList.toggle("show"); 
} 
 
function filterFunction() { 
    var input, filter, ul, li, a, i; 
    input = document.getElementById("myInputC"); 
    filter = input.value.toUpperCase(); 
    div = document.getElementById("myDropdownC"); 
    a = div.getElementsByTagName("a"); 
    for (i = 0; i < a.length; i++) { 
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) { 
            a[i].style.display = ""; 
        } else { 
            a[i].style.display = "none"; 
        } 
    } 
} 
</script> --> 
<!-- search by course ends--> 
 
 
<!-- search by university ends --> 
 
<!-- SEARCH BY COURSE-->     
<br> 
<div class="container"> 
<!-- UNIVERSITY SEARCH ENDS--> 
 
 
 
<!-- University list starts --> 

<div class="container"> 
  <h2>Scheme Categories : </h2> 
 
 
  <div class="row" > 
 
    <div class="col-md-4"> 
            <div class="thumbnail"> 
            <a href="california.jpg"> 
                <img src="edu.jpg" alt="California" style="width:100%;height:135px;"> 
                <div class="caption"> 
                <a href="california.html" style="color:blue; font-size:18px">Education</a> 
                </div> 
            </a> 
            </div> 
        </div> 
 
    <div class="col-md-4"> 
          <div class="thumbnail"> 
           <a href="cambridge.jpg"> 
           <img src="agri.jpg" alt="Cambridge" style="width:100%;height:135px;"> 
           <div class="caption"> 
           <a href="cambridge.html" style="color:blue; font-size:18px">Agriculture</a> 
           </div> 
           </a> 
           </div> 
     </div> 
     
      <div class="col-md-4"> 
            <div class="thumbnail"> 
            <a href="chicago.jpg"> 
                <img src="business.jpg" alt="Chicago" style="width:100%;height:135px;"> 
                <div class="caption"> 
                <a href="chicago.html" style="color:blue; font-size:18px">Business</a> 
                </div> 
            </a> 
            </div> 
        </div> 
 
 
        <div class="col-md-4"> 
                <div class="thumbnail"> 
                <a href="harvard.jpg"> 
                    <img src="elect.jpg" alt="Harvard" style="width:100%;height:135px;"> 
                    <div class="caption"> 
                    <a href="harvard.html" style="color:blue; font-size:18px">Electricity</a> 
                    </div> 
                </a> 
                </div> 
            </div> 
 
            <div class="col-md-4"> 
                    <div class="thumbnail"> 
                    <a href="imperiallondon.jpg"> 
                        <img src="imperiallondon.jpg" alt="Imperial College of London" style="width:100%;height:135px;"> 
                        <div class="caption"> 
                        <a href="imperiallondon.html" style="color:blue; font-size:18px">Imperial College of London</a> 
                        </div> 
                    </a> 
                    </div> 
                </div> 
 
                <div class="col-md-4"> 
                        <div class="thumbnail"> 
                        <a href="mit.jpg"> 
                            <img src="mit.jpg" alt="Harvard" style="width:100%;height:135px;"> 
                            <div class="caption"> 
                            <a href="mit.html" style="color:blue; font-size:18px">Massachusetts Institute of Technology</a> 
                            </div> 
                        </a> 
                        </div> 
                    </div> 
 
                    <div class="col-md-4"> 
                            <div class="thumbnail"> 
                            <a href="oxford.jpg"> 
                                <img src="oxford.jpg" alt="Harvard" style="width:100%;height:135px;"> 
                                <div class="caption"> 
                                <a href="oxford.jpg" style="color:blue; font-size:18px">Oxford University</a> 
                                </div> 
                            </a> 
                            </div> 
                        </div> 
 
                        <div class="col-md-4"> 
                                <div class="thumbnail"> 
                                <a href="princeton.png"> 
                                    <img src="princeton.png" alt="Harvard" style="width:100%;height:135px;"> 
                                    <div class="caption"> 
                                    <a href="princeton.png" style="color:blue; font-size:18px">Princeton University</a> 
                                    </div> 
                                </a> 
                                </div> 
                            </div> 
 
                            <div class="col-md-4"> 
                                    <div class="thumbnail"> 
                                    <a href="stanford.jpg"> 
                                        <img src="stanford.jpg" alt="Harvard" style="width:100%;height:135px;"> 
                                        <div class="caption"> 
                                        <a href="stanford.jpg" style="color:blue; font-size:18px">Stanford University</a> 
                                        </div> 
                                    </a> 
                                    </div> 
                                </div> 
     
</div> 
 
<div class="col-sm-6 text-right" style="float:right; padding-right:50px;"> 
<h3><a href="University_search.php"><button type="button" class="btn btn-primary">SEE MORE UNIVERSITIES <i class="fa fa-chevron-right"></i></button></a></h3> 
</div> 
<br> 
<br> 
<br> 
<br> 
 
 
<!-- university list ends --> 
 
 
<div class="footer"> 
  <p>Copyright &#169 Egnitia Admissions</p> 
</div> 
 
<div class="container"> 
 
 
<!-- Login - START --> 
 
<div class="container pb-modalreglog-container"> 
    <div class="row"> 
        <div class="col-md-12 col-md-4 col-md-offset-4"> 
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                <div class="modal-dialog" role="document"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                <span aria-hidden="true">&times;</span> 
                            </button> 
                            <h4 class="modal-title" id="myModalLabel">Login form</h4> 
                        </div> 
                        <div class="modal-body"> 
                            <form action="login_submit.php" method="POST"> 
                                <div class="form-group"> 
                                    <label for="email">Email Id</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <input type="email" class="form-control" id="User_Email" name="User_Email" placeholder="Email"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span> 
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="password">Password</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <input type="password" class="form-control" id="User_Password" name="User_Password" placeholder="Password"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span> 
                                    </div> 
                                    <div class="form-group"> 
                                      <button style="float:left; margin-top: 20px;" type="submit" class="btn btn-primary" name="loginbutton" id="login">Log in</button> 
                                    </div> 
                                      
                                </div> 
                            </form> 
                        </div> 
                        <div class="modal-footer" style="margin-top: 40px;">  
                            <a style="float:left; font-size: 100%; padding-left: 10px;"href="#">Forgot password?</a> 
                            <div style="float:right; font-size: 100%; top:10px;"> 
                             
                                            Don't have an account? 
                                        <a href="index.html" onClick="$('#myModal').hide(); $('#myModal2').show();"  data-toggle="modal" data-target="#myModal2"> 
                                            Sign Up Here 
                                        </a> 
                             
                                  
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
             
<!-- Login Modal - END --> 
 
</div> 
 
<div class="container"> 
<!--SignUp Modal - START --> 
<script>

            $(document).ready(function() {
        // Initialize form validation on the registration form.
        // It has the name attribute "registration"
        $("form").submit(function(){
        $("form[name='validate']").validate({
            // Specify validation rules
            rules: {
            // The key name on the left side is the name attribute
            // of an input field. Validation rules are defined
            // on the right side
            FirstName: {
            required: function(element) {
                return $("#FirstName").is(':empty');
            }
            },

            MiddleName: {
            required: function(element) {
                return $("#MiddleName").is(':empty');
            }
            },
            
            LastName: {
            required: function(element) {
                return $("#Lastname").is(':empty');
            }
            },

            //FirstName: "required",
            //MiddleName: "required",
            LastName: "required",
            Email: {
                required: true,
                // Specify that email should be validated
                // by the built-in "email" rule
                Email: true
            },
            Password: {
                required: true,
                minlength: 8
            }
            },
            // Specify validation error messages
            messages: {
            FirstName: "Please enter your firstname",
            LastName: "Please enter your lastname",
            Password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 6 characters long"
            },
            Email: "Please enter a valid email address"
            },
            // Make sure the form is submitted to the destination defined
            // in the "action" attribute of the form when valid
            submitHandler: function(form) {
            form.submit();
            }
        });
        });
            });

</script>
    <div class="col-md-12 col-md-4 col-md-offset-4" "> 
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
                <div class="modal-dialog" role="document" style="width:450px;"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                                <span aria-hidden="true">&times;</span> 
                            </button> 
                            <h4 class="modal-title" id="myModalLabel">Registration form</h4> 
                        </div> 
                        <div class="modal-body"> 
                            <form action="student_details.php" method="POST" class="pb-modalreglog-form-reg" name="validate" onsubmit="validateForm()"> 
                                <div class="form-group"> 
                                    <div id="pb-modalreglog-progressbar"></div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">First Name</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> 
                                        <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" required="required"> 
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">Middle Name</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> 
                                        <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="Middle Name" required="required"> 
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">Last Name</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> 
                                        <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name" required> 
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">Former Last Name</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> 
                                        <input type="text" class="form-control" id="FormerLastName" name="FormerLastName" placeholder="Former Last Name" > 
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">Gender</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> 
                                        <select name="Gender" class="form-control" required> 
                                          <option value="M">Male</option> 
                                          <option value="F">Female</option> 
                                          <option value="O">Other</option> 
                                        </select> 
                                        
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">DOB</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span> 
                                        <input type="text" class="form-control" id="DOB" name="date" placeholder="Date of Birth" required> 
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="firstname">Phone No.</label> 
                                      <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span> 
                                        <input type="number" class="form-control" id="PhoneNo" name="PhoneNo" placeholder="Phone No." required > 
                                      </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="email">Email Id</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span> 
                                        <input type="email" class="form-control" id="Email" name="Email" placeholder="Email" required> 
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="password">Password</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span> 
                                        <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" required="true"  required minlength="8"> 
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="confirmpassword">Confirm password</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span> 
                                        <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password" required> 
                                    </div> 
                                </div> 
                                <div class="form-group"> 
                                    <label for="confirmpassword">Current Address</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span> 
                                        <input type="text" class="form-control" id="CurrentAddress" name="CurrentAddress" placeholder="Current Address" required> 
                                    </div> 
                                </div> 
 
                                <div class="form-group"> 
                                    <label for="confirmpassword">Permanent Address</label> 
                                    <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span> 
                                        <input type="text" class="form-control" id="PermanentAddress" name="PermanentAddress" placeholder="Current Address" required> 
                                    </div> 
                                </div> 
 
                               <!-- <select class="selectpicker countrypicker" 
                                        data-live-search="true" 
                                        data-default="United States" 
                                        data-flag="true"> 
                                </select> --> 
                                <div class="form-group" style="float: left"> 
                                        <label for="country">Country</label> 
                                        <div class="input-group pb-modalreglog-input-group"> 
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span> 
                                        <select name="Country" class="form-control" required> 
                                                <option value="AF">Afghanistan</option> 
                                                <option value="AX">Åland Islands</option> 
                                                <option value="AL">Albania</option> 
                                                <option value="DZ">Algeria</option> 
                                                <option value="AS">American Samoa</option> 
                                                <option value="AD">Andorra</option> 
                                                <option value="AO">Angola</option> 
                                                <option value="AI">Anguilla</option> 
                                                <option value="AQ">Antarctica</option> 
                                                <option value="AG">Antigua and Barbuda</option> 
                                                <option value="AR">Argentina</option> 
                                                <option value="AM">Armenia</option> 
                                                <option value="AW">Aruba</option> 
                                                <option value="AU">Australia</option> 
                                                <option value="AT">Austria</option> 
                                                <option value="AZ">Azerbaijan</option> 
                                                <option value="BS">Bahamas</option> 
                                                <option value="BH">Bahrain</option> 
                                                <option value="BD">Bangladesh</option> 
                                                <option value="BB">Barbados</option> 
                                                <option value="BY">Belarus</option> 
                                                <option value="BE">Belgium</option> 
                                                <option value="BZ">Belize</option> 
                                                <option value="BJ">Benin</option> 
                                                <option value="BM">Bermuda</option> 
                                                <option value="BT">Bhutan</option> 
                                                <option value="BO">Bolivia, Plurinational State of</option> 
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option> 
                                                <option value="BA">Bosnia and Herzegovina</option> 
                                                <option value="BW">Botswana</option> 
                                                <option value="BV">Bouvet Island</option> 
                                                <option value="BR">Brazil</option> 
                                                <option value="IO">British Indian Ocean Territory</option> 
                                                <option value="BN">Brunei Darussalam</option> 
                                                <option value="BG">Bulgaria</option> 
                                                <option value="BF">Burkina Faso</option> 
                                                <option value="BI">Burundi</option> 
                                                <option value="KH">Cambodia</option> 
                                                <option value="CM">Cameroon</option> 
                                                <option value="CA">Canada</option> 
                                                <option value="CV">Cape Verde</option> 
                                                <option value="KY">Cayman Islands</option> 
                                                <option value="CF">Central African Republic</option> 
                                                <option value="TD">Chad</option> 
                                                <option value="CL">Chile</option> 
                                                <option value="CN">China</option> 
                                                <option value="CX">Christmas Island</option> 
                                                <option value="CC">Cocos (Keeling) Islands</option> 
                                                <option value="CO">Colombia</option> 
                                                <option value="KM">Comoros</option> 
                                                <option value="CG">Congo</option> 
                                                <option value="CD">Congo, the Democratic Republic of the</option> 
                                                <option value="CK">Cook Islands</option> 
                                                <option value="CR">Costa Rica</option> 
                                                <option value="CI">Côte d'Ivoire</option> 
                                                <option value="HR">Croatia</option> 
                                                <option value="CU">Cuba</option> 
                                                <option value="CW">Curaçao</option> 
                                                <option value="CY">Cyprus</option> 
                                                <option value="CZ">Czech Republic</option> 
                                                <option value="DK">Denmark</option> 
                                                <option value="DJ">Djibouti</option> 
                                                <option value="DM">Dominica</option> 
                                                <option value="DO">Dominican Republic</option> 
                                                <option value="EC">Ecuador</option> 
                                                <option value="EG">Egypt</option> 
                                                <option value="SV">El Salvador</option> 
                                                <option value="GQ">Equatorial Guinea</option> 
                                                <option value="ER">Eritrea</option> 
                                                <option value="EE">Estonia</option> 
                                                <option value="ET">Ethiopia</option> 
                                                <option value="FK">Falkland Islands (Malvinas)</option> 
                                                <option value="FO">Faroe Islands</option> 
                                                <option value="FJ">Fiji</option> 
                                                <option value="FI">Finland</option> 
                                                <option value="FR">France</option> 
                                                <option value="GF">French Guiana</option> 
                                                <option value="PF">French Polynesia</option> 
                                                <option value="TF">French Southern Territories</option> 
                                                <option value="GA">Gabon</option> 
                                                <option value="GM">Gambia</option> 
                                                <option value="GE">Georgia</option> 
                                                <option value="DE">Germany</option> 
                                                <option value="GH">Ghana</option> 
                                                <option value="GI">Gibraltar</option> 
                                                <option value="GR">Greece</option> 
                                                <option value="GL">Greenland</option> 
                                                <option value="GD">Grenada</option> 
                                                <option value="GP">Guadeloupe</option> 
                                                <option value="GU">Guam</option> 
                                                <option value="GT">Guatemala</option> 
                                                <option value="GG">Guernsey</option> 
                                                <option value="GN">Guinea</option> 
                                                <option value="GW">Guinea-Bissau</option> 
                                                <option value="GY">Guyana</option> 
                                                <option value="HT">Haiti</option> 
                                                <option value="HM">Heard Island and McDonald Islands</option> 
                                                <option value="VA">Holy See (Vatican City State)</option> 
                                                <option value="HN">Honduras</option> 
                                                <option value="HK">Hong Kong</option> 
                                                <option value="HU">Hungary</option> 
                                                <option value="IS">Iceland</option> 
                                                <option value="IN">India</option> 
                                                <option value="ID">Indonesia</option> 
                                                <option value="IR">Iran, Islamic Republic of</option> 
                                                <option value="IQ">Iraq</option> 
                                                <option value="IE">Ireland</option> 
                                                <option value="IM">Isle of Man</option> 
                                                <option value="IL">Israel</option> 
                                                <option value="IT">Italy</option> 
                                                <option value="JM">Jamaica</option> 
                                                <option value="JP">Japan</option> 
                                                <option value="JE">Jersey</option> 
                                                <option value="JO">Jordan</option> 
                                                <option value="KZ">Kazakhstan</option> 
                                                <option value="KE">Kenya</option> 
                                                <option value="KI">Kiribati</option> 
                                                <option value="KP">Korea, Democratic People's Republic of</option> 
                                                <option value="KR">Korea, Republic of</option> 
                                                <option value="KW">Kuwait</option> 
                                                <option value="KG">Kyrgyzstan</option> 
                                                <option value="LA">Lao People's Democratic Republic</option> 
                                                <option value="LV">Latvia</option> 
                                                <option value="LB">Lebanon</option> 
                                                <option value="LS">Lesotho</option> 
                                                <option value="LR">Liberia</option> 
                                                <option value="LY">Libya</option> 
                                                <option value="LI">Liechtenstein</option> 
                                                <option value="LT">Lithuania</option> 
                                                <option value="LU">Luxembourg</option> 
                                                <option value="MO">Macao</option> 
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option> 
                                                <option value="MG">Madagascar</option> 
                                                <option value="MW">Malawi</option> 
                                                <option value="MY">Malaysia</option> 
                                                <option value="MV">Maldives</option> 
                                                <option value="ML">Mali</option> 
                                                <option value="MT">Malta</option> 
                                                <option value="MH">Marshall Islands</option> 
                                                <option value="MQ">Martinique</option> 
                                                <option value="MR">Mauritania</option> 
                                                <option value="MU">Mauritius</option> 
                                                <option value="YT">Mayotte</option> 
                                                <option value="MX">Mexico</option> 
                                                <option value="FM">Micronesia, Federated States of</option> 
                                                <option value="MD">Moldova, Republic of</option> 
                                                <option value="MC">Monaco</option> 
                                                <option value="MN">Mongolia</option> 
                                                <option value="ME">Montenegro</option> 
                                                <option value="MS">Montserrat</option> 
                                                <option value="MA">Morocco</option> 
                                                <option value="MZ">Mozambique</option> 
                                                <option value="MM">Myanmar</option> 
                                                <option value="NA">Namibia</option> 
                                                <option value="NR">Nauru</option> 
                                                <option value="NP">Nepal</option> 
                                                <option value="NL">Netherlands</option> 
                                                <option value="NC">New Caledonia</option> 
                                                <option value="NZ">New Zealand</option> 
                                                <option value="NI">Nicaragua</option> 
                                                <option value="NE">Niger</option> 
                                                <option value="NG">Nigeria</option> 
                                                <option value="NU">Niue</option> 
                                                <option value="NF">Norfolk Island</option> 
                                                <option value="MP">Northern Mariana Islands</option> 
                                                <option value="NO">Norway</option> 
                                                <option value="OM">Oman</option> 
                                                <option value="PK">Pakistan</option> 
                                                <option value="PW">Palau</option> 
                                                <option value="PS">Palestinian Territory, Occupied</option> 
                                                <option value="PA">Panama</option> 
                                                <option value="PG">Papua New Guinea</option> 
                                                <option value="PY">Paraguay</option> 
                                                <option value="PE">Peru</option> 
                                                <option value="PH">Philippines</option> 
                                                <option value="PN">Pitcairn</option> 
                                                <option value="PL">Poland</option> 
                                                <option value="PT">Portugal</option> 
                                                <option value="PR">Puerto Rico</option> 
                                                <option value="QA">Qatar</option> 
                                                <option value="RE">Réunion</option> 
                                                <option value="RO">Romania</option> 
                                                <option value="RU">Russian Federation</option> 
                                                <option value="RW">Rwanda</option> 
                                                <option value="BL">Saint Barthélemy</option> 
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option> 
                                                <option value="KN">Saint Kitts and Nevis</option> 
                                                <option value="LC">Saint Lucia</option> 
                                                <option value="MF">Saint Martin (French part)</option> 
                                                <option value="PM">Saint Pierre and Miquelon</option> 
                                                <option value="VC">Saint Vincent and the Grenadines</option> 
                                                <option value="WS">Samoa</option> 
                                                <option value="SM">San Marino</option> 
                                                <option value="ST">Sao Tome and Principe</option> 
                                                <option value="SA">Saudi Arabia</option> 
                                                <option value="SN">Senegal</option> 
                                                <option value="RS">Serbia</option> 
                                                <option value="SC">Seychelles</option> 
                                                <option value="SL">Sierra Leone</option> 
                                                <option value="SG">Singapore</option> 
                                                <option value="SX">Sint Maarten (Dutch part)</option> 
                                                <option value="SK">Slovakia</option> 
                                                <option value="SI">Slovenia</option> 
                                                <option value="SB">Solomon Islands</option> 
                                                <option value="SO">Somalia</option> 
                                                <option value="ZA">South Africa</option> 
                                                <option value="GS">South Georgia and the South Sandwich Islands</option> 
                                                <option value="SS">South Sudan</option> 
                                                <option value="ES">Spain</option> 
                                                <option value="LK">Sri Lanka</option> 
                                                <option value="SD">Sudan</option> 
                                                <option value="SR">Suriname</option> 
                                                <option value="SJ">Svalbard and Jan Mayen</option> 
                                                <option value="SZ">Swaziland</option> 
                                                <option value="SE">Sweden</option> 
                                                <option value="CH">Switzerland</option> 
                                                <option value="SY">Syrian Arab Republic</option> 
                                                <option value="TW">Taiwan, Province of China</option> 
                                                <option value="TJ">Tajikistan</option> 
                                                <option value="TZ">Tanzania, United Republic of</option> 
                                                <option value="TH">Thailand</option> 
                                                <option value="TL">Timor-Leste</option> 
                                                <option value="TG">Togo</option> 
                                                <option value="TK">Tokelau</option> 
                                                <option value="TO">Tonga</option> 
                                                <option value="TT">Trinidad and Tobago</option> 
                                                <option value="TN">Tunisia</option> 
                                                <option value="TR">Turkey</option> 
                                                <option value="TM">Turkmenistan</option> 
                                                <option value="TC">Turks and Caicos Islands</option> 
                                                <option value="TV">Tuvalu</option> 
                                                <option value="UG">Uganda</option> 
                                                <option value="UA">Ukraine</option> 
                                                <option value="AE">United Arab Emirates</option> 
                                                <option value="GB">United Kingdom</option> 
                                                <option value="US">United States</option> 
                                                <option value="UM">United States Minor Outlying Islands</option> 
                                                <option value="UY">Uruguay</option> 
                                                <option value="UZ">Uzbekistan</option> 
                                                <option value="VU">Vanuatu</option> 
                                                <option value="VE">Venezuela, Bolivarian Republic of</option> 
                                                <option value="VN">Viet Nam</option> 
                                                <option value="VG">Virgin Islands, British</option> 
                                                <option value="VI">Virgin Islands, U.S.</option> 
                                                <option value="WF">Wallis and Futuna</option> 
                                                <option value="EH">Western Sahara</option> 
                                                <option value="YE">Yemen</option> 
                                                <option value="ZM">Zambia</option> 
                                                <option value="ZW">Zimbabwe</option> 
                                            </select> 
                                        </div><br> 
                                        <div class="form-group" style="float: left"> 
                                          <label for="usertype">Register As</label> 
                                          <div class="input-group pb-modalreglog-input-group"> 
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> 
                                            <select name="UserType" class="form-control" required> 
                                              <option value="0">Student</option> 
                                              <option value="1">Agent</option> 
                                              <option value="2">Marketer</option> 
                                            </select> 
                                        </div> 
                                      </div> 
                                    </div><br><br> 
                                    <div class="modal-footer"> 
                            <button type="submit" id="register" name="registerbutton" class="btn btn-primary">Sign up</button> 

                          
                        </div> 
                            </form> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
 
<style> 
    .pb-modalreglog-container 
    { 
        margin-top: 100px; 
    } 
 
    .pb-modalreglog-legend 
    { 
        text-align: center; 
    } 
 
    .pb-modalreglog-input-group 
    { 
        margin: auto; 
    } 
 
    .pb-modalreglog-submit 
    { 
        margin-left: 5px; 
    } 
 
    .pb-modalreglog-form-reg 
    { 
        text-align: center; 
    } 
 
    .pb-modalreglog-footer p 
    { 
        text-align: center; 
        margin-top: 20px; 
    } 
 
    #pb-modalreglog-progressbar 
    { 
        border-radius: 2px; 
    } 
</style> 
 
<script> 
    $(function () { 
        var progress = $("#pb-modalreglog-progressbar").shieldProgressBar({ 
            value: 0 
        }).swidget(); 
 
        $('#inputEmail').change(function () { 
            if ($('#inputEmail').val().length > 1) { 
                progress.value(progress.value() + 15); 
            } else { 
                progress.value(progress.value() - 15); 
            } 
        }); 
 
        $('#inputPws').change(function () { 
            if ($('#inputPws').val().length > 1) { 
                progress.value(progress.value() + 15); 
            } else { 
                progress.value(progress.value() - 15); 
            } 
        }); 
 
        $('#inputConfirmPws').change(function () { 
            if ($('#inputConfirmPws').val().length > 1) { 
                progress.value(progress.value() + 15); 
            } else { 
                progress.value(progress.value() - 15); 
            } 
        }); 
 
        $('#countries').change(function () { 
            if ($('#countries').val().length > 1) { 
                progress.value(progress.value() + 15); 
            } else { 
                progress.value(progress.value() - 15); 
            } 
        }); 
 
        $('#age').change(function () { 
            if ($('#age').val().length > 1) { 
                progress.value(progress.value() + 15); 
            } else { 
                progress.value(progress.value() - 15); 
            } 
        }); 
 
        $('#ch').change(function () { 
            if ($('input[name="chs"]:checked').length > 0) { 
                progress.value(progress.value() + 25); 
            } else { 
                progress.value(progress.value() - 25); 
            } 
        }); 
 
        $("#age").shieldMaskedTextBox({ 
            enabled: true, 
            mask: "00/00/0000", 
            value: "19/03/1032" 
        }); 
    }) 
</script> 
 
<!-- Login And SignUp Modal - END --> 
 
</div> 
 
 
</body> 
</html>