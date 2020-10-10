<?php

namespace EvolutionCMS\Main\Controllers;

class BlogitemController extends BaseController
{
    public function render()
    {
        $this->data['pagebuilder'] = $this->evo
            ->runSnippet('PageBuilder', [
                'container' => 'pbcontent',
                'renderTo' => 'array'
            ])[0];
    }
}