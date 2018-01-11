<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/grav/user/config/site.yaml',
    'modified' => 1515664303,
    'data' => [
        'title' => 'PT. Visindo Guna Mandiri',
        'default_lang' => 'en',
        'author' => [
            'name' => 'admin',
            'email' => 'joe@test.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'Visindo' => 'Perusahaan yang bergerak di bidang jasa pengepakan barang / packaging dengan carton box, impraboard, paper pallet dan pallet kayu.'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
