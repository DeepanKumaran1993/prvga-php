
<?php
// require 'vendor/autoload.php';
// //require __DIR__ . '/vendor/autoload.php';


// $loop=\React\EventLoop\Factory::create();

// $loop->addTimer(1,function(){
//   echo "after the loop";

// });
// echo"before the loop";




 require __DIR__ . '/vendor/autoload.php';

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




// require __DIR__ . '/vendor/autoload.php';
// Importing classes into the project

// $loop = \React\EventLoop\Loop::get();

// $loop->addTimer(
//   2,
//   function () {
//     // Using a timer to start a task after 2 seconds
//     echo "Request 1" . PHP_EOL;
//   }
// );

// $loop->addTimer(
//   1,
//   function () {
//     // Using a timer to start a second task after 10 seconds
//     echo "Request 2" . PHP_EOL;
//   }
// );

// $loop->run();
// // Starting the event loop











// require 'vendor/autoload.php';
// $loop = React\EventLoop\Loop::get();

// function handleRequest(Psr\Http\Message\ServerRequestInterface $request): React\Promise\PromiseInterface {
//   return React\Promise\resolve()->then(function () use ($request) {
//       // Handle the request asynchronously and return the appropriate response
//   });
// }
// $server = new React\Http\HttpServer($loop, function (Psr\Http\Message\ServerRequestInterface $request) {
//   return handleRequest($request);
// });
// $socket = new React\Socket\SocketServer('0.0.0.0:8000', $this->loop);
// $server->listen($socket);
// $loop->run();



// $que=new \Ds\Queue();
// $que->push("hai");
// $que->push("hello");

// var_dump($que->capacity());


function run()
{
    static $a = 0;
    if ($a < 3) {
        $a++;
        echo $a;
    }
}

echo run();
echo run();
echo run();















?>