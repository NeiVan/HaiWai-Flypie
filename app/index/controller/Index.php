<?php
namespace app\index\controller;

use app\common\controller\Index as commonIndex;

class Index
{
    public function index()
    {
       return 'This is Index index index';
    }

    public function common()
    {
        $common = new commonIndex();
        return $common->index();

    }

}
