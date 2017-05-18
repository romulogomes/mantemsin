<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require 'vendor/autoload.php';


$app = new \Slim\App();

$app->get('/', function ($request, $response, $args) {
    // $myvar1 = $req->getParam('myvar'); //checks both _GET and _POST [NOT PSR-7 Compliant]
    // $myvar2 = $req->getParsedBody()['myvar']; //checks _POST  [IS PSR-7 compliant]
    // $myvar3 = $req->getQueryParams()['myvar']; //checks _GET [IS PSR-7 compliant]
	echo "TESTE";
});

$app->get('/grupos/{nome}', 'getGrupos');

include 'pessoas.php';

$app->run();