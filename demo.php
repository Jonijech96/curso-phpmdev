<?php
// php es dinamico,  debil y gradual
$name = "Jonathan";
$age = 10;
$newAge = $age . 2;
$isDev = true;
echo gettype($age);
var_dump($newAge);
echo is_string($newAge);
//Constantes se pueden usar pero recomendados en ficheros
define('LOGO_URL',12);
const NOMBRE = 'Miguel';
$outputAge = match (true) {
   $age < 12 => "eres un 12",
   $age == 14 => "eres un 14",
   $age > 14 => "eres mayor a 14",
};
$bestLanguages = ["php","javascript","python",1,2];
$bestLanguages[3] = "Java";
$bestLanguages[] = "typescrit";
/*  forma corta de php echo => <?= 'Mi primera app'; ?> */
//echo "Hola " . $name;
// \$ usando contrabarra se ignora para usarla como cadena de texto
// php -S localhost:8000
$person = [
  "name" => "Miguel",
  "age" => 78,
  "isDev" => true,
  "languages" => ["php","javascript","python"],
]
?>
<h1>
  <?= "Hola \"" . $name ."\""; ?>


</h1>
<h2><?= $outputAge?></h2>
<ul>
  <?php foreach ($bestLanguages as $key => $language) :   ?>
    <li> <?= $key . " ". $language ?> </li>
    <?php endforeach ?>
</ul>
<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>