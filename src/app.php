<?php

$app = require __DIR__ . '/bootstrap.php';

$app['debug'] = true;

$app->get('/api/{city}/startups', function () use ($app) {
          $startups = array(
            array(
                  'name' => 'Sogilis',
                  'address' => '1, place Firmin Gautier 38000 Grenoble',
                  'lat' => '45.19079',
                  'lng' => '5.71206',
                  'website' => 'http://sogilis.com/',
                  'twitter' => array()
              )
            );
          
          return $app->json($startups);
        });
        
$app->get('/api/{city}/investors', function () use ($app) {
          $investors = array(
              array(
                  'name' => 'Grenoble Angels',
                  'address' => 'CCI de Grenoble, 1 Place André Malraux BP 297, 38016, Grenoble',
                  'lat' => '45.188529',
                  'lng' => '5.724524',
                  'website' => 'http://www.grenoble-ecobiz.biz/ccig/gaacc.nsf/EXMHP?ReadForm',
                  'twitter' => array()
              )
          );
          
          return $app->json($investors);
        });

$app->get('/api/{city}/incubators', function () use ($app) {
          $incubators = array(
            
            );
          
          return $app->json($incubators);
        });
        
$app->get('/api/{city}/coworking-spaces', function () use ($app) {
          $coworkingSpaces = array(
            array(
                  'name' => 'Col\'inn',
                  'address' => '34, avenue Felix Viallet, 38000 Grenoble',
                  'lat' => '45.19084',
                  'lng' => '5.71874',
                  'website' => 'http://www.col-inn.net/',
                  'twitter' => array('Col_inn')
              )
          );
          
          return $app->json($coworkingSpaces);
        });
        
$app->get('/api/{city}/other-organizations', function () use ($app) {
          $otherOrganizations = array(
            array(
                  'name' => 'Apéro Entrepreneurs',
                  'address' => '4 Rue Montorge, 38000 Grenoble',
                  'lat' => '45.19139',
                  'lng' => '5.72712',
                  'website' => 'http://aperoentrepreneurs.com/grenoble/show/',
                  'twitter' => array('aperopreneurs')
              )
            );
          
          return $app->json($otherOrganizations);
        });
        
$app->get('/', function () use ($app) {
          return $app['twig']->render('index.html');
        });

return $app;