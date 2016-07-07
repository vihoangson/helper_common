<?php
/**
 * Class CommonTest
 * @author hoang_son
 */
class CommonTest extends \PHPUnit_Framework_TestCase
{
    public function testPushAndPop()
    {
        $this->assertEquals("Nine Hundred and Ninety-Nine Million Nine Hundred and Ninety-Nine Thousand Nine Hundred and Ninety-Eight", convert_number(999999998));

        $stack = array();
        $this->assertEquals(0, count($stack));

        array_push($stack, 'foo');
        $this->assertEquals('foo', $stack[count($stack)-1]);
        $this->assertEquals(1, count($stack));

        $this->assertEquals('foo', array_pop($stack));
        $this->assertEquals(0, count($stack));
    }
}