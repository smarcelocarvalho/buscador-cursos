<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client();
$resposta = $client->request('GET','https://cursos.alura.com.br/category/programacao/php');

$html = $resposta->getBody();

$crawler = new Crawler();
$crawler->addHtmlContent($html);

$cursos = $crawler->filter('span.course-card_name');

foreach ($cursos as $curso):
    echo $curso->textContent . PHP_EOL;
endforeach;

