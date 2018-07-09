<?php
    include("connect_db.php");

    $p_name = $_POST["p_name"];
    $p_price = $_POST["p_price"];
    $p_detail = $_POST["p_detail"];
    $p_image = $_POST["p_image"];

    $sql = "INSERT INTO product (p_name, p_price, p_detail, p_image) 
            VALUES ('".$p_name."','".$p_price."','".$p_detail."','".$p_image."')";

    $query = mysqli_query($conn,$sql);

    if($query) {
        echo "Record add successfully";
    }

    mysqli_close($conn);

?>