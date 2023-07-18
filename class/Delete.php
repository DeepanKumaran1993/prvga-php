
<?php
require "/xampp/htdocs/websites/class/DbConnection.php";
//require "/xampp/htdocs/websites/class/AddStudent.php";
//include "/xampp/htdocs/websites/class/DbConnection.php";


class Delete_Student{

public static $id;
public static  function  delete_Id_Method($connection){
//    var_dump($_POST);
self::$id = $_POST["id"];
// $db=new Get_connection();
$conn= $connection;
//$db->establish_connection();
$sql_get = "DELETE FROM student_details WHERE id=?";
//prepare statement query--> $sql_insert_query = "INSERT INTO student_details (Name,Email,last_Name) VALUES(?,?,?)";$pstmt=$conn->prepare($sql_insert_query); $pstmt->execute([$f_name,$l_name,$email_id]);
$pstmt=$conn->prepare($sql_get);
$pstmt->execute([self::$id]);
//$del_Id=self::$id;
return self::$id;
//header("Location: /websites/student_details.php");
//header ("Location: /websites/formcontrol.php");
}
}



//$clear=new Delete_Student();

Delete_Student::delete_Id_Method($connection);
// $obj=new AddStudent();
// $obj->delete($clear->delete_Id_Method($connection));
header ("Location: /websites/formcontrol.php");

//$delta_Id=$clear->$id;

?>