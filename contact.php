<?php
if(isset($_POST['fname'])&&isset($_POST['lname'])&&isset($_POST['email'])&&isset($_POST['message']))
{
	if (!empty($_POST['fname'])&& !empty($_POST['lname'])&& !empty($_POST['email'])&& !empty($_POST['message'])) {
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			echo "kindly provide correct email";
		}
		else
		{
			$body=$fname." ".$lname."<br />".$email."<br />".$message;
			if(mail('soubhagya225bdk@gmail.com', 'website response',$body,'From: response@mywebsite.com'))
			{
				echo "thanks for contatcting us";
			}
			else
			{
				echo "there is  a problem in sending email";
			}
		}
	}
	else
	{
		echo "all fields are required";
	}
}
else
{
	echo "not ok";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="soubhgya" />
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css">

	<title>contact through email</title>
</head>
<body>
<div class="w3-container w3-teal">
	<h5 class="w3-center">contact us</h5>
	<p>please fill out this form to get in touch</p>
	<form action="" method="post">
		<fieldset>
			<legend>your details</legend>
			First name:<br/>
			<input type="text" name="fname" required="required" /><br />
			Last name:<br />
			<input type="text" name="lname" required="required" /><br />
			Email ID:<br />
			<input type="text" name="email" required="required"><br />
			Your message:<br />
			<textarea name="message" required="required" rows="7" cols="30">
			</textarea>
			<input type="submit" name="submit" value="conatct me" />
		</fieldset> 
	</form>
</div>
</body>
</html>