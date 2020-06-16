<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> Search for registered users</h1>
<form action="#" method="get">
    <input type="text" name="lname" id="lname">
    <input type="submit" value="search">
</form>

<?php
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    return $data;
}
// filter_var($_GET['lname'], FILTER_SANITIZE_STRING);
echo "SAN" . sanitize($_GET['lname']) . "<br>";
$_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
$lname=sanitize($_GET['lname']);


echo $lname . "<br>";
if (count($_GET) > 0) {
    if (strlen($lname) > 2) {
        include 'dbconnect.php';
        $query = $db->prepare("select firstname, lastname, email from registration
                                where lastname like ?");
        /* Step 3: Replace each ? with a value */
        $searchfor = "%" . $lname . "%";
        $query->bindParam(1, $searchfor);
        $query->execute();
        $searchresults = $query->fetchAll(PDO::FETCH_ASSOC);
        if (count($searchresults)==0)
            echo $lname . " not found! Try again";
        foreach ($searchresults as $person) {
            echo $person["email"] . '<br>';
        }
        }
        else {
            echo "Search criteria should be more than 2 characters!";}
}

?>
</body>
</html>
