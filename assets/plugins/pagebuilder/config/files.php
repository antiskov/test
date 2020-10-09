<?php

return [
    'title' => 'Files',

    'container' => [
        'pbcontent'
    ],
    'fields' => [
        'files' => [
            'caption' => 'Files',
            'type' => 'group',
            'fields' => [
                'caption' => 'Name file',
                'type' => 'text',
            ],
            'file' => [
                'caption' => 'file',
                'type' => 'file',
            ],
        ],
    ],
    'prepare' => function($options, $values)
    {
        $values['block_id'] = 'files';
    }
];