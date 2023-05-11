<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cas 3</title>
</head>
<body>
    <h1>ova e naslov preku html</h1>
   <h1> <?php 
   $text = "Ova e naslov na vest";
   $y = 30;
   $x = 5;
   $zbir = $x + $y;
   $t = 101.5;
   echo $text;  


?> </h1>

<?php 


// single line comment

#

/*
ahggdkghd
*/

//VARIABLES 

?>
<?php echo "<h1>Data Types</h1>";
$string ="Ova e string";
echo"<h3>".$string . "</h3>";

var_dump($string);

$integer =238;
echo"<h3>".$integer . "</h3>";
var_dump($integer);

$float =238.238;
echo"<h3>".$float . "</h3>";
var_dump($float);

$t= true;
$n = false;
echo "t = " . $t;
echo "</br>n=" . $n;
var_dump($t);
var_dump($n);

echo"<h3>Array (nize)</h3>";
$array= array("Kuce", "Mace" , "Kokoska" , 4 , true);
echo "</br>";
echo "</br>";
var_dump($array);

echo "<h3>Object</h3>";

class Kniga {
    public $ime;
    public $avtor;
    
    public function __construct($ime , $avtor){
        $this-> ime =$ime;
        $this-> avtor=$avtor;
    }
    public function printajkniga(){
        return $this->ime."e napisana od". $this->avtor;
    }
}

$kniga1 = new Kniga("Zlostorstvo i Kazna", "Tolstoj");
echo $kniga1 -> printajkniga();

$kniga2 = new Kniga("Alehemicarot", "Koeljo");
echo $kniga2 -> printajkniga();


// var_dump ($kniga1);

define("DB_USERNAME_CONFIG", "dimev");
echo DB_USERNAME_CONFIG;
echo"</br>";
echo"</br>";
function konstanti(){
    echo "Od funkcijata";
    echo DB_USERNAME_CONFIG;
}
konstanti();
?>

<!-- define(string$name , mixed $value[,bool $case_insensitive]) -->




</body>

</html>


<!-- Scopes

Local
Global
Static


global keyword




















-->

