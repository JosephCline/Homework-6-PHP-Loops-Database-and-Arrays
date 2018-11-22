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

<h1 class="center blue">MENU ORDER FORM</h1>
<?php
$wings = substr(filter_input(INPUT_POST, 'wings', FILTER_SANITIZE_NUMBER_INT),0,2);
$nachos = substr(filter_input(INPUT_POST, 'nachos', FILTER_SANITIZE_NUMBER_INT),0,2);
$dip = substr(filter_input(INPUT_POST, 'dip', FILTER_SANITIZE_NUMBER_INT),0,2);
$quesadilla = substr(filter_input(INPUT_POST, 'quesadilla', FILTER_SANITIZE_NUMBER_INT),0,2);
$chips = substr(filter_input(INPUT_POST, 'chips', FILTER_SANITIZE_NUMBER_INT),0,2);
$calamari = substr(filter_input(INPUT_POST, 'calamari', FILTER_SANITIZE_NUMBER_INT),0,2);


$subtotal=0;
$ordertotal=0;
$subtotal2=0;
$newcouponcode = 0;
?>
<form action="order2.php" method="post">
<table class="tablectr">
	<tr>
		<th>	</th>
		<th>	</th>	
		<th>	</th>
		<th>	</th>
	</tr>
<?php
if ($wings > 0) {
$subtotal = $wings * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Boneless Wings and Skins Sampler</td><td class=\"center\">$wings</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"wings\" value=\"" . $wings . "\">";
}

if ($nachos > 0) {
$subtotal = $nachos * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Boneless nachos and Skins Sampler</td><td class=\"center\">$nachos</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"nachos\" value=\"" . $nachos . "\">";
}

if ($dip > 0) {
$subtotal = $dip * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr><td class=\"tablectr\">Boneless dip and Skins Sampler</td><td class=\"center\">$dip</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"dip\" value=\"" . $dip . "\">";
}

if ($quesadilla > 0) {
$subtotal = $quesadilla * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Boneless quesadilla and Skins Sampler</td><td class=\"center\">$quesadilla</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"quesadilla\" value=\"" . $quesadilla . "\">";
}

if ($chips > 0) {
$subtotal = $chips * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Boneless chips and Skins Sampler</td><td class=\"center\">$chips</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"chips\" value=\"" . $chips . "\">";
}

if ($calamari > 0) {
$subtotal = $calamari * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Boneless calamari and Skins Sampler</td><td class=\"center\">$calamari</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"calamari\" value=\"" . $calamari . "\">";
}
?>
</table>
</form>
</body>
</html>