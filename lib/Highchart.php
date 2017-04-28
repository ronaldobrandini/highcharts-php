<?php
namespace HighCharts;

use HighCharts\Chart;

/**
 * 
 * Public Class Highchart
 * 
 * Classe responsavel pela criação dos graficos gerados pelo
 * highcharts.js
 * 
 * http://www.highcharts.com/
 * 
 * @package core.tools.highchart
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014
 * 
 */
class Highchart extends Output{

    /**
     * Armazena a instancia da classe Chart
     * @access private
     * @var Chart
     */
    private $chart;

    /**
     * Biblioteca utilizada para utilizar o highchart
     * Disponivel até o momento (jquery e Mootools)
     * @access private
     * @var string
     */
    private $engine;

    /**
     * Prefixo customizado para a blibioteca utilizada.
     * Ex: jquery.(selector) - $.(selector)
     * @access private
     * @var string
     */
    private $customPrefix;

    /**
     * Armazena a instancia da classe Title
     * @access private
     * @var Title
     */
    private $title;
    /**
     * Armazena a instancia da classe Title como Subtitle
     * @access private
     * @var Title 
     */
    private $subTitle;
    /**
     * Armazena a instancia da classe XAxis 
     * @access private
     * @var XAxis
     */
    private $xAxis;

    /**
     * Armazena a instancia da classe YAxis
     * @access private
     * @var YAxis
     */
    private $yAxis;

    /**
     * Armazena a instancia da classe Legend
     * @access private
     * @var Legend
     */
    private $legend;

    /**
     * Armazena a instancia da classe Tooltip
     * @access private
     * @var Tooltip
     */
    private $tooltip;

    /**
     * Plot Options
     *
     * @var PlotOptions
     */
    private $plotOptions;

    /**
     * Armazena um array de instancias da classe Series
     * @access private
     * @var Series
     */
    private $series = array();
    /**
     * Armazena uma instancia da classe Credits
     * @access private
     * @var Credits 
     */
    private $credits;
    
    const HIGHCHARTS_ENGINE_AJAX = 'ajax';
    const HIGHCHARTS_ENGINE_JQUERY = 'jquery';
    const HIGHCHARTS_ENGINE_JQUERY_CUSTOM_PREFIX = 'jquery-custom';
    const HIGHCHARTS_ENGINE_MOOTOOLS = 'mootools';

    /**
     * Cria uma nova instancia do Highchart 
     *
     * @param Chart $chart
     * @param string $engine Optional: JavaScript engine
     * @param string $custom_prefix Optional: custom JavaScript engine prefix
     * @access public
     * @return Highchart
     */
    public function __construct(Chart $chart, $engine = self::HIGHCHARTS_ENGINE_JQUERY, $custom_prefix = null){
        $this->chart = $chart;
        $this->engine = $engine;
        $this->customPrefix = $custom_prefix;
    }

    /**
     * Returns JavaScript script DOM with JavaScript var
     * Retorna o código javascript com o seguinte formato:
     * var {$renderTo} = new Highcharts({});
     * 
     * @return string Código javascript gerado.
     */
    public function render(){
        $this->code = $this->buildCode($this->chart->getRenderTo(), $this->engine);
        return $this->code;
    }

    public function setTitle(Title $title){
        $this->title = $title;
    }
    
    public function setSubTitle(Title $subTitle){
        $this->subTitle = $subTitle;
    }
    
    public function setSeries(Series $series){
        $this->series[] = $series;
    }
    public function setXAxis(Axis $xAxis){
        $this->xAxis = $xAxis;
    }

    public function setYAxis(Axis $yAxis){
        $this->yAxis = $yAxis;
    }

    public function setLegend(Legend $legend){
        $this->legend = $legend;
    }

    public function setTooltip(Tooltip $tooltip){
        $this->tooltip = $tooltip;
    }

    public function setPlotOptions(plotOptions\PlotOptions $plotOptions){
        $this->plotOptions = $plotOptions;
    }

    public function setCredits(Credits $credits){
        $this->credits = $credits;
    }

        
    /**
     * Cria o javascript baseado na biblioteca
     *
     * @param string $renderTo
     * @param string $engine
     *
     * @return string
     */
    private function buildCode($renderTo, $engine){
        $code = '';
        if($engine == self::HIGHCHARTS_ENGINE_MOOTOOLS){
            $code .= 'window.addEvent(\'domready\', function() {';
        }elseif($engine == self::HIGHCHARTS_ENGINE_JQUERY_CUSTOM_PREFIX && isset($this->customPrefix)){
            $code .= $this->customPrefix . '(document).ready(function() {';
        }elseif($engine !== self::HIGHCHARTS_ENGINE_AJAX){
            $code .= '(function(){';
        }
        $code .= 'var ' . $renderTo . ' = ';
        $code .= 'new Highcharts.Chart({';
        $code .= $this->build();
        $code .= '})';
        if($engine !== self::HIGHCHARTS_ENGINE_AJAX){
            $code .= '})();';
        }
        return $code;
    }

    /**
     * Agrupa todos os objetos numa unica string
     * @return string
     */
    private function build(){
        $arrResult = array();

        $arrResult[] = $this->chart->render();

        if($this->title){
            $arrResult[] = $this->title->render();
        }
        
        if($this->subTitle){
            $arrResult[] = $this->subTitle->render();
        }

        if($this->xAxis){
            $arrResult[] = $this->xAxis->render();
        }

        if($this->yAxis){
            $arrResult[] = $this->yAxis->render();
        }

        if($this->legend){
            $arrResult[] = $this->legend->render();
        }

        if($this->tooltip){
            $arrResult[] = $this->tooltip->render();
        }

        if($this->plotOptions){
            $arrResult[] = $this->plotOptions->render();
        }

        if($this->series){
            $serie = 'series: ';
            $arrayAux = array();
            foreach($this->series as $series){
                $arrayAux[] = $series->render();
            }
            $arrResult[] = $serie . '[' . implode(', ', $arrayAux) . ']';
        }
        
        if($this->credits){
            $arrResult[] = $this->credits->render();
        }

        return implode(',', $arrResult);
    }

}
