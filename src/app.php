<?php

$app = require __DIR__ . '/bootstrap.php';

$app['debug'] = true;

$app->get('/api/{city}/investors', function () use ($app) {
          $mockedInvestors = array(
              array(
                  'name' => 'Grenoble Angels',
                  'address' => 'CCI de Grenoble, 1 Place André Malraux BP 297, 38016, Grenoble',
                  'logo' => '',
                  'lat' => '45.188529',
                  'lng' => '5.724524',
                  'email' => 'grenobleangels@grenoble.cci.fr',
                  'website' => 'http://www.grenoble-ecobiz.biz/ccig/gaacc.nsf/EXMHP?ReadForm',
                  'twitter' => array()
              )
          );
          
          return $app->json($mockedInvestors);
        });

$app->get('/', function () use ($app) {
          return $app['twig']->render('index.html');
        });

return $app;