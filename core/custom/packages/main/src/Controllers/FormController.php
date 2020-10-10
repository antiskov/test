<?php

namespace EvolutionCMS\Main\Controllers;

class FormController extends BaseController {

    public function render()
    {
        $this->data['form'] = 'form page';
        $this->data['pagebuilder'] = $this->evo
            ->runSnippet('PageBuilder', [
                'container' => 'pbcontent',
                'renderTo' => 'array'
            ])[0];
    }
}