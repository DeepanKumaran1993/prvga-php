<?php
include 'class/DbConnection.php';

?>
<!-- // try {

//    $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass);
//    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

//    if ($conn) {
//       echo "it's connnected to pdo";
//    }
// } catch (Exception $e) {
//    echo $e;
// } -->

<?php
class Get_connection
{
   private $db_server = "localhost";
   private $db_userName = "root";
   private $db_passWord = "";
   private $db_name = "student_info";
   public  $conn = "";
   public $sql="";

   // function connection_Db()
   // {
   //    $db_server = "localhost";
   //    $db_user = "root";
   //    $db_pass = "";
   //    $db_name = "student_info";
   //    $conn = "";

   //    $Sql_Conection = new Dbconnection();
   //    $Sql_Conection->connect($db_server, $db_user, $db_pass, $db_name, $conn);
   //   // echo $Sql_Conection->connect($db_server, $db_user, $db_pass, $db_name, $conn);
   // }


 public   function  establish_connection(){

// $call=new Get_connection();
// $call->connection_Db();
// return $call;
 $connection =new Dbconnection();
 $conne=$connection->connect($this->db_server, $this->db_userName,$this->db_passWord,$this->db_name);
 //var_dump($conn);
 return $conne;
}
}
  $c_Connection= new Get_connection();
  $c_Connection->establish_connection();

?>





















<!-- //$conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
//so upper case not an issue for querying .




// $sql=("insert into `student_details` (`id`, `Name`, `Email`, `Password`)
// values (NULL, 'santhiya', 'santhiya@gmail.com', 'san@123');");
// $get_from=("select * from 'student_details' where id=2" );


// $gt=mysqli_query($conn,$get_from);

// echo"<br>inserted succesfully";
// echo("$gt");
// //$data=("");
// mysqli_close($conn);
// $sql="INSERT INTO student_details (Name,Email,Password) VALUES ('hari','hari@outlook.com','hari@123')";

// mysqli_query($conn,$sql); -->