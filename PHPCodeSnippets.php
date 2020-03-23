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

// send an email through PHP
$to = 'bob@example.com';

$subject = 'Website Change Reqest';

$headers = "From: " . strip_tags($_POST['req-email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>This is strong text</strong> while this is not.</p>';


mail($to, $subject, $message, $headers);

// sql Users Table
CREATE TABLE `userdata`.`users` ( `UserIndex` INT(4) NOT NULL AUTO_INCREMENT , `StudentId` VARCHAR(10) NOT NULL , `Password` VARCHAR(40) NOT NULL , `FirstName` VARCHAR(20) NOT NULL , `LastName` VARCHAR(20) NOT NULL , `ProfilePic` VARCHAR(13) NOT NULL , `Teacher` BOOLEAN NOT NULL , `Period1` VARCHAR(7) NOT NULL , `Period2` VARCHAR(7) NOT NULL , `Period3` VARCHAR(7) NOT NULL , `Period4` VARCHAR(7) NOT NULL , `Period5` VARCHAR(7) NOT NULL , `Activated` DOUBLE NOT NULL , `SignUpTime` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`UserIndex`)) ENGINE = InnoDB;