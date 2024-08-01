<?php
require '../../includes/init.php';
header("Content-type:application/json");

$CategoryId = $_POST['CategoryId'];
$Name = $_POST['Name'];
$Description = $_POST['Description'];
$Price = $_POST['Price'];

$time = time();
$fileName = "$time-" . $_FILES['Image']['Name'];
$tmpFileName = $_FILES['Image']['tmp_name'];
move_uploaded_file($tmpFileName, pathOf("assets/images/uploads/$fileName"));

$query = "INSERT INTO Products (CategoryId, Name, Description, Price, ImageFileName) VALUES(?,?,?,?,?)";
$params = [$CategoryId, $Name, $Description, $Price, $fileName];

$result = execute($query, $params);
if ($result)
    echo json_encode(["success" => true]);
else
    echo json_encode(["success" => false]);

    header('Location: ../../pages/product/index.php');
?>