<?php

if(isset($_POST['fruit'])) {

    $setvar = $_POST['fruit'];
    switch ($setvar) {
        case "apple":
            echo "You said " . $setvar;
            echo "<img src='img/apple.png'>";
            break;
        case "banana":
            echo "You said " . $setvar;
            echo "<img src='img/banana.png'>";
            break;
        case "orange":
            echo "You said " . $setvar;
            echo "<img src='img/orange.png'>";
            break;
        default:
            echo "";
            break;
    }
} else {
    echo "Say: orange, banana, apple.";
}

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>test</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post">
    <input type="radio" onchange="this.form.submit()" name="fruit" value="banana"> Banana<br>
    <input type="radio" onchange="this.form.submit()" name="fruit" value="orange"> Orange<br>
    <input type="radio" onchange="this.form.submit()" name="fruit" value="apple"> Apple<br>
</form>
<h2>Gemaakt door Simon Boerrigter</h2>
</body>
</html>