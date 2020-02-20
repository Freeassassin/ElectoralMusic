<?php
// connect to a data base
$db = new mysqli("db761161831.hosting-data.io", "dbo761161831", "Farbod81@com", "db761161831");

// get coockie value and get rid of theri html characters
$threadid = stripslashes(htmlspecialchars($_GET['ThreadId']));
$username = stripslashes(htmlspecialchars($_GET['username']));

// quary a database *with secuity?*
$result = $db->prepare("SELECT * FROM `messafes` WHERE threadID=? ORDER BY id ASC");
$result->bind_param("s",$threadid);
$result->execute();
$result = $result->get_result();

// a loop to check all the messages in the database and format them
while ($r = $result->fetch_row()){}

//


//
