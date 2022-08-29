<?php
$serverName = 'localhost';
$userName = 'root';
$userPassword = '';
$databaseName = 'milan';

$conn = new mysqli($serverName, $userName, $userPassword, $databaseName);
if ($conn->connect_error) {
    die("Failed to connect ".$conn->connect_error);
}

$stmt = $conn->prepare(
    "SELECT * FROM `user`WHERE `user_id` = ?"
);
$userId = 2;
// $userName = 'milan';
// $userQualification = 'BE';
// $userAddress = 'Nawalparasi';
// $stmt->bind_param("sss", $userName, $userQualification, $userAddress);
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$arr = array();
while ($row = mysqli_fetch_assoc($result))
{
    array_push($arr, $row);
}
// $passRst = $result->fetch_assoc();
// print_r($passRst);
print_r($arr);

?>