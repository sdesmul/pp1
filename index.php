<?php
/**
 * Created by PhpStorm.
 * User: samantha
 * Date: 4/3/2019
 * Time: 2:13 PM
 */
//function that prints out all the items in an array
function printArr($items){
    foreach ($items as $item){
        echo $item . "<br>";

    }
}
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
printArr($numbers);
?>

</body>
</html>
