<?php

require "environment.php";
global $config;
$config = array();
if (ENVIRONMENT == "development") {
  $config["dbname"] = "calendar";
  $config["host"] = "localhost";
  $config["charset"] = "utf8";
  $config["dbuser"] = "root";
  $config["dbpass"] = "";
  define("BASE_URL","http://localhost/myfullcalendar");
} else {
  $config["dbname"] = "banco_dados";
  $config["host"] = "localhost";
  $config["charset"] = "utf8";
  $config["dbuser"] = "root";
  $config["dbpass"] = "";
  define("BASE_URL","http://www.mycalendar.com.br");
}
?>