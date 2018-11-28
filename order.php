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

<h1 class="center blue">Joe's Place</h1>
    <h1 class="center blue">Menu Form</h1>
<?php
$wings = substr(filter_input(INPUT_POST, 'wings', FILTER_SANITIZE_NUMBER_INT),0,2);
$nachos = substr(filter_input(INPUT_POST, 'nachos', FILTER_SANITIZE_NUMBER_INT),0,2);
$dip = substr(filter_input(INPUT_POST, 'dip', FILTER_SANITIZE_NUMBER_INT),0,2);
$quesadilla = substr(filter_input(INPUT_POST, 'quesadilla', FILTER_SANITIZE_NUMBER_INT),0,2);
$chips = substr(filter_input(INPUT_POST, 'chips', FILTER_SANITIZE_NUMBER_INT),0,2);
$calamari = substr(filter_input(INPUT_POST, 'calamari', FILTER_SANITIZE_NUMBER_INT),0,2);
$pastrami = substr(filter_input(INPUT_POST, 'pastrami', FILTER_SANITIZE_NUMBER_INT),0,2);
$panini = substr(filter_input(INPUT_POST, 'panini', FILTER_SANITIZE_NUMBER_INT),0,2);
$reuben = substr(filter_input(INPUT_POST, 'reuben', FILTER_SANITIZE_NUMBER_INT),0,2);
$vegetarian = substr(filter_input(INPUT_POST, 'vegetarian', FILTER_SANITIZE_NUMBER_INT),0,2);
$turkey = substr(filter_input(INPUT_POST, 'turkey', FILTER_SANITIZE_NUMBER_INT),0,2);
$burger = substr(filter_input(INPUT_POST, 'burger', FILTER_SANITIZE_NUMBER_INT),0,2);
$jambalaya = substr(filter_input(INPUT_POST, 'jambalaya', FILTER_SANITIZE_NUMBER_INT),0,2);
$shrimp = substr(filter_input(INPUT_POST, 'shrimp', FILTER_SANITIZE_NUMBER_INT),0,2);
$chickenpasta = substr(filter_input(INPUT_POST, 'chickenpasta', FILTER_SANITIZE_NUMBER_INT),0,2);
$angelhair = substr(filter_input(INPUT_POST, 'angelhair', FILTER_SANITIZE_NUMBER_INT),0,2);
$alfredo = substr(filter_input(INPUT_POST, 'alfredo', FILTER_SANITIZE_NUMBER_INT),0,2);
$apple = substr(filter_input(INPUT_POST, 'apple', FILTER_SANITIZE_NUMBER_INT),0,2);
$brownie = substr(filter_input(INPUT_POST, 'brownie', FILTER_SANITIZE_NUMBER_INT),0,2);

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
echo "<tr class=\"tablectr\"><td>Three Cheese Nachos</td><td class=\"center\">$nachos</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"nachos\" value=\"" . $nachos . "\">";
}

if ($dip > 0) {
$subtotal = $dip * 6.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr><td class=\"tablectr\">Spinach Artichoke Dip</td><td class=\"center\">$dip</td><td
class=\"center\">$6.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"dip\" value=\"" . $dip . "\">";
}

if ($quesadilla > 0) {
$subtotal = $quesadilla * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Santa Fe Chicken Quesadilla</td><td class=\"center\">$quesadilla</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"quesadilla\" value=\"" . $quesadilla . "\">";
}

if ($chips > 0) {
$subtotal = $chips * 5.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Chips and Salsa</td><td class=\"center\">$chips</td><td
class=\"center\">$5.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"chips\" value=\"" . $chips . "\">";
}

if ($calamari > 0) {
$subtotal = $calamari * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Fried Calamari </td><td class=\"center\">$calamari</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"calamari\" value=\"" . $calamari . "\">";
}

if ($pastrami > 0) {
$subtotal = $pastrami * 8.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Pastrami Sandwich</td><td class=\"center\">$pastrami</td><td
class=\"center\">$8.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"pastrami\" value=\"" . $pastrami . "\">";
}

if ($panini > 0) {
$subtotal = $panini * 8.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Roasted Turkey & Avocado BLT Panini</td><td class=\"center\">$panini</td><td
class=\"center\">$8.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"panini\" value=\"" . $panini . "\">";
}

if ($reuben > 0) {
$subtotal = $reuben * 8.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Reuben Sandwich </td><td class=\"center\">$reuben</td><td
class=\"center\">$8.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"reuben\" value=\"" . $reuben . "\">";
}

if ($vegetarian > 0) {
$subtotal = $vegetarian * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Vegetarian Sandwich</td><td class=\"center\">$vegetarian</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"vegetarian\" value=\"" . $vegetarian . "\">";
}

if ($turkey > 0) {
$subtotal = $turkey * 9.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Chipotle Honey Mustard Turkey Wrap</td><td class=\"center\">$turkey</td><td
class=\"center\">$9.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"turkey\" value=\"" . $turkey . "\">";
}

if ($burger > 0) {
$subtotal = $burger * 9.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>BBQ Bacon Chedder Burger</td><td class=\"center\">$burger</td><td
class=\"center\">$9.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"burger\" value=\"" . $burger . "\">";
}

if ($jambalaya > 0) {
$subtotal = $jambalaya * 12.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Cajun Jambalaya Pasta</td><td class=\"center\">$jambalaya</td><td
class=\"center\">$12.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"jambalaya\" value=\"" . $jambalaya . "\">";
}

if ($shrimp > 0) {
$subtotal = $shrimp * 11.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Parmesan Shrimp Pasta</td><td class=\"center\">$shrimp</td><td
class=\"center\">$11.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"shrimp\" value=\"" . $shrimp . "\">";
}

if ($chickenpasta > 0) {
$subtotal = $chickenpasta * 10.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Parmesan Chicken Pasta</td><td class=\"center\">$chickenpasta</td><td
class=\"center\">$10.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"chickenpasta\" value=\"" . $chickenpasta . "\">";
}

if ($angelhair > 0) {
$subtotal = $angelhair * 10.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Angel Hair Pasta</td><td class=\"center\">$angelhair</td><td
class=\"center\">$10.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"angelhair\" value=\"" . $angelhair . "\">";
}

if ($alfredo > 0) {
$subtotal = $alfredo * 11.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Chicken and Mushroom Alfredo</td><td class=\"center\">$alfredo</td><td
class=\"center\">$11.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"alfredo\" value=\"" . $alfredo . "\">";
}

if ($apple > 0) {
$subtotal = $apple * 5.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Baked Apple Dumplin</td><td class=\"center\">$apple</td><td
class=\"center\">$5.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"apple\" value=\"" . $apple . "\">";
}

if ($brownie > 0) {
$subtotal = $brownie * 7.99;
$ordertotal = $ordertotal + $subtotal;
echo "<tr class=\"tablectr\"><td>Chocolate-Fudge Brownie</td><td class=\"center\">$brownie</td><td
class=\"center\">$7.99</td><td class=\"center\">$$subtotal</td></tr>";
echo "<input type=\"hidden\" name=\"brownie\" value=\"" . $brownie . "\">";
}




?>
</table>
</form>
</body>
</html>
