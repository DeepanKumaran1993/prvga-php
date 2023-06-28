
<?php
// require 'vendor/autoload.php';
// //require __DIR__ . '/vendor/autoload.php';


// $loop=\React\EventLoop\Factory::create();

// $loop->addTimer(1,function(){
//   echo "after the loop";

// });
// echo"before the loop";




// require __DIR__ . '/vendor/autoload.php';

// $http = new React\Http\HttpServer(function (Psr\Http\Message\ServerRequestInterface $request) {
//     return React\Http\Message\Response::plaintext(
//         "Hello World!\n"
//     );
// });

// $socket = new React\Socket\SocketServer('127.0.0.1:8080');
// $http->listen($socket);

// echo "Server running at http://127.0.0.1:8080" . PHP_EOL;





// require __DIR__ . '/vendor/autoload.php'; 
// // Loading the required libraries into our project.

// $http = new React\Http\HttpServer(
//   function (Psr\Http\Message\ServerRequestInterface $request) {
//     //returning a message in case a connection is made to the server.
//     return React\Http\Message\Response::plaintext("ReactPHP started\n");
//   }
// );

// $socket = new React\Socket\SocketServer('127.0.0.1:5000'); 
// // Creating a socket server
// $http->listen($socket);

// echo "Server running at http://127.0.0.1:5000". PHP_EOL;




require __DIR__ . '/vendor/autoload.php'; 
// Importing classes into the project

$loop = \React\EventLoop\Factory::create();

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