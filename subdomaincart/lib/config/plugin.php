<?php
return array(
    'name' => 'Subdomain Cart',
    'description' => 'Show cart info on another domian(s)',
    'img' => 'img/dummy96.png',
    'vendor' => 975294,
    'version' => '0.1',
    'frontend' => true,
    'icons' => array(
        16 => 'img/dummy16.png',
    ),
    'handlers' => array(
        'cart_add' => 'cartAdd',
    ),
);