
<?php
    $con =mysqli_connect("localhost","root","qweasdzxc","egnitia_localhost") or die(mysqli_error($con));
    //$con =mysqli_connect("localhost","egnitiaa_vishal","qweasdzxc","egnitiaa_EgnitiaAdmissions"); 

   
   
    session_start();
        $_SESSION["logged_in"] = true; 
    
    $User_id= $_SESSION["User_id"];

    #fetching details from database
    $result1 = mysqli_query($con,"SELECT * FROM User WHERE User_id = '".$User_id."'");
    $row1=mysqli_fetch_assoc($result1);
    $user_type=$row1['User_type'];

    if($user_type==0){
            $result = mysqli_query($con,"SELECT * FROM Student WHERE User_id = '".$User_id."'");
            $row=mysqli_fetch_assoc($result);
            $image=$row1['User_Picture'];
            $fname=$row['First_name'];
            $lname=$row['Last_name'];
            $dob=$row['DOB'];
            $gender=$row['Gender'];
            if($gender=='M'){
                $gender="Male";}
            if($gender=='F'){
                $gender="Female";}   
            if($gender=='O'){
                $gender="Other";}        
            $c_address=$row['Current_Address'];
            $email=$row['Email'];
            $phone_no=$row['Phone_no'];}

        else if($user_type==1){
            $result = mysqli_query($con,"SELECT * FROM agent WHERE Agent_id = '".$User_id."'");
            $row=mysqli_fetch_assoc($result);
            $image=$row1['User_Picture'];
            $fname=$row['First_Name'];
            $lname=$row['Last_Name'];
            $dob=$row['DOB'];
            $gender=$row['Gender'];
            if($gender=='M'){
                $gender="Male";}
            if($gender=='F'){
                $gender="Female";}   
            if($gender=='O'){
                $gender="Other";}        
            $c_address=$row['Current_Address'];
            $email=$row['Email'];
            $phone_no=$row['Phone_no'];
        }
        else{
            $result = mysqli_query($con,"SELECT * FROM marketer WHERE Marketer_id = '".$User_id."'");
            $row=mysqli_fetch_assoc($result);
            $image=$row1['User_Picture'];
            $fname=$row['First_name'];
            $lname=$row['Last_name'];
            $dob=$row['DOB'];
            $gender=$row['Gender'];
            if($gender=='M'){
                $gender="Male";}
            if($gender=='F'){
                $gender="Female";}   
            if($gender=='O'){
                $gender="Other";}        
            $c_address=$row['Current_Address'];
            $email=$row['Email'];
            $phone_no=$row['Phone_no'];
        }
    



    
        
?>

<!doctype HTML>
<html>
    <head>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
        <style>
            a:hover{
               color: blue;     
            }
        </style>    
        
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
            <style>

            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
            .navbar-inverse { margin : 0;}


                .user-row {
            margin-bottom: 14px;
        }

        .user-row:last-child {
            margin-bottom: 0;
        }

        .dropdown-user {
            margin: 13px 0;
            padding: 5px;
            height: 100%;
        }

        .dropdown-user:hover {
            cursor: pointer;
        }

        .table-user-information > tbody > tr {
            border-top: 1px solid rgb(221, 221, 221);
        }

        .table-user-information > tbody > tr:first-child {
            border-top: 0;
        }


        .table-user-information > tbody > tr > td {
            border-top: 0;
        }
        .toppad
        {margin-top:20px;
        }
    </style>

    <style>
        .sidenav {
            height: 100%;
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



    <script>
        $(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
    </script>
</head>


<body style="background-color:#f2f2f2">

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
    
    <?php
    if($user_type==0){
        
        echo '<div id="mySidenav" class="sidenav">';
        echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
        echo '<a href="Upload_documents.php">Upload Documents</a>';
        echo '<a href="University_search.php">Apply Now</a>';
        echo '<a href="application_status.php">Application Status</a>';
        echo '<a href="profile.php">Your Profile</a>';
        echo '</div>';
    }
        else if($user_type==1){
            echo '<div id="mySidenav" class="sidenav">';
            echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
            echo '<a href="pending_request.php">Pending Request</a>';
            echo '<a href="completed_applications.php">Completed Applications</a>';
            echo '<a href="pending_applications.php">Pending Applications</a>';
            echo '<a href="all_applications.php">All Applications</a>';
            echo '<a href="profile.php">Your Profile</a>';
            echo '</div>';
        }
        else{
            echo '<div id="mySidenav" class="sidenav">';
            echo '<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>';
            echo '<a href="Upload_documents.php">Pending Request</a>';
            echo '<a href="University_search.php">Apply Now</a>';
            echo '<a href="application_status.php">Application Status</a>';
            echo '<a href="profile.php">Your Profile</a>';
            echo '</div>';
            
        }

    ?>    
    


<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">&#9776;</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<!-- side bar ends-->
</div>
    <a class="navbar-brand" href="#" style="padding-left:50px;color:white;">Egnitia Admissions</a>
    </div>
    
      <ul class="nav navbar-nav navbar-right">

        <li class="active"><a href="indexx.html">Home</a></li>
        <li><a href="#" class="blue">Services</a></li>
        <li><a href="#" class="blue">About Us </a></li>  
        <li><a href="profile.php" class="blue"><span class="glyphicon glyphicon-user"></span><?php echo " ", $fname?></a></li>
        <li><a href="logout.php" class="blue"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>  
</nav>
<!-- Nav Bar Ends-->
    
    <div class="container" style="width:100%">
        <div class="row">
        <br>
        <br>

        <!--<div class="col-md-5  toppad  pull-right col-md-offset-3 ">
            <A href="editprofile.php" >Edit Profile&nbsp&nbsp</A>

            <A href="home.php" >Logout</A>-->
        <br>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
    
    
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title"><?php echo $fname, " ", $lname ?></h3>
                </div>
                <div class="panel-body">
                <div class="row">
                    <div class="col-md-3 col-lg-3 " align="center" > 
                    <?php echo '<img style="width:150px; height:175px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $row1['User_Picture'] ).'"/>';?>
                    <!--<img alt="User Pic" src=""" class="img-rounded img-responsive"> </div>-->
                    </div>
                    
                    <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                    <dl>
                        <dt>DEPARTMENT:</dt>
                        <dd>Administrator</dd>
                        <dt>HIRE DATE</dt>
                        <dd>11/12/2013</dd>
                        <dt>DATE OF BIRTH</dt>
                        <dd>11/12/2013</dd>
                        <dt>GENDER</dt>
                        <dd>Male</dd>
                    </dl>
                    </div>-->
                    <div class=" col-md-9 col-lg-9 "> 
                    <table class="table table-user-information">
                        <tbody>
                        
                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo $dob ?></td>
                        </tr>
                    
                            <tr>
                                <tr>
                            <td>Gender</td>
                            <td><?php echo $gender ?></td>
                        </tr>
                            <tr>
                            <td>Home Address</td>
                            <td><?php echo $c_address ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><a href="href="mailto:<?php echo $email; ?>?body=<?php echo "Hello"; ?>"> <?php echo $email; ?></a></td>
                        </tr>
                            <td>Phone Number</td>
                            <td><?php echo $phone_no ?></td>
                            
                        </tr>
                        
                        </tbody>
                    </table>
                    
                    <a href="application_status.php" class="btn btn-success">My Application Status</a>
                    <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
                    <a href="logout.php" class="btn btn-danger">Log Out</a>
                    </div>
                </div>
                </div>
                    <div class="panel-footer">
                        
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                            <span class="pull-right">
                                <a href="edit_profile.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </span>
                        </div>
                
            </div>
            </div>
        </div>
        </div>


        


        <!-- agent stats -->
        <?php
            if($user_type==1)
            {   
                echo "<div>";
                echo '<h1> Stats : Basic UI </h1>';
                $application_query = "SELECT * FROM application WHERE Agent_id = '".$User_id."'";
                $stats_result = mysqli_query($con,$application_query);
                $stats_row= mysqli_fetch_assoc($stats_result);
                $all_records= mysqli_num_rows($stats_result);
                echo "<b>In all applications including Pending requests : </b>". $all_records ; //saare records
                echo "<br/>";
                $pending_request = mysqli_query($con,"SELECT * FROM application WHERE Agent_id = '".$User_id."'
                and Application_Status = '3' ");
                $pending_records= mysqli_num_rows($pending_request);
                echo "<b>Pending Requests : </b>". $pending_records; //pending student request
                echo "<br/>";
                $exclude_pending = $all_records - $pending_records;
                echo "<b>In all applications excluding Pending Requests : </b>".$exclude_pending ; //total-student request
                $success = mysqli_query($con,"SELECT * FROM application WHERE Agent_id = '".$User_id."'
                and Application_Status = '1' ");
                $success_records= mysqli_num_rows($success);
                echo "<br/>";
                echo "<b>Successfull Admissions : </b>". $success_records; //success
                echo "<br/>";
                $failed = mysqli_query($con,"SELECT * FROM application WHERE Agent_id = '".$User_id."'
                and Application_Status = '2' ");
                $failed_records= mysqli_num_rows($failed); //failed admissions
                echo "<b>Pending Requests : </b>". $failed_records;
                echo "<br/>";
                $percentage_success = ($success_records * 100) / ($exclude_pending-$pending_records);
                $percentage_failure = ($failed_records * 100) / ($exclude_pending-$pending_records);
                echo "<b>Success Percentage : </b>". $percentage_success . "%" ;
                echo "<br/>";
                echo "<b>Failure Percentage : </b>". $percentage_failure . "%" ;
                echo "<br/>";
                echo "</div>";
                

                

            }
        ?>
        <!-- stats end -->

    
       
    </body>
</html>