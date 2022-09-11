<?php
	$nic = $_POST['nic'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$product = $_POST['product'];
    $quntity = $_POST['quntity'];
	$note = $_POST['note'];
	

	// Database connection
	$conn = new mysqli('localhost:3308','root','','icream');
	
	if($conn->connect_error){
		
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into Corder(nic, name, email, product, quntity, note) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("isssis", $nic, $name, $email, $product, $quntity, $note);
		$stmt->execute();
		
		echo '<script type="text/javascript">

            window.onload = function () { alert("Order successfully...");window.location.href = "order.blade.php"; }

		</script>';
		$stmt->close();
		$conn->close();
	}
?>