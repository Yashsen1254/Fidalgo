<?php
    require '../includes/init.php';
    header('Content-Type: application/json');

    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $query = "INSERT INTO users (Username, Email, Password) VALUES (?, ?, ?)";
    $param = [$Username, $Email, $Password];

    execute($query, $param);

    echo json_encode(['success' => true]);
?>