<?php 

	/**
	* 
	*/
	class Database
	{
		public $host;
		public $name;
		public $password;
		public $db;
		public $con;
		public $connect;
		public $result = [];
		function __construct($host,$name,$password,$db)
		{
			$this->host = $host;
			$this->name = $name;
			$this->password = $password;
			$this->db = $db;
		}

		public function connect()
		{
			$this->connect = mysqli_connect($this->host,$this->name,$this->password,$this->db);
			if ($this->connect) {
				$this->con = true;
			}

		}

		public function goster($table,$column = '*' ,$where = null , $order = null)
		{
			
			$sql = "SELECT ".$column." FROM ".$table."";

			$query = mysqli_query($this->connect,$sql);

			while($row = mysqli_fetch_assoc($query)){
				array_push($this->result, $row);
			};
			

		}

		public function getResult()
		{

			return $this->result;
		}
	}






?>