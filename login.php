<?php
session_start();
include 'dbh.php';

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE user_uid='$uid' AND user_pwd='$pwd'";
$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
  echo "Username or password incorrect";
} else {
  $_SESSION['user_id'] = $row['user_id'];
}
header("Location: index.php");
