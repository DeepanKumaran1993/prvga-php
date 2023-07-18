<?php
 
//include "/xampp/htdocs/websites/class/DbConnection.php";




class QueueTable{

    public $f_name;
    public $l_Name;
    public $e_Mail;
    public $conn;
  
    
    public function insert_Table($f_name,$l_name,$email_id,$conn){

        $this->conn=$conn;
        echo '<br>'.$f_name.'<br>'.$l_name.'<br>'.$email_id;
        //var_dump($connection);   

        $sql_insert_query = "INSERT INTO queue_data (F_Name,L_Name,E_Mail) 
                                 VALUES(?,?,?)";

                    $pstmt = $conn->prepare($sql_insert_query);

                    $pstmt->execute([$f_name,$l_name,$email_id]);

                    $this->selecting_Least_ID($conn);


                    //header("Location: /websites/student_details.php");

        

    }


    public function selecting_Least_ID($conn){

        //getting least id from tabel
        //setting into another DB;
        //deleting  id data from queue data;

        $selecting = "SELECT * from queue_data WHERE id = (SELECT MIN(id) FROM queue_data) ";
        $value = $conn->query($selecting);
        // $lastnumber = array($value->fetch(PDO::FETCH_ASSOC));
        $leastNumber = $value->fetch(PDO::FETCH_ASSOC)['id'];

        echo $leastNumber.PHP_EOL;

        $selecting = "SELECT * from queue_data WHERE id = (SELECT MAX(id) FROM queue_data) ";
        $value = $conn->query($selecting);
        $max_Number=$value->fetch(PDO::FETCH_ASSOC)['id'];
  
        echo $max_Number;


        //for($i=$leastNumber;$i<=$max_Number;$i++){
            $selecting = "SELECT * from queue_data WHERE id =$leastNumber";
            $value1 = $conn->query($selecting);
            $lastnumber = array($value1->fetch(PDO::FETCH_ASSOC));
            echo $lastnumber[0]["F_Name"];
            var_dump($lastnumber);
           //echo "<br>in the maxnumbee".$result;



//        }


    }




}










?>