<style>
body {  
	font-family: Trebuchet MS;
	font-size: 13px;
	color: #646464; 
}
</style>
<center> 
<table border=0 width=260 height="210" cellspacing=5 cellpadding=8  cols=2> 
<tr> 
<td>

<?php
if(isset($_POST['submit'])) {
$to = "commoditiesindia@hotmail.com, salim_shaikh@live.in";
$subject = "New Query For MKB Foods Private Limited";
$name_field = $_POST['name'];
$email_field = $_POST['email'];
$phone = $_POST['phone'];
$txtcountry = $_POST['txtcountry'];
$txtcity = $_POST['txtcity'];
$query = $_POST['query'];
$body = "Name : $name_field\n Email Id: $email_field\n Mobile No: $phone\n County : $txtcountry\n City : $txtcity\n Query: $query";
 
echo "Your Query has been submitted Successfully! ";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>
</td> 
 
</tr> 
</table> 
<br /><br />
Back to the Query Form 
<a href="registration.php">Click Here</a>
</center>