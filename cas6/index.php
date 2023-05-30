<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css">
    <link href="./dark.css">
    <title>Cas 6</title>
</head>
<body>


<?php 


function parni_broevi(){
    for ($i = 0; $i<100; $i+=2) {
        echo $i.'<br>';
    }
}

parni_broevi();


function parni_broevi_u($until){
    for ($i = 0; $i<=$until; $i+=2) {
        echo $i.', ';
    }
}

parni_broevi_u(60);


function proizvodnabroevi($broj, $broj2){
    $proizvod = $broj * $broj2;
    echo $proizvod;
}


proizvodnabroevi(5 ,7);
// $x =0;
// while($x < 10) {
// echo $x. "</br>";
// $x++;
// }


// echo "<hr>";
// echo "do while example";
// echo "<hr>";

// do {
// echo $x."</br>";
// $x++;
// } while ($x < 10);



// echo "<hr>";
// echo "for example";
// echo "<hr>";


// for($x=0; $x<10; $x++){
//     echo $x. "</br>";
// }


// $brojki = array("eden", "dva","tri","cetri","pet");

// foreach($brojki as $val){
//     echo $val. "</br>";
// }

// for($x=0; $x<10; $x++){
//     if($x==7);{
//         break;
//     }
//     echo $x. "</br>";
// }

// echo "<hr>";
// echo "continue example";
// echo "<hr>";

// for($x=0; $x<10; $x++){
//     if($x==7);{
//         continue;
//     }
//     echo $x. "</br>";
// }


// for ($i = 1; $i <= 10; $i++) {
//     echo $i . "</br>";
// }

// echo "Parni broevi";
// for ($i = 2; $i <= 100; $i += 2) {
//     echo $i . "</br> ";
// }

// echo "Neparni broevi";
// for ($i = 1; $i <= 100; $i += 2) {
//     echo $i . "</br> ";
// }



?>




<!-- // switch($date){
//     case "Thursday":
//         echo "Денес е четврток";
//         break;
//         case "Friday":
//             echo "Денес е петок";
//             break;
//             case "Saturday":
//             echo "Денес е сабота";

            
//             default :
//             echo "not defined";
// }


// echo date ('H')

// $time = date ("H");

// if ($time >18 && $time <6){

//     echo "Добра вечер";
// }
// elseif($time >= 6 && 6 $time)

//     $hour = date('H');
//     if ($hour >= 6 && $hour < 20) {
//         echo '<link rel="stylesheet" type="text/css" href="light.css">';
//     } else {
//         echo '<link rel="stylesheet" type="text/css" href="dark.css">';
//     }


// -->
<!-- PHP Loops

// while Loop

// while (uslov - true){
//     code logic
// }

do {

} while (uslov -true)

PHP for loop

for(initialisation; condition ; increment );

PHP foreach loop

foreach($arr ad  $val){
    code.logic
}




//  Imame dva css fajla edniot e light_css drugiot e dark css,sakame da go vcitame light.css pomegju 6i 20 casot  a pomegju 20 i 6 da go vrsime dark -->

 <!-- Ako e den da go isprinta momentalnoto vreme so crni bukvi i bela pozadina,ako e nok da go isprinta vremeto i datumot so crna pozadina i beli bukvi. -->







</body>

</html>






















