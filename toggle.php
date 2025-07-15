<?php
include("config.php");

$id = $_GET['id'];

// Get current status
$result = mysqli_query($con, "SELECT status FROM users WHERE id = $id");
$row = mysqli_fetch_assoc($result);
$newStatus = $row['status'] ? 0 : 1;

// Update status
mysqli_query($con, "UPDATE users SET status = $newStatus WHERE id = $id");

echo $newStatus;
?>