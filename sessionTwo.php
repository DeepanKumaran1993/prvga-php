<?php
session_start();

echo "enterd in second page";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    hai this is second page u can continue or click the button to Log out....<br>
    <a href="sessionOne.php" onclick="function logout()">click here for log out</a><br>

</body>

</html>
<?php
echo $_SESSION["Username"];
echo $_SESSION["Password"];

function logout()
{

    session_destroy();
    header("Location:sessionOne.php");
}

?>