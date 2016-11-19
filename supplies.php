<?php
	include 'header.php';
?>

	<hr/><h1>Supplies</h1>

<?php
	$sql = mysqli_query($conn, "SELECT * FROM inventory"); 
	$numRows = mysqli_num_rows($sql);
	echo $numRows."<br/><br/>";
		
	while($rows = mysqli_fetch_assoc($sql)){
		echo '$'.$rows['price'].' - ';
		echo $rows['item'].'<br/><strong>(';
		echo $rows['type'].')</strong><br/><br/>';
	}
?>



</body>
</html>