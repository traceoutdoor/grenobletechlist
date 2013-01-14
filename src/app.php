<?php

$app = require __DIR__ . '/bootstrap.php';

$app['debug'] = true;

$app->get('/api/{city}/startups', function () use ($app) {
          $startups = array(
            array(
                  'name' => 'Wizbii',
                  'address' => '6 rue Etienne Marcel, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/cBYu2aZcHl/images/wizbii.jpg',
                  'lat' => '45.18641',
                  'lng' => '5.71758',
                  'email' => '',
                  'website' => 'http://www.wizbii.com/',
                  'twitter' => array('wizbii')
              ),
            array(
                  'name' => 'Ethera',
                  'address' => '7, Parvis Louis Néel, BP 50, F-38040 Grenoble Cedex 9',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/utWe7pESAm/images/ethera.jpg',
                  'lat' => '45.19574',
                  'lng' => '5.71005',
                  'email' => 'info@ethera-labs.com',
                  'website' => 'http://www.ethera-labs.com/',
                  'twitter' => array('EtheraLabs')
              ),
            array(
                  'name' => 'TraceDirecte',
                  'address' => 'ZA de longifan, 38530 Chapareillan',
                  'logo' => 'http://www.tracedirecte.com/images/GBI_TRACEDIRECTE/logo.png',
                  'lat' => '45.467798',
                  'lng' => '5.993178',
                  'email' => 'romain.chauny@tracedirecte.com',
                  'website' => 'http://www.tracedirecte.com/',
                  'description' => 'Voyage sur mesure en direct avec des agences locales',
                  'twitter' => array('tracedirecte')
              ),
            array(
                  'name' => 'Shopping Adventure',
                  'address' => '85 rue des Alliés, 38000 Grenoble',
                  'logo' => 'http://www.shoppingadventure.fr/bundles/kbrwregularwebsite/images/logo.png',
                  'lat' => '45.172138',
                  'lng' => '5.722678',
                  'email' => 'remi.alvado@gmail.com',
                  'website' => 'http://www.shoppingadventure.fr/',
                  'description' => 'Moteur de shopping local, nous aidons les internautes et mobinautes à trouver le produit de leur rêve près de chez eux.',
                  'twitter' => array('remialvado', 'kbrwadventure')
              ),
            array(
                  'name' => 'Nuage Touch',
                  'address' => '38400 Saint Martin d\'Hères',
                  'logo' => 'http://nuagetouch.com/images/logo.png',
                  'lat' => '',
                  'lng' => '',
                  'email' => 'jeremie@nuagetouch.com',
                  'website' => 'http://nuagetouch.com',
                  'description' => 'On fait des jeux et des apps minimalistes sur iPhone et iPad.',
                  'twitter' => array('nuagetouch', 'thomascastel', 'dr_cube', 'akonieczny')
              ),
            array(
                  'name' => 'Mezcalito',
                  'address' => '17 boulevard Agutte Sembat 38000 Grenoble',
                  'logo' => 'https://twimg0-a.akamaihd.net/profile_images/1237266629/mezcalito_scop.jpg',
                  'lat' => '45.186679',
                  'lng' => '5.728101',
                  'email' => 'nico@mezcalito.fr',
                  'website' => 'http://www.mezcalito.fr',
                  'description' => 'Agence web Grenobloise. Création web, hébergement sur mesure, webmarketing et conseil.',
                  'twitter' => array('Mezcalito_Scop')
              ),
            array(
                  'name' => 'ButterflyEffect',
                  'address' => '12 rue Pierre Sémard 38000 Grenoble',
                  'logo' => 'http://butterflyeffect.fr/logo.png',
                  'lat' => '45.191882',
                  'lng' => '5.712976',
                  'email' => 'bs@butterflyeffect.fr',
                  'website' => 'http://butterflyeffect.fr',
                  'description' => 'ButterflyEffect est une agence de développement d\'applications mobiles solidaires, principalement à destination des associations caritatives.',
                  'twitter' => array('butterflyeffect', 'siebmanb', 'blibersa', 'Quent1F')
              ),
            array(
                  'name' => 'Drimki',
                  'address' => '4 rue des méridiens 38130 Echirolles',
                  'logo' => 'http://www.drimki.fr/img/frl/commons/immobilier-drimki.png',
                  'lat' => '45.1486042',
                  'lng' => '5.7261249',
                  'email' => 'julien.ros@free.fr',
                  'website' => 'http://www.drimki.fr/',
                  'description' => 'Drimki développe des services immobiliers innovants et entièrement gratuits à destination des vendeurs et des acquéreurs, ainsi que des services de professionnels au travers de son activité de gestion de transactions immobilières.',
                  'twitter' => array('rosjulien')
              ),
            array(
                  'name' => 'Voxity',
                  'address' => '85 rue des alliés, 38000 Grenoble',
                  'logo' => 'http://static.wix.com/media/21ed30_91aff114d81d9a79bdc37f3f835c90c5.jpg',
                  'lat' => '45.172565',
                  'lng' => '5.722441',
                  'email' => 'marketing@voxity.fr',
                  'website' => 'http://www.voxity.fr',
                  'description' => 'Télécommunication sur mesure pour les entreprises. Spécialiste VoIP dans le Cloud.',
                  'twitter' => array('voxity')
              ),
            array(
                  'name' => 'Itris Automation Square',
                  'address' => '2, square Roger Genin 38000 Grenoble',
                  'logo' => 'https://dl-web.dropbox.com/get/GrenobleTechList/images/Itris.png?w=ac729cc8',
                  'lat' => '45.1890962',
                  'lng' => '5.7166138',
                  'email' => 'pauline.vettier@automationsquare.com',
                  'website' => 'http://www.automationsquare.com/fr/',
                  'description' => 'Itris Automation Square (IAS) est une société éditrice de logiciels qui fournit des outils de conversion, vérification et documentation pour les programmes automates. IAS aide ses clients à améliorer leurs process de développement, et ainsi à écrire des programmes de meilleure qualité plus rapidement. Spécialiste de la qualité logicielle et des standards de codage, les équipes d’IAS mettent en œuvre des technologies innovantes au service de l’industrie.',
                  'twitter' => array('ItrisAutomation', 'EricPierrel')
              ),
            array(
                  'name' => 'Naeka',
                  'address' => '3 rue Général Ferrié 38100 Grenoble',
                  'logo' => 'http://www.naeka.fr/static/img/logo.png',
                  'lat' => '45.18025',
                  'lng' => '5.72361',
                  'email' => 'maxime@naeka.fr',
                  'website' => 'http://www.naeka.fr',
                  'description' => '',
                  'twitter' => array('MaximeGaillard')
              )
            );
          
          shuffle($startups);
          
          return $app->json($startups);
        });
        
$app->get('/api/{city}/investors', function () use ($app) {
          $investors = array(
              array(
                  'name' => 'Sogilis',
                  'address' => '1, place Firmin Gautier 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/bw_aps0BtN/images/sogilis.png',
                  'lat' => '45.19079',
                  'lng' => '5.71206',
                  'email' => 'contact@sogilis.com',
                  'website' => 'http://sogilis.com/',
                  'twitter' => array()
              ),
              array(
                  'name' => 'Grenoble Angels',
                  'address' => 'CCI de Grenoble, 1 Place André Malraux BP 297, 38016, Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/bbZ8aG3qUS/images/grenoble-angels.jpg',
                  'lat' => '45.188529',
                  'lng' => '5.724524',
                  'email' => 'grenobleangels@grenoble.cci.fr',
                  'website' => 'http://www.grenoble-ecobiz.biz/ccig/gaacc.nsf/EXMHP?ReadForm',
                  'twitter' => array()
              ),
              array(
                  'name' => 'Réseau Entreprendre Isère',
                  'address' => 'ZAC Bouchayer-Viallet, Hôtel d\'entreprises de la petite halle, 31 rue Gustave Eiffel, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/BOM-RUNfsF/images/reseau-entreprendre-isere.jpg',
                  'lat' => '45.18440',
                  'lng' => '5.70342',
                  'email' => '',
                  'website' => 'http://www.isere-entreprendre.org',
                  'twitter' => array()
              ),
              array(
                  'name' => 'ADIE',
                  'address' => '17, rue Denfert Rochereau 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/SlCTsejUGs/images/adie.png',
                  'lat' => '45.18920',
                  'lng' => '5.71727',
                  'email' => '',
                  'website' => 'http://www.adie.org/',
                  'twitter' => array('Adieorg')
              ),
              array(
                  'name' => 'MCAE',
                  'address' => '35, rue Casimir Brenier 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/BsTSe0_waM/images/mcae.jpg',
                  'lat' => '45.19146',
                  'lng' => '5.71654',
                  'email' => '',
                  'website' => 'http://www.mcae.org/',
                  'twitter' => array()
              )
          );
          
          shuffle($investors);
          
          return $app->json($investors);
        });

$app->get('/api/{city}/incubators', function () use ($app) {
          $incubators = array(
            array(
                  'name' => 'GRAIN',
                  'address' => 'Petite Halle – Site Bouchayer-Viallet, 31 rue Gustave Eiffel, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/JJPVXasqkL/images/grain.png',
                  'lat' => '45.18440',
                  'lng' => '5.70342',
                  'email' => '',
                  'website' => 'http://www.grain-incubation.com/',
                  'twitter' => array('GrainIncubation')
              ),
              array(
                  'name' => 'IncubaGEM',
                  'address' => '4 place Robert Schuman, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/af9kDtNfVu/images/incubagem.png',
                  'lat' => '45.19162',
                  'lng' => '5.71298',
                  'email' => '',
                  'website' => 'http://www.gementreprendre.fr/accompagnement/incubagem/',
                  'twitter' => array()
              ),
              array(
                  'name' => 'ACEISP',
                  'address' => 'Espace Vaucanson, 82 rue Anatole France, 38100 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/AN4I7dpone/images/aceisp.jpg',
                  'lat' => '45.17285',
                  'lng' => '5.70370',
                  'email' => '',
                  'website' => 'http://www.aceisp.org/',
                  'twitter' => array()
              ),
              array(
                  'name' => 'Petale',
                  'address' => 'La Petite Halle, 31 Rue Gustave Eiffel, 38 000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/0FO2gDbaYy/images/petale.jpg',
                  'lat' => '45.18440',
                  'lng' => '5.70342',
                  'email' => '',
                  'website' => 'http://www.petale-innovation.com/',
                  'twitter' => array()
              )  
          );
          
          shuffle($incubators);
          
          return $app->json($incubators);
        });
        
$app->get('/api/{city}/coworking-spaces', function () use ($app) {
          $coworkingSpaces = array(
            array(
                  'name' => "Col'inn",
                  'address' => '34, avenue Felix Viallet, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/yLaS8UOx0x/images/colinn.jpeg',
                  'lat' => '45.19084',
                  'lng' => '5.71874',
                  'website' => 'http://www.col-inn.net/',
                  'twitter' => array('Col_inn')
              ),
            array(
                  'name' => "CoWork In Grenoble",
                  'address' => '12 rue Servan 38000 Grenoble',
                  'logo' => 'http://www.co-work.fr/wp-content/uploads/2012/12/logoweb-300x300.jpg',
                  'lat' => '45.191345',
                  'lng' => '5.733265',
                  'email' => 'mathieu@grownoble.fr',
                  'website' => 'http://www.co-work.fr/',
                  'description' => 'Cowork in Grenoble, la communauté des freelances et des entrepreneurs.',
                  'twitter' => array('MisterNiark', 'Coworkingre')
              )
          );
          
          shuffle($coworkingSpaces);
          
          return $app->json($coworkingSpaces);
        });
        
$app->get('/api/{city}/other-organizations', function () use ($app) {
          $otherOrganizations = array(
            array(
                  'name' => 'Apéro Entrepreneurs',
                  'address' => '4 Rue Montorge, 38000 Grenoble',
                  'logo' => 'https://dl.dropbox.com/sh/a8jxbpxbckf2naa/imai264oBa/images/apero-entrepreneurs.png',
                  'lat' => '45.19139',
                  'lng' => '5.72712',
                  'website' => 'http://aperoentrepreneurs.com/grenoble/show/',
                  'twitter' => array('aperopreneurs')
              ),
            array(
                  'name' => '2MSens',
                  'address' => '155 - 157 Cours Berriat, 38000 Grenble',
                  'logo' => 'http://www.isere-numerique.com/files/logo/societes/logo_2msens_7796.jpg',
                  'lat' => '45.187992',
                  'lng' => '5.704533',
                  'email' => 'benoit.collet@2msens.com',
                  'website' => 'http://www.2msens.com/',
                  'description' => 'Cabinet de conseil pour les éditeurs de logiciels, l\'industrie numérique et digitale.',
                  'twitter' => array('Benoit_Collet', 'Marie_Lamour', 'Tweetsandsoft', '2msens')
              ),
            array(
                  'name' => 'Minalogic',
                  'address' => '3, parvis Louis Néel 38054 Grenoble cedex 9',
                  'logo' => 'http://www.minalogic.com/images/SIT_MINA/logo.png',
                  'lat' => '45.19574',
                  'lng' => '5.71005',
                  'email' => 'contact@minalogic.com',
                  'website' => 'http://www.minalogic.com',
                  'description' => 'Pôle de compétitivité mondial, Minalogic accompagne les porteurs d\'innovation, petits et grands, dans leur projet. Ce réseau de partenaires spécialisés dans les systèmes miniaturisés intelligents active la rencontre des innovateurs, des industriels et des financeurs pour porter collectivement une technologie jusqu\'à son marché. En assurant la cohésion du triangle industrie-recherche-formation au plan régional et son rayonnement au rang mondial, Minalogic s\'est imposé comme un acteur incontournable de la région Rhône-Alpes.',
                  'twitter' => array('Minalogic')
              ),
            array(
                  'name' => 'Pôle oZer',
                  'address' => '1025 avenue Centrale, 38400 St Martin d\'Hères',
                  'logo' => 'http://www.grandsud-sn.fr/images/images_partenaires/img_1315207802207.jpg',
                  'lat' => '45.19167',
                  'lng' => '5.77037',
                  'email' => 'jean-luc.finck@grenoble-univ.fr',
                  'website' => 'http://www.ozer-entrepreneuriat.fr',
                  'description' => 'Pôle Entrepreneuriat Etudiants Grenoble',
                  'twitter' => array('oZergrenoble')
              )
            );
          
          shuffle($otherOrganizations);
          
          return $app->json($otherOrganizations);
        });
        
$app->get('/', function () use ($app) {
          return $app['twig']->render('index.html');
        });

return $app;
