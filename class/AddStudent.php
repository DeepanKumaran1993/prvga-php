
 <?php
    // require  '/xampp/htdocs/websites/vendor/autoload.php';
    //     $list=new \Ds\Queue();
    ?>
    
    
    <?php
    // include "/xampp/htdocs/websites/class/DbConnection.php";
    //include '/xampp/htdocs/websites/class/queue.php';


    //require "./formcontrol.php";
    require_once  '/xampp/htdocs/websites/vendor/autoload.php';

    // require '/xampp/htdocs/websites/class/static.php';
    //include '/xampp/htdocs/websites/class/Delete.php';
    //include '/xampp/htdocs/websites/class/AddStudent.php';

    class AddStudent
    {


        public static  $queue;
        public static $copy_queue;
        public static $count;
        public static $deleted_Id;
        public function __construct()
        {
            //  self::$queue=array();
            //self::$copy_queue =array();
        }

        public function check_Connection($connection)
        {
            //  $time=date("h:i:s");
            //  echo $time.PHP_EOL;
            //echo $_SESSION["time"]." in the session timing";
            // $add->push("in queue"); 
            // var_dump($add);
            // $explode = explode(':', $_SESSION["time"]);
            // //var_dump($explode);
            // $hour = (int)$explode[0];
            // $minute = (int)$explode[1];
            // $second = (int)$explode[2];
            //  echo $hour." ".$minute." M ". $second." second";



            //$_POST = $post_V;
            if (isset($_POST["Submit"])) {
                $conn = $connection;
                $this->get_details($conn);
            }
        }


        //<?php htmlspecialchars( $_SERVER["PHP_SELF"]) 
        public function get_details($conn)
        {
            // $queue = new \Ds\Queue();
            $f_name = filter_input(INPUT_POST, "f_Name", FILTER_SANITIZE_SPECIAL_CHARS);
            $l_name = filter_input(INPUT_POST, "l_Name", FILTER_SANITIZE_SPECIAL_CHARS);
            $email_id = filter_input(INPUT_POST, "email_Id", FILTER_VALIDATE_EMAIL);

            // echo ("Name      :{$f_name}") . "<br>";
            // echo ("Last name :{$l_name}") . "<br>";
            // echo ("Email id  :{$email_id}") . "<br>";

            if (!empty($f_name) && !empty($l_name) && !empty($email_id)) {

                $this->set_Details($f_name, $l_name, $email_id, $conn);
            } else {
                echo "please enter the value in all field";
            }
        }

        public function set_Details($f_name, $l_name, $email_id, $conn)
        {
            //require '/xampp/htdocs/websites/class/Delete.php';

            if ($conn) {
                // echo ("{$f_name}") . "<br>";// echo ("{$l_name}") . "<br>";// echo ("{$email_id}") . "<br>";
                $token_array = $this->getting_ID($conn);

                $current_ID = $this->Genearating_Token_Id($token_array);

                //     if($deleted_Id==$current_ID){
                //         $current_ID+=1;
                //     }
                // self::$queue=$delta_Id;
                include '/xampp/htdocs/websites/class/Delete.php';

                //echo $Vid;
                if (Delete_Student::$id == $current_ID) {
                    ++$current_ID;
                }


                // if($current_ID==$get_Id){
                //     $current_ID++;
                // }
                // $final_id= $_SESSION["word"];
                // if($current_ID==$final_id)
                // {
                //     $current_ID++;

                // }





                // $this->queue_Functionality($f_name, $l_name, $email_id,$conn);
                //$splited_array= array_shift($token_array);
                //var_dump($splited_array);
                echo $current_ID;

                try {

                    $sql_insert_query = "INSERT INTO student_details (ID,Name,Email,last_Name) 
                                 VALUES(?,?,?,?)";

                    $pstmt = $conn->prepare($sql_insert_query);

                    $pstmt->execute([$current_ID, $f_name, $email_id, $l_name]);
                    //header("Location: /websites/student_details.php");
                    //  $this->queue->pop();
                    //var_dump($this->queue);


                    // mysqli_query($conn, $sql_insert_query);
                    //mysqli_close($conn);

                    //   $conn = null;
                } catch (Exception $e) {

                    echo "$e";
                }
            }
        }



        public function Genearating_Token_Id($token_array)
        {


            // $token_array = $this->getting_ID($conn);
            // if ($token_array ==1) {
            //     return 1;
            // }
            // $array_copy = $token_array; //impelement queue]\
            // var_dump($array_copy);
            //    $this->queue->push("vakam pangali");

            // $ten=$this->queue->pop();
            //var_dump($ten);

            // for($i=$array_copy+1;$i<=$array_copy+5;$i++){

            //     $this->queue->push($i);
            // }
            // $first=$this->queue->peek();
            // $last=$this->queue->count()-1;
            // $fin=$last;
            // var_dump($fin);

            //------------------>queue set:
            //     $this->copy_queue=$this->queue->copy();
            //    // var_dump($this->copy_queue);
            //     $id=$this->copy_queue->peek();
            //     var_dump($id);
            //     return $id;

            if ($token_array == 1) {
                return 1;
            }


            $array_copy = $token_array;

            //echo "in  the array ..<br>";
            $last_id = $array_copy[count($array_copy) - 1];
            //echo $last_id;
            //echo "<br>";
            $first_id = array(array_shift($array_copy));
            // var_dump($first_id);


            if (count($array_copy) == 4) {

                for ($i = $last_id; $i <= ($last_id + 3); $i++) {

                    array_push($array_copy, $i);
                }
            }
            self::$copy_queue = $array_copy;


            // for($i=0;$i<count(self::$copy_queue)-1;$i++){

            //     if($get_Id==self::$copy_queue[0]){
            //         return self::$copy_queue[1];
            //     }
            // }


            //self::$queue=$first_id;



            //echo "in counted is above there ..<br>";
            //  var_dump($array_copy);
            //echo count($array_copy);
            return $first_id[0];
























            //echo "in  the array ..<br>";
            // $last_id = $array_copy[count($array_copy) - 1];
            // //echo $last_id;
            // //echo "<br>";
            // $first_id = array_shift($array_copy);
            // // var_dump($first_id);


            // if (count($array_copy) == 4) {

            //     for ($i = $last_id; $i <= ($last_id + 3); $i++) {

            //         array_push($array_copy, $i);
            //     }
            // }

            //echo "in counted is above there ..<br>";
            //  var_dump($array_copy);
            //echo count($array_copy);
            //return $array_copy;


            //echo count($token_array);




        }

        public function getting_ID($conn)
        {

            $selecting = "SELECT * from student_details WHERE ID = (SELECT MAX(ID) FROM student_details) ";
            $value = $conn->query($selecting);
            // $lastnumber = array($value->fetch(PDO::FETCH_ASSOC));
            $lastnumber = $value->fetch(PDO::FETCH_ASSOC)['ID'];
            // var_dump($lastnumber);
            $fetched_Number = $lastnumber;
            // echo $fetched_Number . "fetched number <br>";
            if ($fetched_Number == null) {
                /// $intial = 1;
                return 1;
            }
            // if($fetched_Number==1){
            //     return 2;
            // }

            //var_dump($fetched_Number);

            // $gen_Number = array();
            // $index_intial = 0;

            //  for ($i=$fetched_Number+1;$i<=$fetched_Number+5;$i++){
            //         $this->queue->push($i);
            //  }     









            for ($i = $fetched_Number + 1; $i <= ($fetched_Number + 5); $i++) {
                // echo"in the loop";    

                $gen_Number[] = $i;
                // echo $index_intial."<br>";
                // $index_intial++;
            }


            // var_dump($gen_Number);
            //return $this->queue;
            return $gen_Number;
            //echo $fetched_Number;
            //  echo $fetched_Number;
            $conn = null;
        }



        // $hariharen=20.0;
        // print $hariharen;
        // var_dump($hariharen);




        public function delete($id)
        {
            self::$deleted_Id = $id;
        }

        public function queue_Functionality($f_name, $l_name, $email_id, $conn)
        {


            //$this->queue->push($f_name);


            //$this->queue->push("add");
            // var_dump($this->queue->pop());





            // $queue = new \Ds\Queue();
            // $newqueue = new SplQueue();
            // $myQueue = new Queue();


            // try {

            //     $sql_insert_query = "INSERT INTO queue_data (F_Name,L_Name,E_Mail) 
            //                  VALUES(?,?,?)";

            //     $pstmt = $conn->prepare($sql_insert_query);

            //     $pstmt->execute([ $f_name, $l_name, $email_id]);
            //     //header("Location: /websites/student_details.php");


            //     // mysqli_query($conn, $sql_insert_query);
            //     //mysqli_close($conn);

            //     //   $conn = null;
            // } catch (Exception $e) {

            //     echo "$e";
            // }














        }
    }
    ?>


<?php
// Assuming you have a database connection established
// $conn = new PDO("mysql:host=localhost;dbname=your_database", "username", "password");

// // Start the transaction
// $conn->beginTransaction();

// try {
//     // Fetch the latest ID from the database
//     $sql = "SELECT MAX(id) AS max_id FROM users";
//     $stmt = $conn->query($sql);
//     $row = $stmt->fetch(PDO::FETCH_ASSOC);
//     $latestId = $row['max_id'];

//     // Calculate the next ID
//     $nextId = $latestId + 1;

//     // Allocate the IDs to the users
//     for ($i = 0; $i < 5; $i++) {
//         $userId = $nextId + $i;
//         $name = $_POST['name'][$i];
//         $email = $_POST['email'][$i];

//         // Insert the user data into the database with the allocated ID
//         $sql = "INSERT INTO users (id, name, email) VALUES (:id, :name, :email)";
//         $stmt = $conn->prepare($sql);
//         $stmt->bindParam(':id', $userId);
//         $stmt->bindParam(':name', $name);
//         $stmt->bindParam(':email', $email);
//         $stmt->execute();
//     }

//     // Commit the transaction
//     $conn->commit();

//     echo "IDs allocated successfully!";
// } catch (Exception $e) {
//     // Handle any exceptions and rollback the transaction if necessary
//     $conn->rollback();
//     echo "Error: " . $e->getMessage();
// }

// // Close the database connection
// $conn = null;






//------------------------------deleted que code in  set details function ------

// echo "in  the array ..<br>";
// var_dump($token_array[0]);
// $add->push($f_name, $l_name, $email_id);
// var_dump($add);
//   $otherObject = new Getter();
// $otherObject->storeDataInQueue("Data 1");
// $otherObject = new Getter();
// $otherObject->storeDataInQueue($f_name);

// echo $otherObject->retrieveDataFromQueue();




?>