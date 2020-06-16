<?php
/*Step 1: Connect to database */
include 'dbconnect.php';

try {
    /*Step 2: create the insert statements using ? as variables */
    $insert = $db->prepare("insert into registration (firstname, lastname, email) 
                                      values (?,?,?)");
    /* Step 3: Replace each ? with a value */
    $insert->bindParam(1, $_POST['fname']);
    $insert->bindParam(2, $_POST['lname']);
    $insert->bindParam(3, $_POST['email']);
    /* Step 4: Execute the insert */
    $insert->execute();

    echo "Dear, " . $_POST['fname'] . "&nbsp;" . $_POST['lname'] . '</br>';
    echo "email " . $_POST['email'] . '</br>';
    echo "Thank you for registering!";
} catch (Exception $e) {
    echo "Error registering user: " . $e->getMessage();
}