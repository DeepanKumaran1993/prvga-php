
<?php
require "/xampp/htdocs/websites/db_Connection.php";
include("header.html");
?>
<?php
$sql=new Get_connection();
$conn=$sql->establish_connection();
//var_dump($conn);
if(isset($_POST["Submit"])){
    get_details($conn);
}
//<?php htmlspecialchars( $_SERVER["PHP_SELF"]) 
function get_details($conn)
{
    $f_name = filter_input(INPUT_POST, "f_Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $l_name = filter_input(INPUT_POST, "l_Name", FILTER_SANITIZE_SPECIAL_CHARS);
    $email_id = filter_input(INPUT_POST, "email_Id", FILTER_VALIDATE_EMAIL);

    // echo ("Name      :{$f_name}") . "<br>";
    // echo ("Last name :{$l_name}") . "<br>";
    // echo ("Email id  :{$email_id}") . "<br>";
    set_Details($f_name, $l_name, $email_id, $conn);
}



function set_Details($f_name, $l_name, $email_id, $conn)
{

   // var_dump($conn);
    if ($conn) {
        // echo ("{$f_name}") . "<br>";// echo ("{$l_name}") . "<br>";// echo ("{$email_id}") . "<br>";

        try {
            $sql_insert_query = "INSERT INTO student_details (Name,Email,last_Name) 
                         VALUES(?,?,?)";

                $pstmt=$conn->prepare($sql_insert_query); 
                $pstmt->execute([$f_name,$email_id,$l_name]);

                // mysqli_query($conn, $sql_insert_query);
                // mysqli_close($conn);

           
            
        } catch (Exception $e) {

            echo "$e";
        }
        $conn=null;
    }
}


?>