<?php
//include_once 'include/Session.class.php';
include_once 'C://xampp//htdocs//web//app//libs//include//micclass.php';
include_once 'C://xampp//htdocs//web//app//libs//include//userclass.php';
include_once 'C://xampp//htdocs//web//app//libs//include//databaseclass.php';

//Session::start();
function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT'] . "//web//app//_templates//$name.php";
}

function credentials_validator($Email, $password)
{
    //print("credentials_validator()");
    $user = $_POST["Email_address"];
    $pass = $_POST["password"];
    $result = user::login($user, $pass);
    if ($result) {
        return true;
    } else {
        return false;
    }
}
