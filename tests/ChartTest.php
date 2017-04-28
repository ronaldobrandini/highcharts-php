<?php
use HighCharts\Chart;

/**
 * Description of ChartTest
 *
 * @author ronaldo
 */
class ChartTest extends \PHPUnit_Framework_TestCase
{
    public function testBasic()
    {
        $chart = new Chart();
        $expectedResult = 'chart: {"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefaultSeriesType()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    /**
    * @expectedException Exception\DefinitionNotFoundException
    */
    public function testDefinitionNotFound()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('foo', 'foo');
        $expectedResult = 'chart: {"defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    /**
    * @expectedException Exception\DefinitionValueInvalidException
    */
    public function testDefinitionValueInvalid()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('alignTicks', 'foo');
    }
    
    public function testDefinitionAlignTicks()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('alignTicks', false);
        $expectedResult = 'chart: {"alignTicks":false,"defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionAnimation()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('animation', 'false');
        $expectedResult = 'chart: {"animation":"false","defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionBackgroundColor()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('backgroundColor', '#000000');
        $expectedResult = 'chart: {"backgroundColor":"#000000","defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionBorderColor()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('borderColor', '#000000');
        $expectedResult = 'chart: {"borderColor":"#000000","defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionBorderRadius()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('borderRadius', 4);
        $expectedResult = 'chart: {"borderRadius":4,"defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionBorderWidth()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('borderWidth', 4);
        $expectedResult = 'chart: {"borderWidth":4,"defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionClassName()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('className', 'foo');
        $expectedResult = 'chart: {"className":"foo","defaultSeriesType":"bar","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionEvents()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('events', 'foo');
        $expectedResult = 'chart: {"defaultSeriesType":"bar","events":"foo","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionHeight()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('height', 5);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","height":5,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionIgnoreHiddenSeries()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('ignoreHiddenSeries', false);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","ignoreHiddenSeries":false,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionInverted()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('inverted', true);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","inverted":true,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionMargin()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('margin', array(1,2,4,5));
        $expectedResult = 'chart: {"defaultSeriesType":"bar","margin":[1,2,4,5],"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionMarginBottom()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('marginBottom', 2);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","marginBottom":2,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionMarginLeft()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('marginLeft', 2);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","marginLeft":2,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionMarginTop()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('marginTop', 2);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","marginTop":2,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionPlotBackgroundColor()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('plotBackgroundColor', '#000000');
        $expectedResult = 'chart: {"defaultSeriesType":"bar","plotBackgroundColor":"#000000","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionPlotBackgroundImage()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('plotBackgroundImage', 'https://www.highcharts.com/samples/graphics/skies.jpg');
        $expectedResult = 'chart: {"defaultSeriesType":"bar","plotBackgroundImage":"https:\/\/www.highcharts.com\/samples\/graphics\/skies.jpg","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionPlotBorderColor()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('plotBorderColor', '#000000');
        $expectedResult = 'chart: {"defaultSeriesType":"bar","plotBorderColor":"#000000","renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionPlotBorderWidth()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('plotBorderWidth', 2);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","plotBorderWidth":2,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionPlotShadow()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('plotShadow', true);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","plotShadow":true,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionPolar()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('polar', true);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","polar":true,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
    
    public function testDefinitionReflow()
    {
        $chart = new Chart('container', Chart::SERIES_TYPE_BAR);
        $chart->setDefinitions('reflow', false);
        $expectedResult = 'chart: {"defaultSeriesType":"bar","reflow":false,"renderTo":"container"}';
        $this->assertEquals($expectedResult, $chart->render());
    }
}
