<?php

// phpinfo();
// die();

?>
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
    <br>
    <button onclick=""> Click on the folder.....</button>

    <!-- <?php
            echo "i love pizza when have it<br>";
            $name = "folks";
            $lastName = "gang";
            $pizza_Price = 2.99;
            $quantity = 4;
            $acutal_Price = $pizza_Price * $quantity;

            echo "hai {$name} <br>come join with our {$lastName}<br>";
            echo "you ordered {$quantity} of pizzas and price is \${$acutal_Price}";

            ?> -->

    <!-- <form method="get" action="index.php">

    <label>UserName:</label>
    <input name="User_" type="text">
    <br>
    <label>PassWord:</label>
    <input name="pass_" type ="password">
    <br>
    <input type="submit" value="submit">

</form> -->
    <form method="get" action="index.php">
        <label> value of X:</label><br>
        <input type="text" name="x"><br>
        <label>value of Y:</label><br>
        <input name="y" type="text">
        <br>

        <input type="submit" value="click here ">

    </form>

    <form method="get" action="index.php">
        <input value="Stop" name="Stop" type="submit">
    </form>



    <?php

    //    echo $_GET["User_"]."<br>";
    //    echo "{$_GET["pass_"]}";

    // echo $_GET["x"];
    //  echo $_GET["y"]."<br>";

    $varible = $_GET["x"];
    echo max($_GET["y"], $_GET["x"]) . "<br>";
    echo ceil(32.443);
    //echo rand(11111,99999);

    if ($varible >= 18 && $varible <= 109) {
        echo "your are eligible to vote";
    }
    
    
    $fruits=array("apple","Banana","Orange");
   
    $fruits=array_reverse($fruits);
   foreach($fruits as $fruit){
        echo "<br>{$fruit}";
   }

   $countries =array(
        "USA"=>"Washington","India"=>"Delhi","RPC"=>"Bejing"
   );

   echo"<br> {$countries["USA"]}<br>";

   foreach($countries as $key =>$value){
    echo" {$key} ----{$value}<br>";
   }
   echo array_pop($countries);
   
   foreach($countries as $key =>$value){
    echo"<br> {$key} ----{$value}<br>";
   }
    
    ?>








</body>

</html>
<?php
include("footer.html");



require  '/vendor/autoload.php'; 
// Importing classes into the project

use React\EventLoop\Factory;
$loop=Factory::create();

$loop->addTimer(2, 
  function(){ 
    // Using a timer to start a task after 2 seconds
    echo "Request 1" .PHP_EOL;
  }
);

$loop->addTimer(10, 
  function(){ 
    // Using a timer to start a second task after 10 seconds
    echo "Request 2" .PHP_EOL;
  }
);

$loop->run(); 
  // Starting the event loop












?>