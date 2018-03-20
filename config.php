<?php
error_reporting(0);
define("HOSTNAME","localhost");
define("USER","root");
define("PASSWORD","");
define("DATABASE","the_blood_aadhaar");
mysql_connect(HOSTNAME,USER,PASSWORD) or die();
mysql_select_db(DATABASE);
?>