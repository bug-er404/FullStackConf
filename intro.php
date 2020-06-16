<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>contact us</title>
</head>
<body>
 <h1> contact us</h1>
<p> dasdsa</p>

 <?php

    echo "<h2> Hello, World from php </h2>";
    $int_num = 1;
    $double_num = 0.25;
    $string_var = 'Maira';
    $string_var{1}="o"; //Change the second character of the string
    echo $string_var . "<br>";

    $names = array("Chris", "Mike", "Amy", "Jane", 4, TRUE);
    print_r($names); //displays the contents of an array for debugging
    echo "<br>";

    for ($i=0; $i<count($names);$i++) {
        echo $names[$i] . "<br>";
    }

    $bool_var = TRUE;

    echo "The type of variable int_num is " . gettype($int_num);
    echo "<br>";
    echo "The type of variable double_num is " . gettype($double_num);
    echo "<br>";
    echo "The type of variable string_var is " . gettype($string_var);
    echo "<br>";
     echo "The type of variable bool_var is " . gettype($bool_var);
     echo "<br>";
 echo var_dump($double_num);
 echo "<br>";
 ?>

</body>
</html>