<?php



class data_fight
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
      $arr_name = array();

      $result = mysql_query($this->sql);
      while ($row = mysql_fetch_array($result)) 
      {
         $rows[] = $row;
      }
 
      return $rows;
   }

}

$data = new data_fight;
$display = $data->doDisplay();

$arr_name = array();
$arr_health = array();
$arr_damage = array();
$arr_attacks = array();

for ($i=0; $i < count($display); $i++) { 
  $arr_name = $display[$i]['name'];
}
for ($i=0; $i < count($display); $i++) { 
  $arr_health = $display[$i]['health'];
}
for ($i=0; $i < count($display); $i++) { 
  $arr_damage = $display[$i]['damage'];
}
for ($i=0; $i < count($display); $i++) { 
  $arr_attacks = $display[$i]['attacks'];
}


interface vitals
{
    public function fight($arr_name, $arr_attacks,$arr_health, $arr_damage, $arr_attacks);
}

class fight implements vitals
{
  var $arr_name = array();
    var $arr_health = array();
    var $arr_damage = array();
    var $arr_attacks = array();

   public function fight($arr_name, $arr_attacks,$arr_health,$arr_damage, $arr_attacks)
   {
      $candidate = $name;
      for($shot=0;$shot<=$ammo;$shot++)
      {
          $target->ReduceHealth($damage);
          if(!$target->IsAlive())
          {
              break;
          }
          $clip--; //Reduce ammo in clip.
      }
   }
}





























