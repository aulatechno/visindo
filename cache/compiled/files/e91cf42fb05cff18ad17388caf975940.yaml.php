<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/grav/user/themes/visindo/blueprints.yaml',
    'modified' => 1515664411,
    'data' => [
        'name' => 'Visindo',
        'version' => '1.0.0',
        'description' => '-',
        'icon' => 'empire',
        'author' => [
            'name' => '-',
            'email' => '-',
            'url' => 'h-'
        ],
        'homepage' => '-',
        'keywords' => 'antimatter, theme, core, modern, fast, responsive, html5, css3',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
