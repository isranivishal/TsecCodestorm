

<!DOCTYPE html>
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

    
   //echo '<img src="data:image/jpeg;base64,'.base64_encode( $row1['User_Picture'] ).'"/>';



   

    if($user_type==0){
        $result = mysqli_query($con,"SELECT * FROM Student WHERE User_id = '".$User_id."'");
   
        $row=mysqli_fetch_assoc($result);
    

        $pwd=$row1['User_Password'];
        $fname=$row['First_name'];
        $lname=$row['Last_name'];
        $mname=$row['Middile_name'];
        $flname=$row['Former_Last_Name'];
        $dob=$row['DOB'];
        $country=$row['Nationality'];
        $gender=$row['Gender'];
        if($gender=='M'){
            $gender="Male";}
        if($gender=='F'){
            $gender="Female";}   
        if($gender=='O'){
            $gender="Other";}        
        $c_address=$row['Current_Address'];
        $p_address=$row['P_Address'];
        $email=$row['Email'];
        $phone_no=$row['Phone_no'];
        $image=$row1['User_Picture'];
    }

        else if($user_type==1){
            $result = mysqli_query($con,"SELECT * FROM agent WHERE Agent_id = '".$User_id."'");
   
            $row=mysqli_fetch_assoc($result);
        
            $pwd=$row1['User_Password'];
            $fname=$row['First_Name'];
            $lname=$row['Last_Name'];
            $mname=$row['Middle_Name'];
            $flname=$row['Former_Last_Name'];
            $dob=$row['DOB'];
            $country=$row['Nationality'];
            $gender=$row['Gender'];
            if($gender=='M'){
                $gender="Male";}
            if($gender=='F'){
                $gender="Female";}   
            if($gender=='O'){
                $gender="Other";}        
            $c_address=$row['Current_Address'];
            $p_address=$row['P_Address'];
            $email=$row['Email'];
            $phone_no=$row['Phone_no'];
            $image=$row1['User_Picture'];
            
        }
        else{
            $result = mysqli_query($con,"SELECT * FROM marketer WHERE Marketer_id = '".$User_id."'");
   
        $row=mysqli_fetch_assoc($result);
    
        $pwd=$row1['User_Password'];
        $fname=$row['First_name'];
        $lname=$row['Last_name'];
        $mname=$row['Middle_name'];
        $flname=$row['Former_Last_Name'];
        $dob=$row['DOB'];
        $country=$row['Nationality'];
        $gender=$row['Gender'];
        if($gender=='M'){
            $gender="Male";}
        if($gender=='F'){
            $gender="Female";}   
        if($gender=='O'){
            $gender="Other";}        
        $c_address=$row['Current_Address'];
        $p_address=$row['P_Address'];
        $email=$row['Email'];
        $phone_no=$row['Phone_no'];
        $image=$row1['User_Picture'];
        }

        
?>
<html >
    <head>
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
    

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <base target="_self">
    <meta name="description" content="User information form snippet with timezones" />
    <meta name="google" value="notranslate">
    <link rel="shortcut icon" href="/images/cp_ico.png">

    
    <!--stylesheets / link tags loaded here-->



    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" />
    

    

    <style type="text/css">@import url("//bootswatch.com/sandstone/bootstrap.min.css");

    /* CSS used here will be applied after bootstrap.css */<
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
        $(document).ready(function(){
        var date_input=$('input[name="DOB"]'); //our date input has the name "DOB"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            format: 'yyyy-mm-dd',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);
        })
    </script>
</head>


<body>

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

        <li class="active"><a href="#">Home</a></li>
        <li><a href="#" class="blue">Services</a></li>
        <li><a href="#" class="blue">About Us </a></li>  
        <li><a href="profile.php" class="blue"><span class="glyphicon glyphicon-user"></span><?php echo " ", $fname?></a></li>
        <li><a href="logout.php" class="blue"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>
      </ul>
    </div>
  </div>  
</nav>
<!-- Nav Bar Ends-->

  
  
  <div class="container">
    <h1 style="color:blue;">Edit Profile</h1>
  	<hr>
	  
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <!--<div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>-->

        <h3>Personal info</h3>
        
        <form action="edit_profile_backend.php" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">


        <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <?php echo '<img style="width:250px; height:200px;" class="img-rounded img-responsive" src="data:image/jpeg;base64,'.base64_encode( $row1['User_Picture'] ).'"/>';?>    
          <h6>Upload a different photo...</h6>
          <!--<form name="form" action="edit_profile_backend.php" method="POST" >-->
          
          <div class="col-md-12">
          <input type="file" class="form-control"  name="picture" class="col-md-8" style="float:left; padding:5px;/">
          <br><br>
          
          </div>
          <!--</form>-->
        </div>
      </div>
    
            
        <div style="float:right;" class="col-md-9">
        <div class="form-horizontal">
            <label for="firstname" class="col-lg-4 control-label">First Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FirstName" name="FirstName" placeholder="First Name" 
            value="<?php echo $fname ?>">
        </div> 
        <br>

        <div class="form-horizontal">
            <label for="middlename" class="col-lg-4 control-label">Middle Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="MiddleName" name="MiddleName" placeholder="Middle Name"
            value="<?php echo $mname ?>">
        </div> 
        <br>


        <div class="form-horizontal">
            <label for="lastname" class="col-lg-4 control-label">Last Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="LastName" name="LastName" placeholder="Last Name"
            value="<?php echo $lname ?>">
        </div> 
        <br>

        
        <div class="form-horizontal">
            <label for="formerlastname" class="col-lg-4 control-label">Former Last Name</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" class="form-control" id="FormerLastName" name="FormerLastName" placeholder="FormerLast Name"
            value="<?php echo $flname ?>">
        </div> 
        <br>


        <div class="form-horizontal">
            <label for="email" class="col-lg-4 control-label">Email</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="text" class="form-control" id="Email" name="Email" placeholder="Email"
            value="<?php echo $email ?>">
        </div> 
        <br>

        <!--<div class="form-horizontal">
            <label for="gender" class="col-lg-3 control-label">Gender</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <select name="Gender" class="form-control">
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="O">Other</option>
             </select>
            
             </div>
</div-->


         <div class="form-horizontal">
            <label for="dob" class="col-lg-4 control-label">DOB</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
            <input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of Birth"
            value="<?php echo $dob ?>">
            </div>
        </div>
        <br>

        <div class="form-horizontal">
            <label for="phone" class="col-lg-4 control-label">Phone Number</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
            <input type="number" class="form-control" id="PhoneNo" name="PhoneNo" placeholder="PhoneNo"
            value="<?php echo $phone_no ?>">
        </div> 
        <br>

        <div class="form-horizontal">
            <label for="password" class="col-lg-4 control-label">Update Password</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" class="form-control" id="Password" name="Password" placeholder="Password"
            value="<?php echo $pwd ?>">
        </div> 
        <br>

        <div class="form-horizontal">
            <label for="currentaddress" class="col-lg-4 control-label">Current Address</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" id="CurrentAddress" name="CurrentAddress" placeholder="Current Address"
            value="<?php echo $p_address?>">
        </div> 
        <br>

         <div class="form-horizontal">
            <label for="permanentaddress" class="col-lg-4 control-label">Permanent Address</label>
            <div class="input-group pb-modalreglog-input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
            <input type="text" class="form-control" id="PermanentAddress" name="PermanentAddress" placeholder="Permanent tAddress"
            value="<?php echo $c_address ?>">
        </div> 
        <br>

        <input type="hidden" name="inputtype" value="<?php echo $user_type?>">

        <!-- <select class="selectpicker countrypicker"
                                        data-live-search="true"
                                        data-default="United States"
                                        data-flag="true">
                                </select> -->
        <!-- <div class="form-horizontal">
                                        <label for="country" class="col-lg-4 control-label" style="color:red;">Update Country</label>
                                        <div class="input-group pb-modalreglog-input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-globe"></span></span>
                                        <select name="Country" class="form-control" value="<?php echo $country; ?>">
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
                                                <option value="ZW">Zimbabwe</option> -->
                                            </select>
                                        </div><br>
                                        </div>
                                      </div>
                               



                 <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>
<hr>
  
  <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
   
  
  <script>
  
  </script>

</body>
</html>
