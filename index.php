
<?php 

const API_URL = "https://whenisthenextmcufilm.com/api";
#inicializar una nueva sesion de curl ; ch = cURL handle
$ch = curl_init(API_URL);
// Indicar si queremos recibir el resultado de la peticion y no mostrar en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*
Ejecutar la petición
    y guardamos el resultado
*/
$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);


?>

<head>
    <meta charset="UTF-8"/>
    <title>La Próxima Película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>
<main>
    <!-- <pre style="font-size: 8px; overflow:scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre> -->
    <section>
        <img src="<?= $data["poster_url"]; ?> "width="300" alt="poster de <?= $data ?>"
        style="border-radius:16px;">
    </section> 
   
    <hgroup>
        <h3> <?=$data["title"]; ?> Se estrena en <?= $data["days_until"];?> días</h3>
        <p> Fecha de Estreno; <?= $data["release_date"];?></p>
        <p>La siguiente es:<?= $data["following_production"]["title"];?></p>
    </hgroup>
</main>

<style>
    :root{
        color-scheme: ligth dark;
    }
    body{
        display: grid ;
        place-content: center;
    }
    section{
        display: flex;
        justify-content: center;
        text-align: center;
    }
    hgroup{
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }
    img{
        margin: 0 auto;
    }
   