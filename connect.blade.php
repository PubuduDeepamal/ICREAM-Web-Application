<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	

	// Database connection
	$conn = new mysqli('localhost:3308','root','','icream');
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Cmessage(name, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $subject, $message);
		 $stmt->execute();
		
		echo '<script type="text/javascript">

		 	window.onload = function () { alert("Message sent");window.location.href = "contact.blade.php";  }

	 	</script>';

		$stmt->close();
		$conn->close();
	}
?>