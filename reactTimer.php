<?php
require 'vendor/autoload.php';
date_default_timezone_set('Asia/Kolkata');
session_start();

$loop=\React\EventLoop\Loop::get();

$loop->addTimer(0.3,function (){

    echo "Timer";

});


$timer=$loop->addPeriodicTimer(0.2,function(){

    
    echo "running in the preodic".PHP_EOL;
});

$loop->addTimer(1.0,function() use ($timer,$loop){


    $loop->cancelTimer($timer);
});


$loop->run();
//$_SESSION["time"]=new DateTime("now", new DateTimeZone('America/New_York'));
$_SESSION["time"]=date("H:i:s:ms:ns");
$sessi=$_SESSION["time"];
echo $sessi;

?>
