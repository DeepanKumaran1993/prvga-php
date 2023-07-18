<?php
$add = new \Ds\Queue();
?>


<?php
//require '/xampp/htdocs/websites/class/AddStudent.php';

require  "/xampp/htdocs/websites/vendor/autoload.php";


$add->allocate(100);
//var_dump($add);

//  class Setter {

   
//     private $queue;
//     public function __construct()
//     {
//            $this->queue = array();
//     }


//     public function enqueue($f_name){
//         $this->queue[]=$f_name;
//     }

//     // public function print(){
//     //     var_dump(Setter::$add);
//     // }
//     public function dequeue() {
//         return array_shift($this->queue);
//       }
    
//       public function isEmpty() {
//         return empty($this->queue);
//       }

// }
// class Getter {
//     private $queueInstance;
  
//     public function __construct() {
//       $this->queueInstance = new Setter();
//     }
  
//     public function storeDataInQueue($data) {
//       $this->queueInstance->enqueue($data);
//     }
  
//     public function retrieveDataFromQueue() {
//       return $this->queueInstance->dequeue();
//     }
//   }

//   $otherObject = new Getter();
// $otherObject->storeDataInQueue("Data 1");
// $otherObject->storeDataInQueue("Data 2");

// $data = $otherObject->retrieveDataFromQueue();
// echo $data; // Output: Data 1

// $data = $otherObject->retrieveDataFromQueue();
// echo $data;
?>