<?php
/**
 * Created by PhpStorm.
 * User: yaha
 * Date: 2018/3/15
 * Time: 下午11:58
 */

namespace Phpno1\DesignPatterns\Controller\Prototype;


use Phpno1\DesignPatterns\abstracts\Prototype;

class BookPrototype extends Prototype
{
    protected $category = 'book';

    public function __clone()
    {
    }
}