<?php
/**
 * This file hold all routes definitions.
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */

$routes = [
    'Accueil' => [ // Controller
        ['index', '/', 'GET'], // action, url, method
    ],
    'Item' => [ // Controller
        ['index', '/item', 'GET'], // action, url, method
        ['add', '/item/add', ['GET', 'POST']], // action, url, method
        ['edit', '/item/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/item/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/item/delete/{id:\d+}', 'GET'], // action, url, method
    ],
    'Artist' => [ // Controller
        ['index', '/artist', 'GET'], // action, url, method
        ['add', '/artist/add', ['GET', 'POST']], // action, url, method
        ['edit', '/artist/edit/{id:\d+}', ['GET', 'POST']], // action, url, method
        ['show', '/artist/{id:\d+}', 'GET'], // action, url, method
        ['delete', '/artist/delete/{id:\d+}', 'GET'], // action, url, method
    ]
];
