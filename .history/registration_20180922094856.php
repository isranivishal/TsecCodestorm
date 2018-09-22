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

		$query = "INSERT INTO `User`('First_Name','Middle_Name','Last_Name','Email','Phone','Password','Address','State','Age','Income','Caste','Religion','Gender','Occupation')VALUES ('$fname', '$mname','$lname','$email','$contact','$pwd','$caddress','$state','$age','$income','$caste', '$religion','$gender','$occupation')";
		mysqli_query($con, $query2);

		if (mysqli_query($con, $query1)) {
			header("location:user_profile.php");
		} else {
    	echo "Error: " . $query1 . "<br>" . mysqli_error($con);
		}
	?>


</body>
</html>