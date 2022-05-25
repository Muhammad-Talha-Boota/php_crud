<?php

$stu_id = $_GET['id'];

include 'sql_conn.php';

$sql = "DELETE FROM student where sid = {$stu_id}";

$result = mysqli_query($conn,$sql) or die('Query Unseccessful');

header('Location: http://localhost/php_crud/index.php');

mysqli_close($conn);

?>