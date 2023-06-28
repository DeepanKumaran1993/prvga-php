<?php
include"/xampp/htdocs/websites/db_Connection.php";




var_dump($_POST);
$id = $_POST["id"];

$db=new Get_connection();
$conn=$db->establish_connection();
$sql_get = "DELETE FROM student_details WHERE id=?";
//prepare statement query--> $sql_insert_query = "INSERT INTO student_details (Name,Email,last_Name) VALUES(?,?,?)";$pstmt=$conn->prepare($sql_insert_query); $pstmt->execute([$f_name,$l_name,$email_id]);
$pstmt=$conn->prepare($sql_get);
$pstmt->execute([$id]);
header("Location: student_details.php");
?>
