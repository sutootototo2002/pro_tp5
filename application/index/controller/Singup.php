<?php
namespace app\index\controller;

use think\Controller;

class Singup extends Controller
{
    public function singup()
    {
        return $this ->fetch('singup');
    }
}
