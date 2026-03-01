<?php 
    // class Person {
    //   public $name;

    //   public function greet() {
    //     return "Hello, my name is " . $this->name;
    // }
    // }
    // $person = new Person();
    // $person->name = "hans";
    
    // echo $person->greet();

    class student {
      public $name;

      public function __construct($name)
      {
        $this->name = $name;
      
        echo "object created for: " . $this->name . "<br>";
      }
      }
  $student = new student("Alice");
  $student2 = new student("Bob");
  $student3 = new student("Charlie");
  $student4 = new student("ad");



    class bankAccount {
      public $balance;
      public $owner;

      public function __construct($owner, $balance)
      {
        $this->owner = $owner;
        $this->balance = $balance;
      }
      public function deposit($amount) {
        $this->balance += $amount;
      }
      public function withdraw($amount) {
        if ($amount > $this->balance) {
          echo "Insufficient funds.";
        } else {
          $this->balance -= $amount;
        }
      }
    }


    $account1 = new bankAccount("Alice", 1000);
    $account2 = new bankAccount("Bob", 1000);
    $account3 = new bankAccount("Charlie", 1000);

    echo $account1->owner . " has a balance of $" . $account1->balance . "<br>";
    echo $account2->owner . " has a balance of $" . $account2->balance . "<br>";
    echo $account3->owner . " has a balance of $" . $account3->balance . "<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>