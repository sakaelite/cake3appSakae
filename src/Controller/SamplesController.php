<?php
namespace App\Controller;

class SamplesController extends AppController
{

    public function page()
    {
        $this->set('hoge', '変数の値');
    }
}