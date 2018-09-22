<!Doctype HTML>
<html>
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

            <style>
                    body {
                        font-family: "Lato", sans-serif;
                    }
                    
                    /* Fixed sidenav, full height */
                    .sidenav {
                        height: 100%;
                        width: 200px;
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
        </div>
    </body>
</html>