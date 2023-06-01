<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css">
    <link href="./dark.css">
    <title>Cas 7</title>
</head>
<body>


<?php 
// $string = "Profesorot saka da pie voda";
// $trimmedString = trim($string,'profesorot');
// echo $substring;

// $substring = substr($string, 11);
// echo $substring;



// $modifiedString = str_replace("saka da", "", $string);
// echo $modifiedString;

// $characterCount = strlen($modifiedString);
// echo $characterCount;

// $boi = array("blue", "red", 4, "green");
// $boi[4]= "violet";
// $boi[]="yellow";
// echo$boi[4];
// echo count($boi);
// echo "<hr>";


// var_dump($boi);
// echo "<hr>";
// print_r($boi);
// echo "<hr>";echo "<hr>";


// $boi_a= array("boja1"=>"blue", "boja2"=>"red", "broj1"=>4 , "boja3"=>"green");
// $boi_a["boja4"]= "violet";
// var_dump($boi_a);
// echo "<hr>";echo "<hr>";

// $elementCount = count($boi_a);
// echo $elementCount;



// $boi = array("blue", "red", 4, "green");
// $boi[4] = "violet";
// $boi[] = "yellow";
// $arr_c = count($boi);

// for ($x = 0; $x < $arr_c; $x++) {
//     echo $x;

//     echo $boi[$x];

// }
// sort($boi);


// $boi = array("blue", "red", 4, "green");
// $boi[4] = "violet";
// $boi[] = "yellow";

// sort($boi); 
// echo "<hr>";echo "<hr>";
// $arr_c = count($boi);

// for ($x = 0; $x < $arr_c; $x++) {
//     echo $x;
//     echo $boi[$x];
// }

// foreach ($boi as $key => $value) {
//     echo $key . " - ";
//     echo $value."<br>";
    
// }



// $ceu = array(
//     "Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels",
//     "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris",
//     "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin",
//     "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam",
//     "Portugal" => "Lisbon", "Spain" => "Madrid", "Sweden" => "Stockholm",
//     "United Kingdom" => "London", "Cyprus" => "Nicosia", "Lithuania" => "Vilnius",
//     "Czech Republic" => "Prague", "Estonia" => "Tallin", "Hungary" => "Budapest",
//     "Latvia" => "Riga", "Malta" => "Valetta", "Austria" => "Vienna", "Poland" => "Warsaw"
// );

// asort($ceu); 

// foreach ($ceu as $country => $capital) {
//     echo "The capital of " . $country . " is " . $capital . "<br>";
// }


// $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
// sort($temperatures);

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

asort($temperatures); 

$lowestTemperatures = array(60, 62, 63, 63, 64,);
$highestTemperatures = array(76, 78, 79, 81, 85);

$i = 0;
for ($i = 0; $i < count($temperatures); $i++) {
    if ($i < 5) {
        $lowestTemperatures[] = $temperatures[$i];
    }
    if ($i >= count($temperatures) - 5) {
        $highestTemperatures[] = $temperatures[$i];
    }
}

echo "Najniski 5 izmereni temperaturi: " . implode(", ", $lowestTemperatures) . "<br>";
echo "Najvisoki 5 izmereni temperaturi: " . implode(", ", $highestTemperatures);




?>

</body>

</html>


<!-- php arrays 

1.Indexed arrays
2.Associative arrays
3.Multidimensional arrays








-->





















