<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>หน้าแสดงข้อมูล</title>
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body>
        <a href="index.php">เพิ่มข้อมูล</a>
        <a href="show.php">แสดงข้อมูล</a>
        <a href="search.php">ค้นหาข้อมูล</a>
        <a href="update.php">แก้ไขข้อมูล</a>
        <a href="delete.php">ลบข้อมูล</a>
        <hr>
        <h1>แสดงข้อมูล</h1>
        <table>
                <tr>
                    <th>รหัสเมนู</th>
                    <th>ขื่อเมนูอาหาร</th>
                    <th>ประเภทอาหาร</th>
                    <th>ราคา</th>
                </tr>
                
                <?php
                require 'connect.php';
                $result = mysqli_query($con, "SELECT * FROM menu");

                if ($result) 
                { 
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row["menu_ID"] . "</td>";
                        echo "<td>" . $row["menu_Name"] . "</td>";
                        echo "<td>" . $row["menu_Type"] . "</td>";
                        echo "<td>" . $row["menu_price"] . "</td>";
                        echo "</tr>";
                    }
                } 
                ?>               
        </table>
</body>
</html>