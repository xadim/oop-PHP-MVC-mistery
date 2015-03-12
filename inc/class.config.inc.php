<?php

Class confi{
	/**
	*Connexion class
	*/
  private $host;  
  private $username;
  private $password;
  private $database;
  private $conn;  // Adding the connection, more on this later.

  public function __Construct($set_host, $set_username, $set_password){
    $this->host = $set_host;
    $this->username = $set_username;
    $this->password = $set_password;
    /**
	* Combining the connection & connection check using 'or'
    * Notice that I removed the semi-colon after the mysql_connect function
    */
    $this->conn = mysql_connect($this->host, $this->username, $this->password)
                  or die("Couldn't connect");
  }

  public function Database($set_database)
  {   
    $this->database=$set_database;
    /**
	* Adding the connection to the function allows you to have multiple 
    * different connections at the same time.  Without it, it would use
    * the most recent connection.
    */
    mysql_select_db($this->database, $this->conn) or die("cannot select Dataabase");
  }

  public function Fetch($table_name){
    /**
	* Adding the connection to the function and return the result object instead
	*/
    return mysql_query("SELECT * FROM ".$table_name, $this->conn);         
  }
}