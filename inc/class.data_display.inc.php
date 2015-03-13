<?php
class data_display
{
	//Variable for MySql connection
	public $rows = array();
	public $sql;
	public $tableMaster;
 
	public function __construct()
	{
	    $this->tableMaster="applicants";
	    $this->doDisplay();
	}
 
	public function doDisplay()
	{
            //Create Query Statement
	    $this->sql ="SELECT * FROM $this->tableMaster";
 		$rows = array();

		$result = mysql_query($this->sql);
		while ($row = mysql_fetch_array($result)) 
		{
			$rows[] = $row;
			//print_r($rows);
		}
 
		return $rows;
	}

	public function do_display($id)
	{
            //Create Query Statement
	    $this->sql ="SELECT * FROM $this->tableMaster where id = $id";
 		$rows = array();

		$result = mysql_query($this->sql);
		while ($row = mysql_fetch_array($result)) 
		{
			$rows[] = $row;
			//print_r($rows);
		}
 
		return $rows;
	}
}


