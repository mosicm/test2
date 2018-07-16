<?php
class Person {

	public $firstname, $lastname, $age, $gender;
	private $id, $friends = [];

	public function __construct($firstname, $lastname, $age, $gender){
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->age = $age;
		$this->gender = $gender;
	}
	public function setId($id){
		$this->id = $id;
	}
	public function getId(){
		return $this->id;
	}
	public function addFriend($friend){
		$this->friends[] = $friend;
	}
	public function getFriends(){
		$friends = [];
		foreach($this->friends as $friend){
			$friends[] = $friend;
		}
		return $friends;
	}
	public function talk(){
		echo "Hello, my name is " . $this->firstname . " " . $this->lastname;
	}
	public function walk($place){
		echo "I'm going to " . $place;
	}
	public function work($task){
		echo "I have to do " . $task;
	}
	public function eat($food){
		echo "I'm eating " . $food;
	}
	public function drink($drink){
		echo "I'm drinking " . $drink;
	}
	public function sleep($time){
		echo "I will get up at " . $time;
	}
	public function __toString(){
		$string = "";
		$string .= "Firstname: " . $this->firstname . "<br>";
		$string .= "Lastname: " . $this->lastname . "<br>";
		$string .= "Age: " . $this->age . "<br>";
		$string .= "Gender: " . $this->gender;
		return $string;
	}

}

