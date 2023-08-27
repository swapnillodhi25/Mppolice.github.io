<?php
	$Name = $_POST['Name'];
	$Phone = $_POST['Phone'];	
	$Email = $_POST['Email'];
	$Text = $_POST['Text'];

	// Database connection
	$conn = new mysqli('localhost','root','','dutydatabase');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into contactus(Name, Phone, Email, Text) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $Name ,$Phone, $Email, $Text);
		$execval = $stmt->execute();
		echo $execval;
		echo '<script>
        alert("Submit Your Information");
        window.location.href="contact.html";
       
       
        </script>';
		$stmt->close();
		$conn->close();
	}
?>