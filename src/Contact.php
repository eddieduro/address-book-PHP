<?php
	class Contact
	{
		private $first_name;
		private $last_name;
		private $street;
		private $zip;
		private $city;
		private $phone_number;

		function __construct($first_name, $last_name, $street, $zip, $city, $phone_number){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->street = $street;
			$this->zip = $zip;
			$this->city = $city;
			$this->phone_number = $phone_number;
		}
	}
?>