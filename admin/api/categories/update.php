<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Id = $_POST['CategoryId'];
    $Name = $_POST['Name'];

    $query = "UPDATE categories SET Name = ? WHERE CategoryId = ?";
    $param = [$Name, $Id];

    $result = execute($query, $param);

    if($result) {
        echo json_encode(["status" => "success", "message" => "Category Updated Successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something Went Wrong"]);
    }
?>