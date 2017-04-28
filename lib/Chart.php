<?php

namespace HighCharts;

/**
 * Classe Chart
 * 
 * Responsavel pelo elemento chart do highchart, posibilitando
 * a inserção de todas as propriedades definidas no javascript
 * 
 * @package core.tools.highchart
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
class Chart extends Output{

    /**
     * Definições utilizadas no highcharts Chart
     * Armazena a propriedade, o tipo de dados aceitos, o valor
     * default e o valor em si.
     * 
     * @access protected
     * @var array 
     */
    protected $definitions = array(
        'alignTicks' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'animation' => array(
            'type' => 'string',
            'default' => 'true',
            'value' => NULL
        ),
        'backgroundColor' => array(
            'type' => 'string',
            'default' => '#FFFFFF',
            'value' => NULL
        ),
        'borderColor' => array(
            'type' => 'string',
            'default' => '#4572A7',
            'value' => NULL
        ),
        'borderRadius' => array(
            'type' => 'integer',
            'default' => 5,
            'value' => NULL
        ),
        'borderWidth' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'className' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'defaultSeriesType' => array(
            'type' => 'string',
            'default' => 'line',
            'value' => NULL
        ),
        'events' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'height' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'ignoreHiddenSeries' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'inverted' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'margin' => array(
            'type' => 'array',
            'default' => false,
            'value' => NULL
        ),
        'marginBottom' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'marginLeft' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'marginRight' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'marginTop' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'pinchType' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'plotBackgroundColor' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'plotBackgroundImage' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'plotBorderColor' => array(
            'type' => 'string',
            'default' => '#C0C0C0',
            'value' => NULL
        ),
        'plotBorderWidth' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'plotShadow' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'polar' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'reflow' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'renderTo' => array(
            'type' => 'string',
            'default' => true,
            'value' => NULL
        ),
        'resetZoomButton' => array(
            'type' => 'array',
            'default' => true,
            'value' => NULL
        ),
        'selectionMarkerFill' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'shadow' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'showAxes' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'spacing' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'spacingBottom' => array(
            'type' => 'integer',
            'default' => 15,
            'value' => NULL
        ),
        'spacingLeft' => array(
            'type' => 'integer',
            'default' => 10,
            'value' => NULL
        ),
        'spacingRight' => array(
            'type' => 'integer',
            'default' => 10,
            'value' => NULL
        ),
        'spacingTop' => array(
            'type' => 'integer',
            'default' => 10,
            'value' => NULL
        ),
        'style' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'type' => array(
            'type' => 'string',
            'default' => 'line',
            'value' => NULL
        ),
        'width' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'zoomType' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
    );

    const SERIES_TYPE_LINE = 'line';
    const SERIES_TYPE_BAR = 'bar';
    const SERIES_TYPE_COLUMN = 'column';
    const SERIES_TYPE_SPLINE = 'spline';

    /**
     * Cria um novo Chart
     *
     * @param string $renderTo Id do elemento que sera utilizado para o 
     * grafico
     * @param string $defaultSeriesType Tipo de grafico que deseja exibir
     * Ex: Pie, Bar, Column, etc...
     *
     * @return Chart
     */
    public function __construct($renderTo = 'container', $defaultSeriesType = self::SERIES_TYPE_LINE){
        $this->setDefinitions('renderTo', $renderTo);
        $this->setDefinitions('defaultSeriesType', $defaultSeriesType);
    }

    /**
     * Retorna o Json contento o elemento chart
     * @see Output::render()
     * @access public
     * @return json
     */
    public function render(){
        $data = array();
        foreach($this->definitions as $key => $definition){
            if($definition['value'] !== NULL && $definition['default'] !== $definition['value']){
                $data[$key] = $definition['value'];
            }
        }
        $this->code = 'chart: ' . json_encode($data);
        return parent::render();
    }

    /**
     * Retorna o id do elemento que sera utilizado na criação do grafico.
     * @access public
     * @return string
     */
    public function getRenderTo(){
        return $this->definitions['renderTo']['value'];
    }

}
