<?php

return [
    'title' => 'Content',
//    'show_in_templates' => [4],
//    'show_in_docs' => [2],
//    'hide_in_docs' => [5],
//    'order' => 1,
    'container' => [
        'pbcontent'
    ],
    'fields' => [
        'title' => [
            'caption' => 'Title',
            'type' => 'text',
            'default' => '',
        ],
        'subtitle' => [
            'caption' => 'Subtitle',
            'type' => 'text',
            'default' => '',
        ],
        'richtext' => [
            'caption' => 'Text',
            'type' => 'richtext',
            'default' => '',
            'theme' => 'custom',
            'options' => [
                'height' => '300px'
            ],
        ],
    ],
    'prepare' => function($options, &$values)
    {
        $values['block_id'] = 'text';
    }
];