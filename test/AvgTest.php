<?php
include_once dirname(__FILE__) . '/init.php';
include_once ROOT . '/func.php';

class AvgTest extends PHPUnit_Framework_TestCase
{
    public function testAvg()
    {
        // multi records
        if (!$file = $this->_getFile('1')) throw new Exception('Invalid file name.');

        $fh = fopen($file, 'r');
        $top = process($fh);
        $expect = array(
            7  => 84,
            8  => 82,
            10 => 62,
            9  => 59.5,
            6  => 49,
        );

        $this->assertEquals($top, $expect);

        // single record
        if (!$file = $this->_getFile('2')) throw new Exception('Invalid file name.');

        $fh = fopen($file, 'r');
        $top = process($fh);
        $expect = array(
            10 => 62,
        );

        $this->assertEquals($top, $expect);

    }

    protected function _getFile($name)
    {
        $file = ROOT . '/test/' . $name . '.csv';
        return (file_exists($file)) ? $file : false;
    }
}
