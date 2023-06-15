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
$ime = $_SESSION["Dragica"];
$omilena_boja = $SESSION["Red"];
?>

</body>

</html>

session_start();






















