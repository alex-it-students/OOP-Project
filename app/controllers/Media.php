<?php

namespace App;

use Interfaces\PageInterface;

abstract class Media implements PageInterface
{
    protected $defaultModel;
    public function list()
    {
        $model = new $this->defaultModel();
        $datas = $model->getDatas();
        return $datas;
    }
    public function detail($id)
    {
        $model = new $this->defaultModel();
        $data = $model->getDataById($id);
        return $data;
    }

}