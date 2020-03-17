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

//
