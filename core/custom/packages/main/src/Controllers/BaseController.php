<?php

namespace EvolutionCMS\Main\Controllers;

use Illuminate\Support\Facades\Cache;
//Базовый класс который занимается обработкой/кэшированием и прочими вещами.
class BaseController
{
    public $data = [];

    public function __construct()
    {
        $this->evo = EvolutionCMS();
        ksort($_GET);
        $cacheid = md5(json_encode($_GET));
        if ($this->evo->getConfig('enable_cache')) {
            $this->data = Cache::rememberForever($cacheid, function () {
                $this->globalElements();
                $this->render();
                return $this->data;
            });
        } else {
            $this->globalElements();
            $this->render();
        }
        $this->noCacheRender();
        $this->sendToView();
    }

    public function render()
    {
        $this->data['test'] = 'TEST';
    }

    public function noCacheRender()
    {
    }

    public function globalElements()
    {

    }

    public function sendToView()
    {
        $this->evo->addDataToView($this->data);
    }
}