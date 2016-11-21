<?php

	function pushContact($conn){
		if(isset($_POST['contactSubmit'])){
			$uid = $_POST['uid'];
			$first = $_POST['first'];
			$last = $_POST['last'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$date = $_POST['date'];
			
			$sqlSubmit = "INSERT INTO Contacts (id, first, last, email, phone, date) VALUES ('$uid', '$first', '$last', '$email', '$phone', '$date')";
			$querySubmit = mysqli_query($conn, $sqlSubmit);
		}
	}
	
?>