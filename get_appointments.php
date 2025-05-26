<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "barangay_clinic";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die(json_encode(["error" => "Connection failed"]));
}

$sql = "SELECT name, ref_no_date, complaint, status FROM appointments";
$result = $conn->query($sql);

$appointments = [];

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $appointments[] = $row;
  }
}

header('Content-Type: application/json');
echo json_encode($appointments);
$conn->close();
?>
