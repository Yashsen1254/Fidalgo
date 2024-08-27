<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $FirstName = $_POST['FirstName'];
    $LastName  = $_POST['LastName'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $ZipCode = $_POST['ZipCode'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];

    $query = "INSERT INTO checkout (FirstName, LastName, Address, City, ZipCode, Phone, Email) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $param = [$FirstName, $LastName, $Address, $City, $ZipCode, $Phone, $Email];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Checkout Submitted Successfully"]);

?>