<?php

require '../includes/init.php';
header("Content-type:application/json");

$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "SELECT * FROM Users WHERE Username =? AND Password =?";
$params = [$Username, $Password];

$result = selectOne($query, $params);
if ($result) {
    echo json_encode(["success" => true]);
    $_SESSION['LoggedIn'] = true;
    $_SESSION['UserId'] = $result['UserId'];
} else {
    echo json_encode(["success" => false]);
}