<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>MySQL</title>
</head>

<body>

<?php
$servername = "";
$username = "";
$password = "";
$database = "";

try {
 $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $sql = "CREATE TABLE payment (
payment_id int(10) not null auto_increment,
firstname varchar(30),
lastname varchar(30),
phone1 varchar(3),
phone2 varchar(3),
phone3 varchar(4),
email varchar(35),
cardtype varchar(20),
cardnumber varchar(20),
zipcode varchar(5),
total decimal(6,2),
couponcode varchar(5),
orderdate datetime,
primary key (payment_id)
 )";

 $conn->exec($sql);
 echo "Table created successfully";
 }
 catch(PDOException $e)
 {
 echo $sql . "<br>" . $e->getMessage();
 }
 $conn = null;
?>




</body>
</html>
