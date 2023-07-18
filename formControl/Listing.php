<?php
include "/xampp/htdocs/websites/class/DbConnection.php";
include("header.html");
//include("delete_student.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td,
        th {
            border: 1px solid #dddddd;
            /* text-align: left; */
            text-align: center;
            padding: 8px;
            border-bottom: 1px solid #ddd;

        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php
   // $db=new Get_connection();
    // $conn=$connection;
    // $list = new Student_List();
    // $list->get_Student($conn);
    ?>
</body>
</html>





<?php
// class Student_List
// {
//     public static function  delete_id()
//     {
//         echo "it's in the method";
//     }
//     function get_Student($conn)
//     {
//         $sql_get = "SELECT *  FROM student_details";
//         $stmt = $conn->query($sql_get);
//         echo "<table border=1 cellspacing=1 cellpadding=1>
//           <tr>
//             <th>id</th>
//             <th>name</th>
//             <th>email</th>
//             <th>Password </th>
//           </tr>
//           </table>";

//         while ($row = $stmt->fetch()) {
//             // echo $row['Name'].'<br>';


//             $id = $row["id"];
//             $name2 = $row["Name"];
//             $email = $row["Email"];
//             $lastName = $row["last_Name"];


//             echo "<table border=1  >
//                     <tr>  
//                     <td><font color=green>$id</font></td>
//                     <td><font color=green>$name2</font></td>
//                     <td><font color=green>$email</font></td>
//                     <td><font color=green>$lastName</font></td>
//                     <td> 
//                     <form action='Listing.php' method='post'>
//                     <input type='hidden' name='delete_id' value='$id' >
//                     <input type='submit' value='delete one'>
//                     </form>
//                     </td>
//                 </tr>
                
//             </table>";
//         }




//         $conn = null;
//     }
// }
?>
<?php 
// include "/xampp/htdocs/websites/class/Delete.php";

// $deleting_ID=new Delete();
// $deleting_ID->to_Delete($connection,$_POST["id"]);


?>




































<!-- Data extreact for student Listing 
           //echo "ID        : " . $result["id"] . "<br>";
            // echo "ID        : " . $result["id"] . "<br>";
            // echo "Name      : " . $result["Name"] . "<br>";
            // echo "Email     : " . $result["Email"] . "<br>";
            // echo "Last name : " . $result["last_Name"] . "<br>";

            // <td>is best learning platform</td>

            // <td><font color=green>Written by</font></td>






//$data = mysqli_query ($conn, $sql_get);
        // $attrs = array('width' => '600');
        // $table = new HTML_Table($attrs);
        //$delete_Student = new Delete_Student($conn);



        $count = 0;
        // if (mysqli_num_rows($data) > 0) {
        //     echo "<table border=1 cellspacing=1 cellpadding=1>

        //   <tr>
        //     <th>id</th>
        //     <th>name</th>
        //     <th>email</th>
        //     <th>Password </th>
        //   </tr>

        //   </table>";
        //     while ($result = mysqli_fetch_assoc($data)) {
        //         $count++;

        //         $id = $result["id"];
        //         $name2 = $result["Name"];
        //         $email = $result["Email"];
        //         $lastName = $result["last_Name"];
        //         //echo "ID        : " . $result["id"] . "<br>";
        //         // echo "ID        : " . $result["id"] . "<br>";
        //         // echo "Name      : " . $result["Name"] . "<br>";
        //         // echo "Email     : " . $result["Email"] . "<br>";
        //         // echo "Last name : " . $result["last_Name"] . "<br>";

        //         // <td>is best learning platform</td>

        //         // <td><font color=green>Written by</font></td>

        //         echo "<table >
        //             <tr>

        //             <td><font color=green>$id</font></td>
        //             <td><font color=green>$name2</font></td>
        //             <td><font color=green>$email</font></td>
        //             <td><font color=green>$lastName</font></td>
        //             <td> 
        //             <form action='delete_student.php?id='.$id method='post'>
        //             <input type='submit' value='delete one'>
        //            </form></td>

        //         </tr>

        //     </table>";
        //     }
        // }
       // echo $count; -->