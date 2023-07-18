<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<form action="./enterData.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">FirstName</label>
      <input type="text" class="form-control" name="Data" aria-describedby="emailHelp" placeholder="Enter Data">
      <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>
    <button type="submit" name="Submit" value="clicked" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>


<?php 
 include ('/xampp/htdocs/websites/class/DbConnection.php');


if(isset($_POST["Submit"])){
    //var_dump($connection);
    $data=$_POST["Data"];
    $sql_insert_query = 
   "INSERT INTO ticket_id (Data) VALUES(?)";
   // "CALL insert_into_id(?)" ;

   //"UPDATE ticket_id SET Data=? WHERE ID = (select max(ID) from ticket_id";
$pstmt = $connection->prepare($sql_insert_query);
try{
    $pstmt->execute([$data]);

}
catch(Exception $e)
{
    echo $e;
}
}
else{
    echo "ERROR in Connection ";
}





?>