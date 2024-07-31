<?php

    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Name = $_POST['Name'];
    $Rating  = $_POST['Rating'];
    $Comment = $_POST['Comment'];

    $query = "INSERT INTO feedbacks (Name, Rating, Comment) VALUES (?, ?, ?)";
    $param = [$Name, $Rating, $Comment];

    execute($query, $param);

    echo json_encode(["status" => "success", "message" => "Feedback Submitted Successfully"]);

?>