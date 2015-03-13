<?php

include "init.php";

class data_delete
{
	//Variable for MySql connection
	private $hookup;
	private $sql;
	private $tableMaster;
 
	//Field Variables
	private $id;

	public function __construct()
	{
        $this->tableMaster="applicants";
	    $this->hookup=Database::obtain();
 
	    $this->id=$_GET['delete'];
	    $this->doDelete();
	    $this->hookup->close();
	}
 
	private function doDelete()
	{
		$this->sql = "DELETE FROM $this->tableMaster WHERE id like $this->id";

		try
		{	
			$this->hookup->query($this->sql);
				header('Location: ../index.php?delete='.$this->id);
		}
 
		catch (Exception $e)
		{
			echo "There is a problem: " . $e->getMessage();
			exit();
		}
	}
}

$obj = new data_delete;
 
$obj->doDelete();
