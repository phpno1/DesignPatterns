<?php
/**
 * Created by PhpStorm.
 * User: yaha
 * Date: 2018/3/16
 * Time: 上午12:05
 */

namespace Phpno1\DesignPatterns\Test;


use Phpno1\DesignPatterns\Controller\Prototype\ApplePrototype;
use Phpno1\DesignPatterns\Controller\Prototype\BookPrototype;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\CodeCoverage\Report\PHP;

class TestPrototype extends TestCase
{

    public function testCanGetFooBook()
    {
        $applePrototype = new ApplePrototype();
        $bookPrototype  = new BookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $apple = clone $applePrototype;
            $apple->setTitle('apple ' . $i);
            $this->assertInstanceOf(ApplePrototype::class, $apple);
        }

        for ($i = 0; $i < 10; $i++) {
            $book = clone $bookPrototype;
            $book->setTitle('book ' . $i);
            $this->assertInstanceOf(BookPrototype::class, $book);
        }
    }
}