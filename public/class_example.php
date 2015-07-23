<?php

class Person{
	public $firstName;
	public $lastName;
}

class Cohort{
	public $name;
	public $startDate;
	public $endDate;
	public $students = array();
		// this here function, when inside a class, is called a method
	public function addStudent($student){
		$this->students[] = $student;

		return 'welcome to ' . $this->name . ' ' . $person1->firstName . ' ' . $person1->lastName . PHP_EOL;

$person1 = new Person();

$person1->firstName = 'cactus';
$person1->lastName = 'carl'

$person2-> new Person();

$person2->firstName = 'wild';
$person2->lastName = ='bill';

$person3-> new Person();

$person3->firstName = 'yes';
$person3->lastName = ='man';

var_dump($person1);

echo ' welcome to codeup ' . $person1->firstName;
