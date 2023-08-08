<?php

if (empty($_POST["victim_name"])) {
    die("Name is required");
}
if (empty($_POST["case_type"])) {
    die("case type is required");
}
if (empty($_POST["case_id"])) {
    die("case id is required");
}
if (empty($_POST["gender"])) {
    die("gender is required");
}
if (empty($_POST["phone"])) {
    die("phone number is required");
}
if (empty($_POST["Email_address"])) {
    die("Email id is required");
}
if (empty($_POST["locations"])) {
    die("location is required");
}
if (empty($_POST["crime_details"])) {
    die("crime details is required");
}


$mysqli = require __DIR__ . "/dbcrime.php";

$sql = "INSERT INTO record (victim_name, case_type, case_id,
gender, phone, Email_address, locations, crime_details)
values(?, ?, ?, ?, ?, ?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssisisss",
                  $_POST["victim_name"],
                  $_POST["case_type"],
                  $_POST["case_id"],
                  $_POST["gender"],
                  $_POST["phone"],
                  $_POST["Email_address"],
                  $_POST["locations"],
                  $_POST["crime_details"],
                  );
                  
if ($stmt->execute()) {
    header("Location: createdata.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("email already taken");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}
$result = exec("python C://xampp//htdocs//web//app//libs//include//crime.py");
echo $result;
$result_array = json_decode($result);
foreach ($result_array as $row) {
    echo $row . "<br>";
}
?>