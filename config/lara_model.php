<?php
return [
    'root_path' => [
        'model' => 'App' . DIRECTORY_SEPARATOR . 'Models',
    ],
    'extends' => 'App\Model\BaseModel',

    'models' => [
        'countries' => [
            'migration' => [
                'id' => 'increments',
                'status' => [
                    'type' => 'boolean',
                    'nullable' => true,
                ],
                'is_prefix_display_on_left' => [
                    'type' => 'boolean',
                    'default' => 1
                ],
                'name' => [
                    'type' => 'string',
                    'length' => 300,
                    'nullable' => true,
                    'index' => 'name'
                ],
                'code' => [
                    'type' => 'string',
                    'length' => 10,
                    'nullable' => true,
                ],
                'symbol' => [
                    'type' => 'string',
                    'length' => 50,
                    'nullable' => true,
                ],
                'prefix' => [
                    'type' => 'string',
                    'length' => 10,
                    'nullable' => true,
                ],
                'suffix' => [
                    'type' => 'string',
                    'length' => 10,
                    'nullable' => true,
                ],
            ],
            'fillable' => [

            ],
            'indexable' => [

            ],
            'showable' => [

            ],
        ]
    ],
];