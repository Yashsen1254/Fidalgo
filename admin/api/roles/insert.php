<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Name = $_POST['Name'];

    $query = "INSERT INTO roles (Name) VALUES (?)";
    $param = [$Name];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Role Added Successfully"]);
?>