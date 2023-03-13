<?php
/*
Create a PHP class called Car that has three private properties: $make, Smodel, and $year. Define a constructor method to set the values of these properties when a new object is created. Also, define six additional methods: get_make(), get_model(), get_year(), set_make(), set_model(), and set_year(). The get methods should allow us to retrieve the values of the private properties, while the set methods should allow us to update them. Finally, define a method called display_info() that echoes out the car's make, model, and year.
Create a Car object with the make, model, and year of a 2015 Toyota Corolla. Call the display_info() method to display the car's information.
Then, use the set_make() and set_model() methods to update the car's make and model to a 2015 Honda Civic. Call the display_info() method again to display the updated car information.
Hints:
Output:
Car make: Toyota
Car model: Corolla
Car year: 2015
Car make: Honda
Car model: Civic
Car year: 2015
*/
class Car {
    // Three private properties
    private $make;
    private $model;
    private $year;
  
    // Constructor method
    public function __construct($make, $model, $year) {
      $this->make = $make;
      $this->model = $model;
      $this->year = $year;
    }
  
    // Get method make
    public function get_make() {
      return $this->make;
    }
  
    // Set method make
    public function set_make($make) {
      $this->make = $make;
    }
  
    // Get method model
    public function get_model() {
      return $this->model;
    }
  
    // Set method model
    public function set_model($model) {
      $this->model = $model;
    }
  
    // Get method year
    public function get_year() {
      return $this->year;
    }
  
    // Set method year
    public function set_year($year) {
      $this->year = $year;
    }
  
    // Display method
    public function display_info() {
      echo "Car make by: " . $this->make . "\n";
      echo "Car model: " . $this->model . "\n";
      echo "Car year: " . $this->year . "\n";
    }
  }
  
  // Create a Car object
  $car = new Car("Toyota", "Corolla", 2015);
  
  // Display the Car information
  $car->display_info();
  
  // Use the set_make() and set_model() methods to update the Car's make and model
  $car->set_make("Honda");
  $car->set_model("Civic");
  
  // Display update
  $car->display_info();
  
/**
 * ------------------------------------
 */


class Person{
  // Properties
  protected $name;
  protected $email;

  public function __construct($name,$email)
  {
      $this->name=$name;
      $this->email=$email;
  }
  
  public function setName($name){
    $this->name =$name;
  }

  public function getName(){
      return $this->name;
  }

  public function setEmail($email){
    $this->email =$email;
  }

  public function getEmail(){
      return $this->email;
  }

  // public display_info(){
  //     echo $this->name;
  //     echo $this->email;
  // }
}

$person = new Person('NAME','E-MAIL');

echo $person->getName();

echo $person->getEmail();
