<?php

namespace Hexlet\Phpunit\Tests;

use PHPUnit\Framework\TestCase;

use function Hexlet\Phpunit\Utils\reverseString;

//класс UtilsTest наследует класс TestCase
//имя класса совпадает с именем файла
class UtilsTest extends TestCase
{
    //Метод, функция определенная внутри класса
    //Должна начинаться со слова test
    //public - чтобы PHPUnit мог вызывать этот тест снаружи
    public function testReverse(): void
    {
        //сначала идет ожидаемое значение (expected)
        //и только потом актуальное (actual)
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }
}
