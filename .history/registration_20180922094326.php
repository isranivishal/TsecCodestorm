<?php
	
	$con =mysqli_connect("localhost","root","qweasdzxc","tseccodestorm") or die(mysqli_error($con));
    session_start();
    $_SESSION["logged_in"] = true; 

    $User_id= $_SESSION["User_id"];
	
	$abc = "SELECT * from user where User_id = $User_id";
	$pqr = mysqli_query($con, $abc);
	$xyz = mysqli_fetch_assoc($pqr);
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Scheme Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		//$con =mysqli_connect("localhost","egnitiaa_vishal","qweasdzxc","egnitiaa_EgnitiaAdmissions");
		$con =mysqli_connect("localhost","root","qweasdzxc","tseccodestorm") or die(mysqli_error($con));
		$fname=$_POST['FirstName'];
		$mname=$_POST['MiddleName'];
		$lname=$_POST['LastName'];
		$gender=$_POST['Gender'];
		$date=$_POST['date'];
		$contact=$_POST['PhoneNo'];
		$email=$_POST['Email'];
		$pwd=$_POST['Password'];
        $caddress=$_POST['CurrentAddress'];
        $state=$_POST['State'];
        $religion=$_POST['Religion'];
        $caste=$_POST['Caste'];
		$income=$_POST['Income'];;
		$occupation=$_POST['Occupation'];

		$query2 = "INSERT INTO `User`VALUES ('$fname', '$mname','$lname','$gender','$email','$contact','$pwd',$date','$contact', '$pwd','$caddress','$country', '$religion','$caste','$dstatus', '$usertype')";
		mysqli_query($con, $query2);
		$query3 = "SELECT * FROM User WHERE User_Email = '".$email."'";
		$res = mysqli_query($con,$query3);
		$row=mysqli_fetch_assoc($res);
		$userid = $row['User_id'];
		$query1 = "INSERT INTO `student`(User_id, First_name, Middile_name, Last_name,P_Address, Current_Address, Former_Last_Name, Gender, Nationality, DOB, Phone_no, Docs_Status,Email) 
		VALUES ('$userid', '$fname','$mname','$lname', '$paddress', '$caddress','$flname','$gender', '$country', '$date','$contact', '$dstatus','$email')";
		$agentQuery = "INSERT INTO `agent`(Agent_id, First_Name, Middle_Name, Last_Name,P_Address, Current_Address, Former_Last_Name, Gender, Nationality, DOB, Phone_no, Email) VALUES ('$userid', '$fname','$mname','$lname', '$paddress', '$caddress','$flname','$gender', '$country', '$date','$contact', '$email')";
		$marketerQuery = "INSERT INTO `marketer`(Marketer_id, First_Name, Middle_Name, Last_Name,P_Address, Current_Address, Former_Last_Name, Gender, Nationality, DOB, Phone_no, Email) VALUES ('$userid', '$fname','$mname','$lname', '$paddress', '$caddress','$flname','$gender', '$country', '$date','$contact', '$email')";
		if($usertype == 0){
			$query1 = $query1;
		}
		else if($usertype == 1){
			$query1 = $agentQuery;
		}
		else{
			$query1 = $marketerQuery;
		}

		$query3 = "INSERT INTO `documents` (Student_id) VALUES ('$userid')";
		if (mysqli_query($con, $query1) && mysqli_query($con, $query3) ) {
			header("location:index.html");
		} else {
    	echo "Error: " . $query1 . "<br>" . mysqli_error($con);
		}
	?>


</body>
</html>