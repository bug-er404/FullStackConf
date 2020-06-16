<?php
/* Step 1: Connect to database */
include 'dbconnect.php';
/* Step 2: Create a query */
$query = $db->query("select firstname, lastname, email from registration");
/* Step 3: Execute the query that returns the results in an ARRAY*/
$regArray = $query->fetchAll(PDO::FETCH_ASSOC);
/* Loop through the Array to display the data */
foreach ($regArray as $person) {
    echo $person["email"] . '<br>';
}