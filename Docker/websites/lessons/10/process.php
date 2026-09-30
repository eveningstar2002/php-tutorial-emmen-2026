<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error report</title>
    <style>
        p.error {
            color:red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

var_dump($_POST);
/*
if (! isset($_POST["name2"])) {
    die("name2 is required");
}*/

$errors = [];

// the conditional and will not evaluate the second part if $_POST["name] does not exist
if (isset($_POST["name"]) && strlen($_POST["name"]) === 0) {
    $errors[] = "You must enter a name";
}
else {
    //will make sure no malicious characters are present
    $name = htmlspecialchars($_POST["name"]);
}

if (strlen($_POST["surname"]) === 0) {
    $errors[] = "You must enter a surname";
}

if (count($errors) !== 0) {
    echo "<P>You have errors</P>";

    foreach($errors as $error) {
        echo "<P class='error'>" . $error . "</P>";
    }

}
else {
    echo "<p>Thank you $name!</p>";
}

?>
</body>
</html>

