<?php 
    $con =mysqli_connect("localhost","root","mysql","tseccodestorm") or die(mysqli_error($con));
     
	$email = $_POST['User_Email'];
	$password = $_POST['User_Password'];
    

	$result = mysqli_query($con,"SELECT Email,Password FROM User WHERE Email = '".$email."'");
    $row=mysqli_fetch_assoc($result);
    $User_Password_db=$row['Password'];
    
    if(($password) == $User_Password_db) 
    { 
    	session_start();
        $_SESSION["logged_in"] = true; 
        $_SESSION["User_Email"] = $email;

        header("location:personalised.php");
    }
    else
    {
        echo'The username or password are incorrect!';
    }

?>