<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_All);
/**
 * Created by PhpStorm.
 * User: samantha
 * Date: 4/3/2019
 * Time: 2:13 PM
 */
include("functions.php");
//array to be printed
$numbers=array(7,9,8,9,8,8,6);


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair program</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
echo "Print the array: <br>";
printArr($numbers);

$large = largest($numbers);
echo "This is the largest:";
echo $large;

echo "<br> this is the average:";
$averages= average($numbers);
echo $averages;

echo"<br> removed the duplicates from the array: ";
$noDuplicates = removeDups($numbers);
echo print_r($noDuplicates);

echo "<br> number of times a number shows up in the array: ";
$distributionNum= distribution($numbers);
echo print_r($distributionNum);
?>

</body>
</html>
