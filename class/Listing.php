<?php
include "/xampp/htdocs/websites/class/DbConnection.php";
//include "/xampp/htdocs/websites/class/Delete.php";



class Student_List
{
    public static function  delete_id()
    {
        echo "it's in the method";
    }
    function get_Student($conn)
    {
        $sql_get = "SELECT *  FROM student_details";
        $stmt = $conn->query($sql_get);
        // echo "<table border=1 cellspacing=1 cellpadding=1>
        // <thead>  
        // <tr>
        //     <th>Id</th>
        //     <th>First Name</th>
        //     <th>Last Name</th>
        //     <th>Email </th>
        //   </tr>
        //   </thead>
        //   </table>";
        echo '<table class="table">
        <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">First name</th>
          <th scope="col">Last name</th>
          <th scope="col">Email </th>
          <th scope="col">Delete </th>
        </tr>
      </thead>';
          

        while ($row = $stmt->fetch()) {
            // echo $row['Name'].'<br>';


            $id = $row["ID"];
            $name2 = $row["Name"];
            $email = $row["Email"];
            $lastName = $row["last_Name"];


            // echo "<table border=1  >
            // <tbody>     
            // <tr>  
            //         <td><font color=green>$id</font></td>
            //         <td><font color=green>$name2</font></td>
            //         <td><font color=green>$email</font></td>
            //         <td><font color=green>$lastName</font></td>
            //         <td> 
            //         <form action='/websites/class/delete.php' method='post'>
            //         <input type='hidden' name='id' value='$id' >
            //         <input type='submit' value='delete one'>
            //         </form>
            //         </td>
            //     </tr>
                
            //     </tbody> 
            // </table>";

            // <input type='submit' value='delete one'>
            
      echo"   <table class='table'>
           
            <tbody>
              <tr>
                <th scope='row'>$id</th>
                <td>$name2</td>
                <td>$email</td>
                <td>$lastName</td>
                <td> 
                     <form action='/websites/class/delete.php' method='post'>
                     <input type='hidden' name='id' value='$id' >
                    
                     <button type='submit' class='btn btn-primary'>Delete</button>
                     </form>
                     </td>
              </tr>
             
            </tbody>
          </table>";



        }




        $conn = null;
    }
}
?>