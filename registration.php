<!DOCTYPE html>
<html>
<head>
	<title>Scheme Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 

		$con =mysqli_connect("localhost","root","qweasdzxc","tseccodestorm") or die(mysqli_error($con));
		$fname=$_POST['FirstName'];
		$mname=$_POST['MiddleName'];
		$lname=$_POST['LastName'];
		$gender=$_POST['Gender'];
		$contact=$_POST['PhoneNo'];
		$email=$_POST['Email'];
		$pwd=$_POST['Password'];
        $caddress=$_POST['CurrentAddress'];
        $state=$_POST['State'];
        $religion=$_POST['Religion'];
        $caste=$_POST['Caste'];
        $income=$_POST['Income'];
        $age=$_POST['age'];
		$occupation=$_POST['Occupation'];

		$query = "INSERT INTO user (First_Name,Middle_Name,Last_Name,Email,Phone,Password,Address,State,Age,Income,Caste,Religion,Gender,Occupation) VALUES ('$fname', '$mname','$lname','$email','$contact','$pwd','$caddress','$state','$age','$income','$caste', '$religion','$gender','$occupation')";
		mysqli_query($con, $query);

		if (mysqli_query($con, $query)) {
			header("location:personalised.php");
		} else {
    	echo "Error: " . $query . "<br>" . mysqli_error($con);
		}
	?>
</body>
</html>