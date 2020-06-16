<?php
/* Database details you created in cpanel */
try {
    $db = new PDO("mysql:host=localhost; dbname=fall19_class;port=3336",
        "fall19_admin", "!Deree2019#");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (Exception $e) {
   echo "Error connecting to database! Call admin!!!";
}