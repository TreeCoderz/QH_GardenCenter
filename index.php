<?php
	include 'header.php';
?>

	<hr/><h1><u>Quartz Hill Garden Center</u></h1>
<div id='frontPage'>
	<img src='images/qhGC_Banner.jpg' width='600px' height='600px' style='border: 1px solid green;'/>

	<div id='productSlideshow' style='width:300px;'>
		<div class='productPics'>
			<img src='images/pots.jpg' style='width:100%;'/>
			<div class='slideshowCaptions'>
				Planting Pots
			</div>
		</div>
		
		<div class='productPics'>
			<img src='images/flowers.jpg' style='width:100%;'/>
			<div class='slideshowCaptions'>
				Flowers
			</div>
		</div>

		<div class='productPics'>
			<img src='images/orangeFlower.jpg' style='width:100%;'/>
			<div class='slideshowCaptions'>
				Orange Flowers
			</div>
		</div>
	</div>
</div>

<script>
 var index = 0;
 slide();
 
 function slide(){
	var i;
	var x = document.getElementsByClassName("productPics");
	for(i=0; i<x.length; i++){
		x[i].style.display = "none";
	}
	index++;
	if(index > x.length){
		index = 1;
	}
	x[index-1].style.display = "block";
	setTimeout(slide, 3000);
}
</script>


<footer id='foot'>
<hr/>
	Copyright 2016<br/>
	All Rights Reserved.
</footer>

</body>
</html>