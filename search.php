<?php
	include 'header.php';
?>

<h1>Search Results</h1>
	
	<section>
	<?php
		if(!isset($query)){
			echo "nothing has been searched for";
		} else {
			$sql = mysqli_query($conn, "SELECT * FROM inventory WHERE item LIKE '%$query%' OR type LIKE '%$query%'");
			$numRows = mysqli_num_rows($sql);
		
			echo '<strong>'.$numRows.'</strong>'.' results for <strong>'."'$query'".'</strong><br/><br/>';
		
			while($rows = mysqli_fetch_assoc($sql)){
				echo "$".$rows['price']." - ";
				echo $rows['item']." <strong>(".$rows['type'].")</strong><br/><br/>";
			}
		}
	?>
	</section>
	
</body>
</html>