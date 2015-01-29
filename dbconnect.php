<?php
$dbHost = "silo.cs.indiana.edu";
$dbUserAndName = "b561f13_ggomatom";
$dbPass = "my+sql=b561f13_ggomatom";

$_TABLE_NAME = "Events";
$_EVENT_ID = "eid";
$_EVENT_NAME = "name";
$_UPPER_LIMIT = "upperlimit";
$_LOWER_LIMIT = "lowerlimit";
$_START_TIME = "start_time";
$_END_TIME = "end_time";
$_CATEGORY = "category";
$_OWNER = "owner";
$_DES="description";
$_nreg="number_register_users";

mysql_connect ($dbHost, $dbUserAndName, $dbPass) or die ("Cannot connect to host $dbHost with user $dbUserAndName and the password provided.");
mysql_select_db ($dbUserAndName) or die ("Database $dbUserAndName not found on host $dbHost");;


?>

