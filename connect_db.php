<?php
    $conn = mysqli_connect('localhost','root','','ecommerce');
    if (!$conn) {
        die('Could not connect: ' . mysql_error());
    }
    mysqli_close($conn);
?>