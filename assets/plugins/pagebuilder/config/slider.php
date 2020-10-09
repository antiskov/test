<?php

return [
    'title' => 'Slider',
//    'show_in_templates' => [4],
//    'show_in_docs' => [2],
//    'hide_in_docs' => [5],
//    'order' => 1,
    'container' => [
        'pbcontent'
    ],
    'fields' => [
        'title' => [
            'caption' => 'Caption',
            'type' => 'group',
            'fields' => [
                'image' => [
                    'caption' => 'Caption',
                    'type' => 'image',
                ],
            ],
        ],
        'richtext' => [
            'caption' => 'Text left',
            'type' => 'richtext',
            'default' => '',
            'theme' => 'custom',
            'options' => [
                'height' => '200px'
            ],
        ],
    ],
    'prepare' => function($options, $values)
    {
        $values['block_id'] = 'files';
    }
];