<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "123456789";
$dbname = "productos";

$product_name = $_POST["produc"];
$price = $_POST["pri"];


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO product VALUES (null, '$product_name', '$price', true)";
  $conn->exec($sql);
  echo "New record created successfully";
}
catch(PDOException $e)
{
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>
