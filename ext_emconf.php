<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Slick Carousel',
    'description' => 'the last carousel you\'ll ever need',
    'category' => 'templates',
    'version' => '0.0.3',
    'state' => 'beta',
    'clearcacheonload' => 1,
    'author' => 'Boris Schauer',
    'author_email' => 'me@bschauer.de',
    'author_company' => 'bschauer, analog',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-7.99.99',
            'vhs' => '2.4.0-2.4.99',
        ),
        'conflicts' => array(

        ),
    ),
);