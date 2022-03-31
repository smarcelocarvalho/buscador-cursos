
## Projeto do curso de Composer

Aplicação para buscar resultados de uma pagina web e apresentar resposta do html com base em tags e seletores css.
Utilização do composer para instalação de bibliotecas:
    guzzlehttp/guzzle
    symfony/dom-crawler
    symfony/css-selctor

Separação de classes em arquivos com namespace definido, fazendo uso de PSR-4 em autoload do arquivo composer.json.

## COMANDOS

# composer init
# composer require (pacote)
# composer install (verifica arquivo composer.lock)
# composer update  (recomendado pois verifica arquivo composer.json, atualiza .lock e .json)
# composer dumpautoad (Atualiza as classes nomeadas no autoload de composer.json)