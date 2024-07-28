<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Code = $_POST['Code'];
    $Discount  = $_POST['Discount'];
    $Expires = $_POST['Expires'];

    $query = "INSERT INTO coupons (Code, Discount, Expires) VALUES (?, ?, ?)";
    $param = [$Code, $Discount, $Expires];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Coupons Submitted Successfully"]);

?>