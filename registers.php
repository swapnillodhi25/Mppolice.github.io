<?php
	$Name = $_POST['Name'];
	$Father = $_POST['Father'];
    $Policeid = $_POST['Policeid'];
    $Aadhar = $_POST['Aadhar'];	
	$Email = $_POST['Email'];
    $Gender = $_POST['Gender'];
	$DOB = $_POST['DOB'];
    $Age = $_POST['Age'];
    $Status = $_POST['Status'];
    $Phone = $_POST['Phone'];
    $Current = $_POST['Current'];
    $State = $_POST['State'];
    $District = $_POST['District'];
    $Pincode = $_POST['Pincode'];
    $Permanent = $_POST['Permanent'];
    $Statep = $_POST['Statep'];
    $Districtp = $_POST['Districtp'];
    $Policestation = $_POST['Policestation'];
    $Currentpost = $_POST['Currentpost'];
    $Createpass = $_POST['Createpass'];

	// Database connection
	$conn = new mysqli('localhost','root','','dutydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into register1(Name, Father, Policeid, Aadhar, Email, Gender, DOB, Age, Status, Phone, Current, State, District, Pincode, Permanent, Statep, Districtp, Policestation, Currentpost, Createpass) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssssssssssssi", $Name, $Father, $Policeid, $Aadhar, $Email, $Gender, $DOB, $Age, $Status, $Phone, $Current, $State, $District, $Pincode, $Permanent, $Statep, $Districtp, $Policestation, $Currentpost, $Createpass);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>