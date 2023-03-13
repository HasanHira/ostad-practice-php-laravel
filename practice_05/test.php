
<?php

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
  
?>