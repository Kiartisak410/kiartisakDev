<!DOCTYPE html>
<html>

<head>
    <title>หน้าค้นหาข้อมูล</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/table.css">
</head>

<body>
<a href="index.php">เพิ่มข้อมูล</a>
        <a href="show.php">แสดงข้อมูล</a>
        <a href="search.php">ค้นหาข้อมูล</a>
        <a href="update.php">แก้ไขข้อมูล</a>
        <a href="delete.php">ลบข้อมูล</a>
    <hr>
    <h1>ค้นหาข้อมูล</h1>
    <form action="" method="post">
        รหัส/ชื่อเมนูอาหาร :
        <input type="text" name="txt_id"/>
        <input type="submit" value="Search" /> <br />
    </form>
    <br />
        <?php
        require 'connect.php';
      if (isset($_POST['txt_id'])) {  
            $id = $_POST['txt_id']; 
            $search = "SELECT * FROM menu WHERE menu_ID = '$id' OR menu_Name LIKE '%$id%' ";
            $result = mysqli_query($con, $search);
            echo    "<table><tr> 
                        <th>รหัสเมนู</th> <th>ขื่อเมนูอาหาร</th> <th>ประเภทอาหาร</th> <th>ราคา</th>
                    </tr>";
            if($result) {  
                while($row = mysqli_fetch_array($result)) {
            echo "<td>" . $row["menu_ID"] . "</td>";
            echo "<td>" . $row["menu_Name"] . "</td>";
            echo "<td>" . $row["menu_Type"] . "</td>";
            echo "<td>" . $row["menu_price"] . "</td>";
            echo "</tr>";
                }
            echo "</table>";
          }
        }
        ?>
</body>
</html>