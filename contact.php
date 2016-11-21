<?php
	include 'header.php';
?>

	<hr/><h1>Contact</h1>

	<section>
		<strong>Phone Number:</strong><br/>(661) 943-5222<hr/>
	</section>
	<hr/>
	
	<section>
		<a href="https://www.facebook.com/Quartz-Hill-Garden-Center-164363726925671/"><img src='images/fb_logo.png' height='50' width='50'/></a>
	</section>
	<hr/>
	
	<section id="contact">
		<h3>If you have any Questions, Concerns, or Requests please enter your information</h3>
<?php
	echo	"<form action='".pushContact($conn)."' method='POST'>
				*First Name:<br/><input type='text' name='first' placeholder='First Name..' maxlength='15'/><br/>
				*Last Name:<br/><input type='text' name='last' placeholder='Last Name..' maxlength='15'/><br/>
				*Email:<br/><input type='text' name='email' placeholder='Email..' maxlength='30'/><br/>
				Phone Number:<br/><input type='text' name='phone' placeholder='(***) *** - ****' maxlength='20'/><br/>
				<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'/>
				<br/><input type='submit' value='Submit' name='contactSubmit'/>
			</form>";
?>	
	</section>
	

</body>
</html>