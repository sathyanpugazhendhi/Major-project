<?php
$Email = $_POST["Email_address"];
$password = $_POST["password"];

$servername = "mysql.selfmade.ninja";
$username = "Tamilselvan123";
$password = "Tamil123@.";
$dbname = "Tamilselvan123_newdata";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("select * from register where email=?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            echo "<h2>Login Success</h2>";
        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or Password</h2>";
    }
}
