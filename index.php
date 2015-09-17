<?php

/*
 * This file is part of the Overleat Care Home Website package.
 *
 * (c) Will Parker <will@wipar.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

define('APP_PATH', getcwd()); // PHP v5.3+

    if (getenv(APP_ENV) == 'development') {
        define('ROOT_PATH', '/overleat3');
        define('ASSET_PATH', '/overleat3/assets');
        define('IMG_PATH', '/overleat3/assets/img');
    } else {
        define('ROOT_PATH', '/new');
        define('ASSET_PATH', '/new/assets');
        define('IMG_PATH', '/new/assets/img');
    }

    // load
    require APP_PATH . '/vendor/autoload.php';

    // init app
    $app = new \SlimController\Slim(array(
        'templates.path'             => APP_PATH . '/resources',
        'controller.class_prefix'    => '\\Overleat\\Controller',
        'controller.method_suffix'   => 'Action',
        'controller.template_suffix' => 'php',
    ));

    $app->addRoutes(array(
        '/'                            => 'Home:index',
        '/home'                        => 'Home:index',
        '/activities-and-outings'    => 'Home:activities',
        '/meals-and-diets'            => 'Home:meals',
        '/accomodation'                => 'Home:accomodation',
        '/respite-care'                => 'Home:respite',
        '/why-choose-overleat'        => 'Home:why',
        '/contact-us'                => 'Contact:form',
        '/message-sent'                => 'Contact:success',
    ));

    $app->run();
