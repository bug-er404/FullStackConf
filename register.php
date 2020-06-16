<?php
include ('inc/header.php');
include ('hero.php');

// Connect to database
include 'dbconnect.php';

try {
    $check = "Y";
    $uncheck = "N";
    // Create insert statements as variable
    $insert = $db->prepare("insert into registration
        (name, email, job_role, es2015, nodejs, buildtools, jslibraries, jsframeworks, cardnumber, 
        zipcode,cvv, expmonth, expyear ) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $insert->bindParam(1, $_POST['name']);
    $insert->bindParam(2, $_POST['email']);
    $insert->bindParam(3, $_POST['role']);
    if (isset($_POST['1']))
    {
        $insert->bindParam(8, $check);
    }
    else{
        $insert->bindParam(8, $uncheck);
    }
    if (isset($_POST['2']))
    {
        $insert->bindParam(7, $check);
    }
    else{
        $insert->bindParam(7, $uncheck);
    }
    if (isset($_POST['3']))
    {
        $insert->bindParam(5, $check);
    }
    else{
        $insert->bindParam(5, $uncheck);
    }
    if (isset($_POST['4']))
    {
        $insert->bindParam(6, $check);
    }
    else{
        $insert->bindParam(6, $uncheck);
    }
    if (isset($_POST['5']))
    {
        $insert->bindParam(4, $check);
    }
    else{
        $insert->bindParam(4, $uncheck);
    }
    $insert->bindParam(9, $_POST['cc-num']);
    $insert->bindParam(10, $_POST['zip']);
    $insert->bindParam(11, $_POST['cvv']);
    $insert->bindParam(12, $_POST['exp-month']);
    $insert->bindParam(13, $_POST['exp-year']);

    // Execute the insert
    $insert->execute();

    echo "Thank you for registering" . $_POST['fname'] . '<br />';

}catch (Exception $e){
    echo "Error registering!" . $e->getMessage();
}

include ('inc/footer.php');
include ('inc/endhtml.php');
?>

