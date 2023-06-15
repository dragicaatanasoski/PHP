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
    <title>Cas 9</title>
</head>
<body>


<?php 
if(isset($_COOKIE["ime_i_prezime"])){
    // kolaceto e setirano
    echo "kolaceto e setirano";
} else {
    // kolaceto ne e setirano
    echo "kolaceto ne e setirano";
}

session_start();
?>

</body>

</html>
























