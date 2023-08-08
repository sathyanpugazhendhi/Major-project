<?php
include "C://xampp//htdocs//web//app//libs//include//databaseclass.php";
class user
{
    private static $salt = "dfdsfhsdbfsdfbdsf";
    public static function signup($user, $pass, $Email, $number)
    {
        $conn = Database::getconnection();
        $pass = md5(strrev(md5($pass)) . user::$salt); // security through obsecurity. 
        $sql = "INSERT INTO `register` (`username`, `password`, `Email`, `Phone`, `blocked`,`active`)
        VALUES ('$user', '$pass', '$Email', '$number','0','1');";
        $error = false;
        if ($conn->query($sql) === TRUE) {
            $error = false;
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }

        $conn->close();
        return $error;
    }
    public static function data($name, $Case, $Caseid, $gender, $phone, $email, $location, $Crimedetail)
    {
        $conn = Database::getconnection();
        //$pass = md5(strrev(md5($pass))); // security through obsecurity. 
        $sql = "INSERT INTO `record` (`victim_name`, `case_type`, `case_id`, `gender`, `phone_number`, `email_id`, `location`, `crime_details`)
        VALUES ('$name', '$Case', '$Caseid', '$gender', '$phone', '$email', '$location', '$Crimedetail');";
        $error = false;
        if ($conn->query($sql) === TRUE) {
            $error = false;
        } else {
            //echo "Error: " . $sql . "<br>" . $conn->error;
            $error = $conn->error;
        }

        $conn->close();
        return $error;
    }
    public static function fetchdata($id)
    {

        $conn = Database::getconnection();
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $quary = "SELECT * FROM `record` WHERE `id` = '$id' LIMIT 50";
        $result = $conn->query($quary);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                return (" victim_name : " . $row["victim_name"] . "<br>" . " Case_Type : " .  $row["case_type"] . "<br>" . " Case_Id : " . $row["case_id"] . "<br>" . " Gender : " . $row["gender"] . "<br>" . " Phone_Number : " . $row["phone"] . "<br>" . " Email_Address : " . $row["Email_address"] . "<br>" . " Location : " . $row["locations"] . "<br>" . " Crime_Details : " . $row["crime_details"] . "<br>" . " Hashed_Block : " . $row["hased_block"] . "<br>" . " Proof : " . $row["proof"]);
                //return $row["id"];
            }
        } else {
            echo "0 results";
        }
        $conn->close();
    }

    public static function login($user, $pass)
    {
        $pass = md5(strrev(md5($pass)) . user::$salt);
        $quary = "SELECT * FROM `register` WHERE `email` = '$user'";
        $conn = Database::getconnection();
        $result = $conn->query($quary);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($row['password'] == $pass) {
                return $row;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
