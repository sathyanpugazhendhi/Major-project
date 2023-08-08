<pre>
<?php

//session_start();
//setcookie("testcookie", "Testvalue", time() + (86400 * 80), "/");
include 'libs/load.php';
print("_SESSION \n");
print($_SESSION . "\n");
print("_SERVER \n");
print_r($_SERVER);

if (isset($_GET['clear'])) {
    printf("clearing..\n");
    session_unset();
}
if (Session::isset('a')) {
    printf("A already exist...Value:" . Session::get('a') . "\n");
} else {
    Session::set('a', time());
    printf("Assigning new value...Value:$_SESSION[a]\n");
}
if (isset($_GET['destroy'])) {
    printf("Destroying..\n");
    Session::destroy();
}

?>
</pre>