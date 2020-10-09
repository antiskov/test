<?php

namespace EvolutionCMS\Main\Controllers;

class BlogController extends BaseController
{
    public function render()
    {
        $this->data['blog'] = 'blog';

//        $this->data['newsitems'] = $this->DocLister([
//            'parents' => 2,
//            'display' => 2,
//            'paginate' => 'pages'
//        ]);
    }
}