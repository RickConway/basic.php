<html>
<body>

<?php 

include("config.inc.php");

$firstname = $_POST['fname'];
$name = $_POST['name'];
$lastname = $_POST['lname'];
$sex = $_POST['sex'];
$birthdate = $_POST['birth'];
$address = $_POST['ad'];
$tel = $_POST['PNum'];
$email = $_POST['Email'];

echo"<br>";
echo"<br>";
echo $_POST["fname"]; 
echo " ";
echo $_POST["name"]; 
echo " ";
echo $_POST["lname"]; 
echo"<br>";
echo $_POST["birth"]; 
echo"<br>";
echo $_POST["sex"]; 
echo"<br>";
echo $_POST["ad"]; 
echo"<br>";
echo $_POST["Email"]; 
echo"<br>";
echo $_POST["PNum"]; 

?>
<br>
<br>
<?php

$sql = "INSERT INTO tbl_member (id, Firstname, name, Lastname, sex, Birthdate, Address, Telephone, Email) 
                        VALUES ('', '$firstname', '$name', '$lastname', '$sex', '$birthdate', '$address', '$tel', '$email')";

if(mysqli_query($conn, $sql)) {
    echo "เพิ่มข้อมูลสำเร็จ";
}else{
    echo "เพิ่มข้อมูลไม่สำเร็จ";
}
$conn -> close();

?>
</body>
</html>