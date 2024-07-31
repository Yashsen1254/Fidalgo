<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $TotalPerson = $_POST['TotalPerson'];
    $Date = $_POST['Date'];

    $query = "INSERT INTO booking (TotalPerson, Date) VALUES (?, ?)";
    $param = [$TotalPerson, $Date]; 

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Booking Added Successfully"]);
?>