<?php
define ('SITE_ROOT',    realpath(dirname(__FILE__)));
function __autoload($class_name)
  {
      include_once SITE_ROOT . '/class.' . $class_name . '.inc.php';
  }
    require("config.inc.php");
    require 'config.php';
    $db = Database::obtain(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    // connect to the server
    $db->connect();
    // get the already existing instance of the $db object
    mysql_query("SET NAMES 'utf8'");
