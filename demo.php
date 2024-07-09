<?php
    $name = "Rodwin";
    $is_Dev = true;
    $age = 76;
   

   
 // variables globales con palabra define
 define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');

 $output = "hola $name, con una edad de $age.🤯 ";

$output = match (true){
    $age < 2    => "Eres un bebé, $name",
    $age < 10   => "Eres un niño, $name",
    $age < 18   => "Eres un adolescente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age < 40   => "Eres un adulto joven, $name",
    $age < 60   => "Eres un adulto viejo, $name",
    default     => "Hueles más a madera que a fruta, $name"
};


$bestLanguages =["PHP", "JavaScript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";
?>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li><?= $key . " " .$language ?></li>
        <?php endforeach; ?>
</ul>
   

    <!-- <h2><?= $outputAge ?></h2> -->

 
<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">

<h1>
    <?= $output ?>
</h1>


<h1>
    <?="!Hola Mundo!";?>
</h1>


<main>
    <h2>La próxima película de Marvel</h2>
</main>



<style>
    :root {
        color-scheme: light dark;
    }

    body{
        display: grid;
        place-content: center;
    }
</style>


