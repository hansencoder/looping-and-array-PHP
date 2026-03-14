<?php 

class user {
  public $name;
  public $email;
  private $status = 'active';
  
  public function __construct($name, $email) {
    $this->name = $name;
    $this->email = $email;
  }

  public function login() {
    echo $this->name . '  logged in. <br>';
  }

  //accessor method to get the value of the private property $status
  public function getstatus() 
  {
    echo $this->status;
  }

  // setter
  public function setstatus($status) 
  {
    $this->status = $status;
  }
  
}

$user1 = new user('hanski', 'hans@example.com');
$user1->getstatus();



?>