<?php

namespace EvolutionCMS\Main\Controllers;

class HomeController extends BaseController {

    public function render()
    {
        $this->data['home'] = 'home page';

        $this->data['pagebuilder'] = $this->evo
            ->runSnippet('PageBuilder', [
                'container' => 'pbcontent',
                'renderTo' => 'array'
            ])[0];
    }
}