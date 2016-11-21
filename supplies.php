<?php
	include 'header.php';
?>

	<hr/><h1>Supplies</h1>

<section>
<?php
	$sql = mysqli_query($conn, "SELECT * FROM inventory"); 
	$numRows = mysqli_num_rows($sql);
	
	echo "<center><table border=1 cellpadding=10 style='text-align:center;'>
		  <tr>
		  		<td><strong><u>Item</u></strong></td>  <td><strong><u>Type</u></strong></td>
		        <td><strong><u>Price</u></strong></td> <td><strong><u>Quantity</u></strong></td>
		  </tr>
	";
	while($rows = mysqli_fetch_assoc($sql)){
		echo "<tr>";
		echo '<td>'.$rows['item'].'</td>';
		echo '<td>'.$rows['type'].'</td>';
		echo '<td>$'.$rows['price'].'</td>';
		if($rows['quantity'] == 0){
			echo '<td>Out of Stock</td>';
		} else {
			echo '<td>'.$rows['quantity'].'</td>';
		}
		echo "</tr>";
	}
	echo "</table></center>";
?>
</section>


<footer id='foot'>
<hr/>
	Copyright 2016<br/>
	All Rights Reserved.
</footer>

</body>
</html>