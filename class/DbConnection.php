<?php
              $db_server="localhost";
              $db_userName="root";
              $db_passWord="";
              $db_name="student_info";
        //  public $connection=null;     
    try{
        //$connection=mysqli_connect($db_server,$db_user,$db_pass,$db_name);
       //so upper case not an issue for querying .
       $connection=new PDO("mysql:host=$db_server;dbname=$db_name",$db_userName,$db_passWord);
       $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
       
        if($connection){
          // echo"it's connnected to pdo";
           return $connection;
        }
       }
        catch(Exception $e){
           echo $e;
        }
       

        
 







?>

















        
<!-- Old Querys  
    // $sql=("insert into `student_details` (`id`, `Name`, `Email`, `Password`)
          //        values (NULL, 'santhiya', 'santhiya@gmail.com', 'san@123');");
          // $get_from=("select * from 'student_details' where id=2" );
          
         
          // $gt=mysqli_query($connection,$get_from);
          
          // echo"<br>inserted succesfully";
          // echo("$gt");
          // //$data=("");
          // mysqli_close($connection);
         //  $sql="INSERT INTO student_details (Name,Email,Password) VALUES ('hari','hari@outlook.com','hari@123')";
       
         //  mysqli_query($connection,$sql);  
        -->
