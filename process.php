<?php
$date = filter_input(INPUT_POST, 'date');
$timezoneid = filter_input(INPUT_POST, 'timezoneid');
$slot = filter_input(INPUT_POST, 'slot');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$countryCode = filter_input(INPUT_POST, 'countryCode');
$phonenumber = filter_input(INPUT_POST, 'phonenumber');
$age = filter_input(INPUT_POST, 'age');
$gender = filter_input(INPUT_POST, 'gender');
$optional = filter_input(INPUT_POST, 'optional');
$opt = filter_input(INPUT_POST, 'opt');
if (!empty($date) || !empty($timezoneId) || !empty($slot) || empty($name) || !empty($email)){

$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "appointment";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO booking (date, timezoneid, slot, name, email, countryCode, phonenumber, age, gender,optional, opt )

values ('$date','$timezoneid','$slot','$name','$email', '$countryCode', '$phonenumber', '$age', '$gender', '$optional', '$opt')";
if ($conn->query($sql)){
header("Location: payment.html");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "please enter your name , email, date and timeslot with timezone";
die();
}
