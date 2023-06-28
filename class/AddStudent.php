    <?php
    //  include "/xampp/htdocs/websites/class/DbConnection.php";
    include "/xampp/htdocs/websites/class/DbConnection.php";


    class AddStudent
    {
        public function check_Connection($connection)
        {
            //$_POST = $post_V;
            if (isset($_POST["Submit"])) {
                $conn = $connection;
                $this->get_details($conn);
            }
        }


        //<?php htmlspecialchars( $_SERVER["PHP_SELF"]) 
        public function get_details($conn)
        {
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
            if ($conn) {
                // echo ("{$f_name}") . "<br>";// echo ("{$l_name}") . "<br>";// echo ("{$email_id}") . "<br>";
                $token_array = $this->getting_ID($conn);
                // echo "in  the array ..<br>";
                // var_dump($token_array[0]);

                $current_ID = $this->Genearating_Token_Id($token_array);
                //$splited_array= array_shift($token_array);
                //var_dump($splited_array);
                echo $current_ID;

                try {

                    $sql_insert_query = "INSERT INTO student_details (ID,Name,Email,last_Name) 
                                 VALUES(?,?,?,?)";

                    $pstmt = $conn->prepare($sql_insert_query);

                    $pstmt->execute([$current_ID, $f_name, $email_id, $l_name]);
                    header("Location: /websites/student_details.php");


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
            if($token_array==1){
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

            //echo "in counted is above there ..<br>";
            //  var_dump($array_copy);
            //echo count($array_copy);
            return $first_id[0];


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
                $intial = 1;
                return $intial;
                
            }
            $gen_Number = array();
            // $index_intial = 0;
            for ($i = $fetched_Number + 1; $i <= ($fetched_Number + 5); $i++) {
                // echo"in the loop";    

                $gen_Number[] = $i;
                // echo $index_intial."<br>";
                // $index_intial++;
            }
            // var_dump($gen_Number);
            return $gen_Number;
            //echo $fetched_Number;
            //  echo $fetched_Number;
            $conn = null;
        }






        // $hariharen=20.0;
        // print $hariharen;
        // var_dump($hariharen);




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
?>