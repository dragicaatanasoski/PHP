<?php 
setcookie("ime_I_prezime", "Dime Vakanski",time()+ 60 * 60 * 24 , "/", "", 0)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css">
    <link href="./dark.css">
    <title>Cas 10</title>
</head>
<body>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedColor = $_POST['color'];

    // Redirect to the selected color file
    header("Location: $selectedColor.php");
    exit();
}
?>

<form method="POST" action="">
    <label for="color">Select a color:</label>
    <select name="color" id="color">
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="green">Green</option>
    </select>
    <input type="submit" value="Go">
</form>

</body>

</html>

session_start();






















