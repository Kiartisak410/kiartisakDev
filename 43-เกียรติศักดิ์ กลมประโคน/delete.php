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
    <h1>ลบข้อมูล</h1>
    <form action="" method="post">
        รหัสเมนู :
        <input type="text" name="txt_id" required>
        <input type="submit" value="ค้นหา"> <br>
</form>
<hr>
<table>
<tr> 
    <th>รหัสเมนู</th> <th>ขื่อเมนูอาหาร</th> <th>ประเภทอาหาร</th> <th>ราคา</th>
</tr>
<?php
        error_reporting(~E_NOTICE);
        require 'connect.php';
        if (isset($_POST['txt_id'])) 
        {
            $id = $_POST['txt_id'];
            $search = "SELECT * FROM menu WHERE menu_ID = '$id' ";
            $result = mysqli_query($con, $search);
            $row = mysqli_fetch_array($result);
        }
?>
    <form method="post" action="">
                    <td>
                        <input type="text" name="menu_ID" value="<?php echo $row['menu_ID'];?>"  readonly>
                    </td>
                    <td>
                        <input type="text" name="menu_Name" title = "ชื่อเมนูอาหาร 50 ตัวอักษร" value="<?php echo $row['menu_Name'];?>" /*pattern=""*/ readonly />
                    </td>
                
                    <td>
                    <select name="menu_Type" readonly>
                        <option value="11-20"
                            <?php if ($row['menu_Type'] == "1") {echo "selected";} ?>>1 : อาหารคาว</option>
                        <option value="21-30"
                            <?php if ($row['menu_Type'] == "2") {echo "selected";} ?>>2 : อาหารหวาน</option>
                        <option value="31-40"
                            <?php if ($row['menu_Type'] == "3") {echo "selected";} ?>>3 : อาหารว่าง</option>
                   </select>
                    </td>
                    <td>
                        <input type="number" name="menu_price" title="เลขจำนวนเต็มไม่เกิน 4 หลัก" value="<?php echo $row['menu_price'];?>" pattern="[0-9]{4}" readonly>
                    </td> 
                </tr>    
            </table>  <br>
        <input type="submit" name="delete" value="ลบข้อมูล">
    </form>

</table> <br>
<?php
        require 'connect.php';
        if(isset($_POST['delete']))
        {
            $idupd = $_POST['menu_ID'];
            $nameupd = $_POST['menu_Name'];
            $sexupd = $_POST['menu_Type'];
            $ageupd = $_POST['menu_price'];
        $upd = "DELETE FROM menu WHERE menu_ID = '$idupd'";
        $result = mysqli_query($con, $upd);
        if ($result)
            { header('Location: show.php');}
        else{ echo 'แก้ไขข้อมูลไม่สำเร็จ'; }
        }
    ?>

</body>
</html>