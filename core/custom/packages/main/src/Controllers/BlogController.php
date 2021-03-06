<?php

namespace EvolutionCMS\Main\Controllers;

class BlogController extends BaseController
{
    public function render()
    {
        $this->data['blog'] = 'blog';

        $this->data['newsitems'] = $this->DocLister([
            'parents' => 53,
            'display' => 2,
            'paginate' => 'pages'
        ]);

        $this->data['pagebuilder'] = $this->evo
            ->runSnippet('PageBuilder', [
                'container' => 'pbcontent',
                'renderTo' => 'array'
            ])[0];
    }
}