<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // class foo
    // {
    //     function do_foo()
    //     {
    //         echo "Doing foo."; 
    //     }
    // }
    
    // $bar = new foo;
    // $bar->do_foo();
    // $associativeArray = array(
    //     "name" => "John",
    //     "age" => 25,
    //     "email" => "john@example.com"
    // );
    // // echo $associativeArray["name"] . "<br>"; // Output: John
    // // echo $associativeArray["age"] . "<br>";  // Output: 25
    // echo $associativeArray["email"]; // Output: john@example.com
    // Constructors and Destructors 
    
    
    echo "--------------------------------------------------------------" . "<br>";
    echo  "<br>";
    class dosomth{
        private $name = "ahmad";
        public $lname = "yazan";
        public function just(){
            echo "hello" . $this ->name ;
        } 
    }
    $obj = new dosomth ; 
    echo $obj->lname;
    $obj -> just();
    echo  "<br>";
    echo "--------------------------------------------------------------". "<br>";
    echo  "<br>";
 
    
    echo "--------------------------------------------------------------". "<br>";
    echo  "<br>";
    echo "1.__construct". "<br>"; 
   class A1 {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "A new person object has been created.\n";
    }
    }

    $person1 = new A1("John", 30);
    
    echo  "<br>";
    echo "--------------------------------------------------------------". "<br>"; 
    echo  "<br>";

    echo "2 . __destruct". "<br>"; 
    class MyClass {
        public $name;
         public $age;
        public function __construct() {
            echo "construct\n". "<br>";
        }
        public function __destruct() {
            echo "__destruct\n". "<br>";
        }
        public function someMethod() {
            echo "This is a method in MyClass.\n". "<br>";
        }
    }
    echo  "<br>";
    echo "--------------------------------------------------------------". "<br>"; 
    echo  "<br>";
    
    
    // When the $myObject goes out of scope (end of the script),
    // only the second destructor will be called, and you will see the message "This is the second destructor."
    
        // class Person {
    //     private $name;
        
    //     public $age;
        
    //     public function __construct($name, $age) {
    //         $this->name = $name;
    //         $this->age = $age;
    //     }
    //     public function getName() {
    //         return $this->name;
    //     }
    //     private function calculateRetirementAge() {
    //         return 65 - $this->age;
    //     }
    //     public function getRetirementAge() {
    //         return $this->calculateRetirementAge();
    //     }
    // }
    
    // $person = new Person("John", 30);
    // echo  "<br>";

    // // echo "Name: " . $person->name; 
    
    // echo "Age: " . $person->age. "<br>";  
    
    // echo "Name: " . $person->getName(). "<br>"; 
    
    // echo "Retirement Age: " . $person->getRetirementAge();
    
    ?>
</body>
</html>