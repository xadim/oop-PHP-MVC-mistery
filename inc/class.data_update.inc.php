<?php

include "init.php";

class data_update
{
   private $hookup;
   private $tableMaster;
   private $sql;
   //Fields
   private $id;
   private $name;
   private $attacks;
   private $health;
   private $damage;
 
   public function __construct()
   {
      $this->id=intval($_POST['id']);
      $this->name=$_POST['name'];
       $this->email=$_POST['attacks'];
       $this->lang=$_POST['health'];
       $this->damage=$_POST['damage'];
 
      $this->tableMaster="applicants";
      $this->hookup=Database::obtain();
 
       //Call each update
      $this->do_update();
 
	//Close once
      $this->hookup->close();
   }
 
   private function do_update()
   {
      $this->sql ="UPDATE $this->tableMaster SET name='$this->name', health='$this->health', attacks='$this->attacks', damage='$this->damage' WHERE id='$this->id'";
      try
      {
	 $result = $this->hookup->query($this->sql);
      	 header('Location: ../index.php?updated='.$this->id);
      }
      catch(Exception $e)
      {
	 echo "Here's what went wrong: " . $e->getMessage();
      } 
   }
}

$obj = new data_update;
 
