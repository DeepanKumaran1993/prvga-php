<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="sessionOne.php" method="post">

<label > enter the login credential </label><br>

<input name="Username" type="text" placeholder="Username">
<br>
<label> </label>
<input type="password" name="Password" placeholder="Password">
<br>
<input type="submit" name="submit" value="Submit">


</form>
</body>
</html>
<?php

if(isset($_POST["submit"])){

    if(!empty($_POST["Username"])&&!empty($_POST["Password"])){
        $user=filter_input(INPUT_POST,"Username",FILTER_SANITIZE_SPECIAL_CHARS);
        $pass=filter_input(INPUT_POST,"Password",FILTER_SANITIZE_SPECIAL_CHARS);

        $_SESSION["Username"]=$user;
        $_SESSION["Password"]=$pass;

        echo $_SESSION["Username"]."<br>";
        echo $_SESSION["Password"];
        header("Location: sessionTwo.php");
    }
    else{
        echo"enter username or password";
    }

}
?>
 