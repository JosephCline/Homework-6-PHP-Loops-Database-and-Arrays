<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Table Data Display Report</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
$rownum=0;
include('../../../connect.php');
mysql_connect($host,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query="SELECT * FROM registration order by lastname";
$result=mysql_query($query);
mysql_close();
echo "<h3>Registrations</h3>";
echo "<table>";
while ($row = mysql_fetch_array($result))
{
echo '<tr>';
echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
echo "<td>" . htmlspecialchars($row['firstname']) ."</td>";
echo "<td>" . htmlspecialchars($row['payment_id']) ."</td>";
echo "<td>" . htmlspecialchars($row['phone1']) ."</td>";
echo "<td>" . htmlspecialchars($row['phone2']) ."</td>";
echo "<td>" . htmlspecialchars($row['phone3']) ."</td>";
echo "<td>" . htmlspecialchars($row['email']) . "</td>";
echo "<td>" . htmlspecialchars($row['cardtype']) ."</td>";
echo "<td>" . htmlspecialchars($row['cardnumber']) ."</td>";
echo "<td>" . htmlspecialchars($row['zipcode']) ."</td>";
echo "<td>" . htmlspecialchars($row['total']) ."</td>";
echo "<td>" . htmlspecialchars($row['couponcode']) ."</td>";
echo "<td>" . htmlspecialchars($row['orderdate']) ."</td>";
echo "</tr>";
$rownum++;
}
echo "</table>";
?>
</body>
</html>