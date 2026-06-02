<?php

return [

    'supportedLocales' => [
        'en' => ['name' => 'English',  'script' => 'Latn', 'native' => 'English',  'regional' => 'en_GB'],
        'sv' => ['name' => 'Swedish',  'script' => 'Latn', 'native' => 'Svenska',  'regional' => 'sv_SE'],
    ],

    'useAcceptLanguageHeader' => false,

    'hideDefaultLocaleInURL' => true,

    'localesOrder' => ['sv', 'en'],

    'localesMapping' => [],

    'utf8suffix' => env('LARAVELLOCALIZATION_UTF8SUFFIX', '.UTF-8'),

    'urlsIgnored' => ['/up'],

    'httpMethodsIgnored' => ['POST', 'PUT', 'PATCH', 'DELETE'],
];
