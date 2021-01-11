<?php
	class bases
	{
		
		private $dbkl;
		
		public function conn()
		{
			global $dbhostname,$dbport, $dbusername, $dbpassword,$dbdatabase;
			
			if($this->dbkl==null)
			{
				try 
				{
					$db = new PDO("mysql:host=$dbhostname;dbname=$dbdatabase;port=$dbport", $dbusername, $dbpassword);
					$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$db->exec("set names utf8");
					$this->dbkl=$db;
				}
				catch(PDOException $e) 
				{
					echo $e->getMessage();
				}
			}
			
			return $this->dbkl;
									
		}  //connect function


		function TSelect($TableName,$Wherep,$Orderp)
		{
			if($TableName!==null)
			{
				$conm=$this->conn();
				
				$query="SELECT `$TableName`.* FROM `$TableName` WHERE $Wherep";

				if($Orderp!==null) $query.=" ORDER BY $Orderp"; 
				
				$result=$conm->query($query);
						
				if ($result) 
				{
					return $result->fetchAll(PDO::FETCH_NUM);
				}
				else
				{
					return false;
				}
			}
		}
	}

?>