<!DOCTYPE html>
<html>
<head>
<title>หน้าเพิ่มข้อมูล</title>
</head>
<body>
<body>
<?php
require 'connect.php';
    $id = $_POST['menu_ID'];
    $name = $_POST['menu_Name'];
    $type = $_POST['menu_Type'];
    $price = $_POST['menu_price'];

    $adddat = "INSERT INTO menu VALUE ('$id','$name','$type','$price') ";
    $result = mysqli_query($con, $adddat);
if ($result)
{
    echo "เพิ่มข้อมูลสำเร็จ" . "<br>";
    echo '<a href="show.php">show data</a>';
}
else
{
    echo 'เพิ่มข้อมูลไม่สำเร็จ';
}
?>

</body>
</html>
