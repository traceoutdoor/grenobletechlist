<?php

use Symfony\Component\Finder\Finder;

$app = require __DIR__ . '/bootstrap.php';

$app['debug'] = true;

function getWorkingDirectory($city, $entity)
{
    $dir = __DIR__ . "/../uploads/$city/$entity";
    if (!is_dir($dir)) {
        mkdir($dir, 0755, true);
    }
    return $dir;
}

$app->get('/api/{city}/{entity}', function ($city, $entity) use ($app) {
            $organizations = array();
            $directory = getWorkingDirectory($city, $entity);
            $finder = new Finder();
            foreach ($finder->in($directory)->name("*.json") as $file) {
                $content = json_decode(file_get_contents($directory . "/" . $file->getRelativePathname()));
                $organization = array(
                    'name'    => (string) $content->{'name'},
                    'address' => (string) $content->{'address'},
                    'logo'    => (string) $content->{'logo'},
                    'lat'     => (string) $content->{'lat'},
                    'lng'     => (string) $content->{'lng'},
                    'email'   => (string) $content->{'email'},
                    'website' => (string) $content->{'website'}
                );
                $twitterAccounts = array();
                foreach ($content->{'twitter'} as $twitterAccount) {
                    $twitterAccounts[] = (string) $twitterAccount;
                }
                $organization['twitter'] = $twitterAccounts;
                $organizations[] = $organization;
            }
            shuffle($organizations);

            return $app->json($organizations);
        });

$app->get('/', function () use ($app) {
            return $app['twig']->render('index.html');
        });

return $app;