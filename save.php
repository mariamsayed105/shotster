<?php
if (isset($_POST['submit'])) {
    $name = $_POST["Sname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $add = $_POST["addr"];
    $gen = $_POST["gender"];
    $conn = mysqli_connect("localhost", "root", "", "database_form") or die("connection failed");
    $sql = "INSERT INTO database_table(Sname, email, age, phone, addr, gender) VALUES ('{$name}','{$email}','{$age}','{$phone}','{$add}','{$gen}')";
    $result = mysqli_query($conn, $sql) or die("query failed!");
    header("location: http://localhost/database/form.php");
    mysqli_close($conn);
}?>