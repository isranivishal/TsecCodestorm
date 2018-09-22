<?php

 
    //$con =mysqli_connect("localhost","egnitiaa_vishal","qweasdzxc","egnitiaa_EgnitiaAdmissions"); 
    $con =mysqli_connect("localhost","root","qweasdzxc","egnitia_localhost") or die(mysqli_error($con));
     
	$User_Email = $_POST['User_Email'];
	$User_Password = $_POST['User_Password'];
    

	$result1 = mysqli_query($con,"SELECT * FROM User WHERE User_Email = '".$User_Email."'");
    $row=mysqli_fetch_assoc($result1);
    $User_Password_db=$row['User_Password'];
    $User_id=$row['User_id'];
    $User_type=$row['User_type'];
    

    
    
    if(($User_Password) == $User_Password_db) 
    { 
    	session_start();
        $_SESSION["logged_in"] = true; 
        $_SESSION["User_Email"] = $User_Email;
        $_SESSION["User_id"]=$User_id; 
        $_SESSION["type"]="$User_type"; 
        header("location:profile.php");
        if($User_type==0){
        header("location:indexx.html");}
        else if($User_type==1){
            header("location:agentlogin.html");
        }
        else{
            header("location:marketerlogin.html");
        }

    }
    else
    {
        echo'The username or password are incorrect!';
    }

?>