<?php
/**
 * Created by PhpStorm.
 * User: yaha
 * Date: 2018/3/15
 * Time: 下午11:47
 */

namespace Phpno1\DesignPatterns\Controller\Prototype;


use Phpno1\DesignPatterns\abstracts\Prototype;

class ApplePrototype extends Prototype
{
    protected $category = 'food';

    public function __clone()
    {
    }
}