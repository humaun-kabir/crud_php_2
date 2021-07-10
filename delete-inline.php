<?php
    $stu_id = $_GET['id'];
    include 'config.php';

    $sql = "DELETE FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn,$sql) or die("query unsuccessfull.");

    header("Location: http://localhost/crud_php_2/index.php");

    mysqli_close($conn);
?>