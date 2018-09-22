<!Doctype HTML>
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <style>
                    body {
                        font-family: "Lato", sans-serif;
                    }
                    
                    /* Fixed sidenav, full height */
                    .sidenav {
                        height: 100%;
                        width: 200px;
                        margin-top : 52px;
                        position: fixed;
                        z-index: 1;
                        top: 0;
                        left: 0;
                        background-color: #111;
                        overflow-x: hidden;
                        padding-top: 20px;
                    }
                    
                    /* Style the sidenav links and the dropdown button */
                    .sidenav a, .dropdown-btn {
                        padding: 6px 8px 6px 16px;
                        text-decoration: none;
                        font-size: 20px;
                        color: #818181;
                        display: block;
                        border: none;
                        background: none;
                        width: 100%;
                        text-align: left;
                        cursor: pointer;
                        outline: none;
                    }
                    
                    /* On mouse-over */
                    .sidenav a:hover, .dropdown-btn:hover {
                        color: #f1f1f1;
                    }
                    
                    /* Main content */
                    .main {
                        margin-left: 200px; /* Same as the width of the sidenav */
                        font-size: 20px; /* Increased text to enable scrolling */
                        padding: 0px 10px;
                    }
                    
                    /* Add an active class to the active dropdown button */
                    .active {
                        background-color: green;
                        color: white;
                    }
                    
                    /* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
                    .dropdown-container {
                        display: none;
                        background-color: #262626;
                        padding-left: 8px;
                    }
                    
                    /* Optional: Style the caret down icon */
                    .fa-caret-down {
                        float: right;
                        padding-right: 8px;
                    }
                    
                    /* Some media queries for responsiveness */
                    @media screen and (max-height: 450px) {
                        .sidenav {padding-top: 15px;}
                        .sidenav a {font-size: 18px;}
                    }
                    </style>
    </head>

    <body>
        <div class="animated slideInLeft ">
            
        <nav class="navbar navbar-inverse">
            
              <div class="navbar-header">
                <img src="final_logo.jpg" style="height:50px", float:"left" class="animated slideInLeft delay-2s"></img >
                <a class="navbar-brand" href="#" style="float:right; padding-left:30px">WebSiteName</a>
              </div>
              <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="glyphicon glyphicon-search"></i>
                    </button>
                  </div>
                </div>
              </form>
              <ul class="nav navbar-nav navbar-right">
                    
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Home</a></li>
                
              </ul>
              
              
            </div>
          </nav>



          
          <div class="sidenav">
                    <button class="dropdown-btn">Categories 
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                      <a href="#">Education</a>
                      <a href="#">Jobs</a>
                      <a href="#">Agriculture</a>
                      <a href="#">Pension and retirement</a>
                    </div>
                    <a href="#">Documents' Info</a>
                    <a href="#">FAQ</a>
                    <a href="#">Forum</a>
                    <a href="#about">Chat Bot</a> 
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
           
        </div>


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
        <li data-target="#myCarousel" data-slide-to="8"></li> 
        <li data-target="#myCarousel" data-slide-to="11"></li> 
        <li data-target="#myCarousel" data-slide-to="10"></li> 
         
    </ol> 
 
    <!-- Wrapper for Slides --> 
    <div class="carousel-inner"> 
        <div class="item active"> 
            <!-- Set the first background image using inline CSS below. --> 
            <img src="university1.jpeg" style="width:100%; height:450px;"> 
             
        </div> 
        <div class="item"> 
            <!-- Set the second background image using inline CSS below. --> 
            <img src="university2.jpeg" style="width:100%; height:450px;"> 
        </div> 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="university3.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="university4.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="university5.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university6.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university7.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university8.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university9.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university10.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university11.jpeg" style="width:100%; height:450px;"> 
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
 

    </body>
</html>