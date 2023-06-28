<?php
include("header.html")
?>
<?php
function part($name, $place)
{

    echo "hey dude {$name} <br>";
    echo "we are free to go {$place} <br>";
}


echo part("ray", " new York");
echo part("richard", " finland");

$name = array("bro", "the", "coder");

$full_name = "string the explode one you can use what ever we want";
$name_arr = explode(" ", $full_name);
$expl = implode(" ", $name);

echo ($name_arr);
foreach ($name_arr as $name1) {
    echo $name1 . "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="function.php" method="post">
        <input type="text" name="name"><br>
        <input type="submit" name="submit" value="Submit">

    </form>



    <?php
        $varible=null;
        if($_POST["submit"]){

               //echo"{$_POST["name"] }"; 
              $varible=filter_input(INPUT_POST,"name",FILTER_VALIDATE_EMAIL);
              echo"{$varible}";
        }



    ?>


</body>

</html>
<?php
include("footer.html")
?>