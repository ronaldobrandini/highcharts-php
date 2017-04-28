<?php

use HighCharts\Series;

/**
 * Description of SeriesTest
 *
 * @author ronaldo
 */
class SeriesTest extends \PHPUnit_Framework_TestCase
{
    public function testBasic()
    {
        $serie = new Series();
        $expectedResult = '{"data":[]}';
        $this->assertEquals($expectedResult, $serie->render());
    }
    
    public function testColumnDoubleData()
    {
        $data = array(
            array(
                'name' => 'Abastecido',
                'data' => array(42.116, 40.450, 36.640, 36.590),
                'color' => '#01ff70'
            ),
            array(
                'name' => 'Restante',
                'data' => array(12.884, 14.55, 18.36, 18.41),
                'color' => '#3d9970'
            )
        );
        $serie = new Series($data);
        $expectedResult = '{"data":[{"name":"Abastecido","data":[42.116,40.45,36.64,36.59],"color":"#01ff70"},{"name":"Restante","data":[12.884,14.55,18.36,18.41],"color":"#3d9970"}]}';
        $this->assertEquals($expectedResult, $serie->render());
    }
}
