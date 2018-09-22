<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php 

		session_start();
		$_SESSION["logged_in"] = true; 

		$User_id= $_SESSION["User_id"];
		//echo "$User_id";
		//$con =mysqli_connect("localhost","egnitiaa_vishal","qweasdzxc","egnitiaa_EgnitiaAdmissions");
		$con =mysqli_connect("localhost","root","qweasdzxc","egnitia_localhost");
		$fname=$_POST['FirstName'];
		$mname=$_POST['MiddleName'];
		$lname=$_POST['LastName'];
		$flname=$_POST['FormerLastName'];
		//$gender=$_POST['Gender'];
		$date=$_POST['DOB'];
		$contact=$_POST['PhoneNo'];
		$email=$_POST['Email'];
		$pwd=$_POST['Password'];
		$caddress=$_POST['CurrentAddress'];
		$paddress=$_POST['PermanentAddress'];
		//echo $fname;
		//$country=$_POST['Country'];
		//$picture=$_POST['User_Picture'];
		//echo $picture;
		
		$q = "SELECT  * from user where User_id = '$User_id'";
		$qres = mysqli_query($con,$q);
		$qrow = mysqli_fetch_assoc($qres); 
		$user_type = $qrow['User_type'];
		echo $user_type;
        
        /*$query1 = "INSERT INTO `Student`(First_name, Middile_name, Last_name,P_Address, Current_Address, Former_Last_Name, Gender,
        Nationality, DOB, Phone_no, Email)
        VALUES ('$fname','$mname','$lname', '$paddress', '$caddress','$flname','$gender', '$country', 
        '$date','$contact','$email')";*/

		/*$query2 = "INSERT INTO `User`(User_Email,User_Password) VALUES ('$email','$pwd')";*/
		if($user_type==0)
		{
			$query1 = "UPDATE `student` SET First_name='$fname', Middile_name='$mname', Last_name='$lname',
			P_Address='$paddress', Current_Address='$caddress', Former_Last_Name='$flname',
			DOB='$date', Phone_no='$contact', Email='$email' where User_id = '$User_id'";
			$result1 =  mysqli_query($con,$query1);

			$query2 = "UPDATE `User` SET User_Email='$email', User_Password='$pwd' where User_id = '$User_id'";
			$result2 = mysqli_query($con,$query2);
			
			
			if ($result1 && $result2) {
				//header("location:profile.php");
			} else {
			echo "Error: " . $query1 . "<br>" . mysqli_error($con);
			}


			if(!empty($_FILES['picture']['tmp_name']) 
			&& file_exists($_FILES['picture']['tmp_name']))
			{
				$file = addslashes(file_get_contents($_FILES["picture"]["tmp_name"])); 
				$query3 = "UPDATE  user SET `User_Picture` = '$file' where User_id = '$User_id'";
				$result3 = mysqli_query($con,$query3);
				if ($result3) {
					//header("location:profile.php");
				} else {
				echo "Image Error: " . $query1 . "<br>" . mysqli_error($con);
				}
			}

		}

		else if($user_type==1)
		{
			$query1 = "UPDATE `agent` SET First_Name='$fname', Middle_Name='$mname', Last_Name='$lname',
			P_Address='$paddress', Current_Address='$caddress', Former_Last_Name='$flname',
			DOB='$date', Phone_no='$contact', Email='$email' where Agent_id = '$User_id'";
			$result1 =  mysqli_query($con,$query1);

			$query2 = "UPDATE `User` SET User_Email='$email', User_Password='$pwd' where User_id = '$User_id'";
			$result2 = mysqli_query($con,$query2);
			
			
			if ($result1 && $result2) {
				//header("location:profile.php");
			} else {
			echo "Error: " . $query1 . "<br>" . mysqli_error($con);
			echo "Error: " . $query2 . "<br>" . mysqli_error($con);
			}


			if(!empty($_FILES['picture']['tmp_name']) 
			&& file_exists($_FILES['picture']['tmp_name']))
			{
				$file = addslashes(file_get_contents($_FILES["picture"]["tmp_name"])); 
				$query3 = "UPDATE  user SET `User_Picture` = '$file' where User_id = '$User_id'";
				$result3 = mysqli_query($con,$query3);
				if ($result3) {
					//header("location:profile.php");
				} else {
				echo "Image Error: " . $query3 . "<br>" . mysqli_error($con);
				}
			}

		}
		else 
		{
			$query1 = "UPDATE `marketer` SET First_name='$fname', Middle_name='$mname', Last_name='$lname',
			P_Address='$paddress', Current_Address='$caddress', Former_Last_Name='$flname',
			DOB='$date', Phone_no='$contact', Email='$email' where Marketer_id = '$User_id'";
			$result1 =  mysqli_query($con,$query1);

			$query2 = "UPDATE `User` SET User_Email='$email', User_Password='$pwd' where User_id = '$User_id'";
			$result2 = mysqli_query($con,$query2);
			
			
			if ($result1 && $result2) {
				//header("location:profile.php");
			} else {
			echo "Error: " . $query1 . "<br>" . mysqli_error($con);
			}


			if(!empty($_FILES['picture']['tmp_name']) 
			&& file_exists($_FILES['picture']['tmp_name']))
			{
				$file = addslashes(file_get_contents($_FILES["picture"]["tmp_name"])); 
				$query3 = "UPDATE  user SET `User_Picture` = '$file' where User_id = '$User_id'";
				$result3 = mysqli_query($con,$query3);
				if ($result3) {
					//header("location:profile.php");
				} else {
				echo "Image Error: " . $query1 . "<br>" . mysqli_error($con);
				}
			}			
		}
			
		header("location:profile.php");
	?>

</body>
</html>