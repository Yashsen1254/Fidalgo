<?php
    require '../../includes/init.php';
    header('Content-Type: application/json');

    $Id = $_POST['CouponId'];
    $Code = $_POST['Code'];
    $Discount = $_POST['Discount'];
    $Expires = $_POST['Expires'];

    $query = "UPDATE coupons SET Code = ?, Discount = ?, Expires = ? WHERE CouponId = ?";
    $param = [$Code, $Discount, $Expires, $Id];

    $result = execute($query, $param);

    if($result) {
        echo json_encode(["status" => "success", "message" => "Coupon Updated Successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Something Went Wrong"]);
    }
?>