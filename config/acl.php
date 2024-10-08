<?php


return [
    'dashboard' => [
        'owner' => true,
        'admin' => true,
        'employee' => true,
    ],
    'reports' => [
        'owner' => true,
        'admin' => false,
        'employee' => true,
    ],
    'configuration' => [
        'owner' => true,
        'admin' => true,
        'employee' => false,
    ],
];
