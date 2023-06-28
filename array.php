<?php
include("header.html")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <!-- <form action="array.php" method="post">
        <input type="text" name="code">
        <br>
        <input type="submit" value="submit">
    </form> -->
    <!-- 
    <form action="array.php" method="post"> 

    <label > enter any number  to post</label>
    <br>
    <input name="data" type="text" >
    <br>
    <input type="submit" value="submit"> 

    </form> -->

    <!-- <form action="array.php" method="post">

        <label>UserName</label><br>
        <input type="text" name="UserName"><br>
        <label>Password</label><br>
        <input type="password" name="Password"><br>
        <input type="submit" name="isLogged" value="Logged"><br>
    </form>


-->

    <form method="post" action="array.php">
        <input type="radio" name="creditCard" value="Visa">Visa<br>
        <input type="radio" name="creditCard" value="MasterCard">MasterCard<br>
        <input type="radio" name="creditCard" value="American Express">American Express<br>

        <input type="submit" value="submit" name="entered">


    </form>

    </body> 


    <?php
    //echo "String<br>";    

    // $count = $_POST["code"];
    //echo "{$count} <br>";

    //isset()-----empty();----------------------------
    // $varible = empty($_POST["data"]);
    // echo ("$varible");

    // $name;
    // echo isset($name);


    // foreach($_POST as $key=>$value){
    //echo"{$key} = {$value}<br>";
    // }


    // $username=$_POST["UserName"];
    // $passWord=$_POST["Password"];
    // if(empty($username)){
    //     echo"username entered";
    // }
    // else {
    //     echo"enter username";
    // }

    $credit_Detail = null;
    if (isset($_POST["entered"])) {

        if (isset($_POST["creditCard"])) {

            $credit_Detail = $_POST["creditCard"];
                echo "<br>{$credit_Detail}";
        }

        if($credit_Detail=="Visa"){

        }
    }









    // $contries=array("usa"=>"wahington dc","china"=>"bejing");

    // echo"{$contries[$count]}";


    // $country=array_keys($contries);
    //     foreach($country as $countri){
    //         echo"{$countri}<br>";
    //     }

    ?>

</html>
<?php
include("footer.html")
?>