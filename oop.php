<?php

class User {
  public $name;
  public $email;
  public $password;

  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  function hello() {
    echo 'Hello ' . $this->name;
  }

  function set_name($name) {
    $this->name = $name;
    echo "Name is set successfully!";
  }

  function get_name() {
    echo $this->name;
  }

}

class Employee extends User {

  public $title;
  public function __construct($name, $email, $password, $title){
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$user1 = new User('DevJet', 'devjet@gmail.com', 'password123');
$user2 = new User('Hikaru', 'hikaru@gmail.com', 'secretpassword');

var_dump($user1);
echo "<br>";
$user1->hello();
echo "<br>";
var_dump($user2);
echo "<br>";
$employee1 = new Employee('Ken', 'ken@gmail.com', 'password', 'Software Developer');
$title = $employee1->get_title();
echo "<br>";
var_dump($employee1);
echo "<br>";
echo $title;
