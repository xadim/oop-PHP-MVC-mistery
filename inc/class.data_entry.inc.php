<?php


class data_entry
{
	//Variable for MySql connection
	private $hookup;
	private $sql;
	private $tableMaster;
 
	//Field Variables
	private $name;
	private $attacks;
	private $lang;

	public function __construct()
	{
	    //Get table name and make connection
        $this->tableMaster="applicants";
	    $this->hookup=Database::obtain();
 
	    //Get data from HTML form
	    $this->name=$_POST['name'];
	    $this->email=$_POST['attacks'];
	    $this->lang=$_POST['health'];
	    $this->damage=$_POST['damage'];
 
	    //Call private methods for MySql operations
	    $this->doInsert();
	    $this->hookup->close();
	}
 
	private function doInsert()
	{
		$this->sql = "INSERT INTO $this->tableMaster (name,attacks,health,damage) VALUES ('$this->name','$this->attacks', '$this->health', '$this->damage')";
 
		try
		{	
			$this->hookup->query($this->sql);
				header('Location: ../index.php?insert=success');
		}
 
		catch (Exception $e)
		{
			echo "There is a problem: " . $e->getMessage();
			exit();
		}
	}
}