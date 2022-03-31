<?php

require 'vendor/autoload.php';
// composer dumpautoload (Atualiza as classes inseridas no composer.json em autoload)
// Possivel utilizar classmap para classes fora de namespaces (classmap e ps-4 para classes em namespaces)

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar("https://manifestotech.org/");

foreach ($cursos as $curso):
    echo $curso . PHP_EOL;
endforeach;

?>



