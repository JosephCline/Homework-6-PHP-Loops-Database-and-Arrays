<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="CIS Restaurant, Lunch Menu">
	<meta name="description" content="CIS Restaurant: Lunch Menu">
	<title>CIS Restaurant Menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<div id="container">

<div class="image-wrapper">
	<p><img class="noshow scale-image" src="header.jpg" alt="Photo of inside of CIS 122 restaurant"></p>
</div>

<?php

$firstname = substr(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING),0,30);
$lastname = substr(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING),0,30);
$phone1 = substr(filter_input(INPUT_POST, 'phone1', FILTER_SANITIZE_NUMBER_INT),0,3);
$phone2 = substr(filter_input(INPUT_POST, 'phone2', FILTER_SANITIZE_NUMBER_INT),0,3);
$phone3 = substr(filter_input(INPUT_POST, 'phone3', FILTER_SANITIZE_NUMBER_INT),0,4);
$email = substr(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING),0,35);
$CardType = substr(filter_input(INPUT_POST, 'CardType', FILTER_SANITIZE_STRING),0,10);
$CardNumber = substr(filter_input(INPUT_POST, 'CardNumber', FILTER_SANITIZE_NUMBER_INT),0,24);
$zipcode = substr(filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_NUMBER_INT),0,5);
$couponcode = substr(filter_input(INPUT_POST, 'couponcode', FILTER_SANITIZE_STRING),0,5);
$subtotal2 = substr(filter_input(INPUT_POST, 'subtotal2', FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION),0,10);

$date = date('Y-m-d H:i:s');


include('../../../../connect.php');

try {
	$DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
}
catch(PDOException $e) {
 echo $e->getMessage();
}

$sql =$DBH->prepare("INSERT INTO payment VALUES ('', :firstname, :lastname, :phone1,
:phone2, :phone3, :email, :CardType, :CardNumber, :zipcode, :total, :couponcode, :date)");

$sql->execute( array(':firstname'=>$firstname, ':lastname'=>$lastname,':phone1'=>$phone1, ':phone2'=>$phone2, ':phone3'=>$phone3, ':email'=>$email,':CardType'=>$CardType, ':CardNumber'=>$CardNumber, ':zipcode'=>$zipcode,':total'=>$subtotal2, ':couponcode'=>$couponcode, ':date'=>$date ) )or die(print_r($sql->errorInfo(), true));
echo "<p>Order successfully placed.</p>";
?>



</div>
</body>
</html>