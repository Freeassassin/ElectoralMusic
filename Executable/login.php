<?php
require 'db.php';

//$sql = "INSERT INTO `users` (`UserIndex`, `StudentId`, `Password`, `FirstName`, `LastName`, `ProfilePic`, `Teacher`, `Period1`, `Period2`, `Period3`, `Period4`, `Period5`) VALUES (NULL, '349678631', '1234', 'Farbod', 'Mohammadzadeh', 'pfp.png', '0', 'ICS3U1', 'MCR3U1', 'Lunch', 'BAF3M1', 'SPH3U1')";

//$query = mysqli_query($conn,$sql);

$to = 'farbodemzadeh@gmail.com';

$subject = 'Website Change Reqest';

$headers = "From: \r\n";
$headers .= "Reply-To: \r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = '<p><strong>This is strong text</strong> while this is not.</p>';


mail($to, $subject, $message, $headers);