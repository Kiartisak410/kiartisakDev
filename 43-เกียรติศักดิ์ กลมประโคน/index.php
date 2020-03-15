<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8">
            <title>เพิ่มข้อมูล</title>
            <link rel="stylesheet" type="text/css" href="css/table.css">
    </head>
    <body>
        <a href="index.php">เพิ่มข้อมูล</a>
        <a href="show.php">แสดงข้อมูล</a>
        <a href="search.php">ค้นหาข้อมูล</a>
        <a href="update.php">แก้ไขข้อมูล</a>
        <a href="delete.php">ลบข้อมูล</a>
        <form action="forminsert.php" method="post" name="F1">
        <fieldset style="width:50%">
            <legend>Restaurant</legend>
            <table>
                <tr>
                    <td> รหัสเมนู : </td>
                    <td>
                        <input type="text" name="menu_ID" pattern="m[0-9]{4}" title="รหัสเมนูอาหารต้องขึ้นต้นด้วยตัวอักษร m และตัวเลข 4 ตัว" required>
                    </td>
                </tr>
                <tr>
                    <td>ขื่อเมนูอาหาร :</td>
                    <td>
                        <input type="text" name="menu_Name" /*pattern=""*/ title="ชื่อเมนูอาหาร 50 ตัวอักษร" required>
                    </td>
                </tr>
                <tr>
                    <td> ประเภทอาหาร : </td>
                    <td> 
                        <select name="menu_Type" required>
                            <option value="1">1 : อาหารคาว</option>
                            <option value="2">2 : อาหารหวาน</option>
                            <option value="3">3 : อาหารว่าง</option>
                        </select>
                    </td>
                </tr>    
                <tr> 
                    <td> ราคา : </td>
                    <td>
                        <input type="number" name="menu_price" pattern='[0-9]+(\\.[0-9][0-9]?)?' title="กรุณากรอกข้อมูลเป็นตัวเลข ตัวเลขจำนวนเต็มไม่เกิน 4 หลัก" required>
                    </td> 
                </tr>             
            </table>
<br>
            <input type="submit" value="เพิ่มเมนู">
            <input type="reset" value="Reset">  
        </fieldset>
    </form>
    </body>
</html>