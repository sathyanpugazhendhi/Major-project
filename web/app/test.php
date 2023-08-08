<pre>
<?php
include 'libs/load.php';
/*print("_SERVER \n");
print_r($_SERVER);
print("_GET \n");
print_r($_GET);
print("_POST \n");
print_r($_POST);
print("_FILES \n");
print_r($_FILES);
print("_SESSION \n");
print($_SESSION);
print("_COOKIE \n");
print_r($_COOKIE);

if (signup("tamilselvan", "password", "srbktsmil@gmail.com", "1234567890")) {
    echo "Success";
} else {
    echo "fail";
}
*/

$mic1 = new Mic("tamil");
$mic2 = new Mic("Jeeva");

//$mic1->brand = "tamil";
//$mic2->brand = "Jeeva";
$mic1->light = "RCB";
$mic1->setlight("white");

$mic1->setmodel("lp");

print("this is the model of mic1 " . $mic1->getproxy() . "\n");

print($mic1->model);

print($mic1->getbrand());
print($mic2->getbrand());


?>


</pre>