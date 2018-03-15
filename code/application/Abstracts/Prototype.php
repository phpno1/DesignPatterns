<?php
/**
 * Created by PhpStorm.
 * User: yaha
 * Date: 2018/3/15
 * Time: 下午11:49
 */

namespace Phpno1\DesignPatterns\abstracts;


abstract class Prototype
{
    /**
     * @var string
     */
    protected $product_name;

    /**
     * @var string
     */
    protected $category;

    abstract public function __clone();

    public function getTitle(): string
    {
        return $this->product_name;
    }

    public function setTitle($product_name)
    {
        $this->product_name = $product_name;
    }
}