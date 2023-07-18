<?php

// include("/xampp/htdocs/websites/class.php.file/DbConnection.php");
include("header.html");
include "/xampp/htdocs/websites/class/DbConnection.php";
include '/xampp/htdocs/websites/class/AddStudent.php';
//include '/xampp/htdocs/websites/class/queue.php';
//require '/xampp/htdocs/websites/vendor/autoload.php';
//include '/xampp/htdocs/websites/class/formcon.php';

//require_once('db_Connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <label> Student Details</label>
  <!-- <form action="formcontrol.php" method="post">

        <input type="text" name="f_Name" placeholder="FirstName"><br>
        <input type="text" name="l_Name" placeholder="LastName"><br>
        <input type="email" name="email_Id" placeholder="Email"><br>
        <input type="submit" name="Submit">

    </form> -->


  <form action="formcontrol.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">FirstName</label>
      <input type="text" class="form-control" name="f_Name" aria-describedby="emailHelp" placeholder="Enter FirstName">
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">LastName</label>
      <input type="text" class="form-control" name="l_Name" aria-describedby="emailHelp" placeholder=" Enter Lastname">
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Email</label>
      <input type="email" class="form-control" name="email_Id" placeholder=" Enter Email">
    </div>
    <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
    <button type="submit" name="Submit" value="clicked" class="btn btn-primary">Submit</button>
  </form>





















  <!-- <button onclick= method="post" action="formcontrol.php">All student Details</button> -->
  <!-- <form action="student_details.php" method ="post">
            <input type="submit" name="student" value="get Student"><br>
    </form> -->



</body>

</html>





<?php

//$sql=new Get_connection();
//$sql->establish_connection();
//$conn = $connection;
// $var= $_POST["Submit"];
// echo $var;
// unset($var);
// echo "in the var ".$var;
// if(!empty($var) ){






//adding queue for mangeing in using tome stamp

                      //  date_default_timezone_set('Asia/Kolkata');
                      //  //session_start();
                      //  $time=date("h:i:s");
                      //  $_SESSION["time"]=$time;
                       //echo gettype($time).PHP_EOL;
                       //echo strlen($time).PHP_EOL;
                      // $time_Split=explode(":", $time);
                       //var_dump($time_Split[2]);
                       //echo $time_Split;
                     //  $queu=new \Ds\Queue();

                     



                       $post = new AddStudent;
                       $post->check_Connection($connection);
                     //  var_dump( $post->$deleted_Id);
                      
                       













        //  $f_name = filter_input(INPUT_POST, "f_Name", FILTER_SANITIZE_SPECIAL_CHARS);
        //  $l_name = filter_input(INPUT_POST, "l_Name", FILTER_SANITIZE_SPECIAL_CHARS);
        //  $email_id = filter_input(INPUT_POST, "email_Id", FILTER_VALIDATE_EMAIL);
        // //  $data=($f_name);
        // //  $data=($l_name);
        // //  $data=($email_id);
        // //  var_dump($data);
        //         $add->push($f_name, $l_name, $email_id);
        //         var_dump($add);










//    unset($var);
//}
// echo $var."<br> next line <br>" ;
// //$var= $_POST["Submit"];
// unset($_POST["Submit"]);
// echo empty($_POST["Submit"]);
//var_dump($conn);
//$post = new AddStudent();
//$post_V = $_POST;
//$post->check_Connection($connection);
//$post_Verificaton=isset($_POST["Submit"]);
// if(isset($_POST["Submit"])){
//     get_details($conn);
// }
// //<?php htmlspecialchars( $_SERVER["PHP_SELF"]) 
// function get_details($conn)
// {
//     $f_name = filter_input(INPUT_POST, "f_Name", FILTER_SANITIZE_SPECIAL_CHARS);
//     $l_name = filter_input(INPUT_POST, "l_Name", FILTER_SANITIZE_SPECIAL_CHARS);
//     $email_id = filter_input(INPUT_POST, "email_Id", FILTER_VALIDATE_EMAIL);

//     // echo ("Name      :{$f_name}") . "<br>";
//     // echo ("Last name :{$l_name}") . "<br>";
//     // echo ("Email id  :{$email_id}") . "<br>";
//     set_Details($f_name, $l_name, $email_id, $conn);
// }



// function set_Details($f_name, $l_name, $email_id, $conn)
// {

//    // var_dump($conn);
//     if ($conn) {
//         // echo ("{$f_name}") . "<br>";// echo ("{$l_name}") . "<br>";// echo ("{$email_id}") . "<br>";

//         try {
//             $sql_insert_query = "INSERT INTO student_details (Name,Email,last_Name) 
//                          VALUES(?,?,?)";

//                 $pstmt=$conn->prepare($sql_insert_query); 
//                 $pstmt->execute([$f_name,$email_id,$l_name]);

//                 // mysqli_query($conn, $sql_insert_query);
//                 // mysqli_close($conn);



//         } catch (Exception $e) {

//             echo "$e";
//         }
//         $conn=null;
//     }
// }






// $hariharen=20.0;
// print $hariharen;
// var_dump($hariharen);


?>