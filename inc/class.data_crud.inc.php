<?php

include "init.php";

class data_crud
{
        //Variable to select the correct class
    private $task;

        //Which submit button used?
    public function __construct()
    {
        if(isset($_POST['insert']))
        {
            unset($_POST['insert']);
            $this->task= new data_entry();   
        }
        elseif(isset($_POST['all']))
        {
            unset($_POST['all']);
            $this->task= new data_display();
        } 
        elseif(isset($_POST['update']))
        {
            unset($_POST['update']);
            $this->task= new data_update();
        }
        elseif(isset($_GET['delete']))
        {
            unset($_GET['delete']);
            $this->task= new data_delete();
        } 
    }   
}
$worker = new data_crud();
