<?php
// include"/xampp/htdocs/websites/db_Connection.php";

// var_dump($_POST);
// $id = $_POST["id"];

// $db=new Get_connection();
// $conn=$db->establish_connection();
// $sql_get = "DELETE FROM student_details WHERE id=?";
// //prepare statement query--> $sql_insert_query = "INSERT INTO student_details (Name,Email,last_Name) VALUES(?,?,?)";$pstmt=$conn->prepare($sql_insert_query); $pstmt->execute([$f_name,$l_name,$email_id]);
// $pstmt=$conn->prepare($sql_get);
// $pstmt->execute([$id]);
// header("Location: student_details.php");
?>


<?php


// class Delete
// {
//     public static $id;
//     public function to_Delete($connection)
//     {
//         //include "/xampp/htdocs/websites/class/DbConnection.php";
//         var_dump($_POST);
//         $this->id = $_POST["id"];

//         // $db=new Get_connection();
//         $conn = $connection;
//         //$db->establish_connection();
//         $sql_get = "DELETE FROM student_details WHERE id=?";
//         //prepare statement query--> $sql_insert_query = "INSERT INTO student_details (Name,Email,last_Name) VALUES(?,?,?)";$pstmt=$conn->prepare($sql_insert_query); $pstmt->execute([$f_name,$l_name,$email_id]);
//         $pstmt = $conn->prepare($sql_get);
//         $pstmt->execute([$this->id]);
//         header("Location: /websites/student_details.php");
//         return $this->id;
//     }
// }
// ?>


// <?php
// require "/xampp/htdocs/websites/class/DbConnection.php";

// $deleting = new Delete();
// $get_Id = $deleting->to_Delete($connection);

?>