<?php
	class Contact
	{
		private $first_name;
		private $last_name;
		private $street;
		private $zip;
		private $city;
		private $phone_number;

		function __construct($first_name, $last_name, $street, $city, $zip, $phone_number){
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->street = $street;
			$this->zip = $zip;
			$this->city = $city;
			$this->phone_number = $phone_number;
		}

		function getFirstName(){
			return $this->first_name;
		}
		
		function getLastName(){
			return $this->last_name;
		}
		
		function getStreet(){
			return $this->street;
		}
		
		function getZip(){
			return $this->zip;
		}
		
		function getCity(){
			return $this->city;
		}
		
		function getPhoneNumber(){
			return $this->phone_number;
		}

		function save(){
			array_push($_SESSION['list_of_contacts'], $this);
		}

		static function getAll(){
			return $_SESSION['list_of_contacts'];
		}

		static function deleteAll(){
			$_SESSION['list_of_contacts'] = array();
		}
	}
?>