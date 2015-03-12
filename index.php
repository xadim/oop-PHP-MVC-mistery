<?php
  function __autoload($class_name)
  {
      include_once 'inc/class.' . $class_name . '.inc.php';
  }

  //__autoload will search for the class called
  $db = new config;

  
