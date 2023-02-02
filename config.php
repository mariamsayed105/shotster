<?php
$email = $_POST["email"];
$userid = $_POST["userid"];
$username = $_POST["username"];
$passw = $_POST["passw"];
$conn = mysqli_connect("localhost", "root", "", "shotster") or die("connection failed");