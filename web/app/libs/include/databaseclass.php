<?php
class Database
{
    public static $conn = null;
    public static function getconnection()
    {
        if (Database::$conn == null) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "crime_db";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } else {
                Database::$conn = $conn;
                return Database::$conn;
            }
        } else {
            return Database::$conn;
        }
    }
}
