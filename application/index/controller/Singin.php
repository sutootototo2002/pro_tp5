<?php
namespace app\index\controller;

use think\Controller;

class Singin extends Controller
{
    public function singin()
    {
        return $this ->fetch('singin');
    }
}
