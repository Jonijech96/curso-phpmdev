<?php 
const API_URL = "https://whenisthenextmcufilm.com/api";
  // INICIALIZAR UNA NUEVA SESSION DE cURL; ch = cURL handle


  $ch = curl_init(API_URL);
  #indicar que queremos  recibir el resultado de la peticion y no mostrarlo en pantalla
  curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
  /* Ejecutar la peticion y guardamos el resultado */
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);
// var_dump($data)

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
/>
  <title>La proxima pelicula de Marvel</title>
</head>
<body>
  <main>
    <!-- <pre style="font-size: 8px; overflow:scroll; height: 250px;"> -->
     <?php //var_dump($data); ?> 
  <!-- </pre> -->
  <section>
    <img src="<?= $data["poster_url"]; ?>" width="300"  alt="Poster de <?= $data["title"]?>">
  </section>
  <hgroup>
    <h3><?= $data["title"];?> se estrena en <?= $data["days_until"];?> dias</h3>
    <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
    <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
  </hgroup>
  </main>
</body>
</html>
<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
  section {
    display: grid;
    place-content: center;
  }
  h3, p {
    text-align: center;
  }
</style>