<?php

namespace HighCharts;

/**
 * Classe responsavel pelo X e Y do HighChart
 * 
 * @package core.tools.highchart 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
abstract class Axis extends Output{

    /**
     * Definições utilizadas no highcharts Axis
     * Armazena a propriedade, o tipo de dados aceitos, o valor
     * default e o valor em si.
     * 
     * @access protected
     * @var array 
     */
    protected $definitions = array(
        'allowDecimals' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'alternateGridColor' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'categories' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'dateTimeLabelFormats' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'endOnTick' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'events' => array(
            'type' => 'array',
            'default' => array('afterSetExtremes' => NULL, 'setExtremes' => NULL),
            'value' => NULL
        ),
        'gridLineColor' => array(
            'type' => 'string',
            'default' => '#C0C0C0',
            'value' => NULL
        ),
        'gridLineDashStyle' => array(
            'type' => 'string',
            'default' => 'Solid',
            'value' => NULL
        ),
        'gridLineWidth' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'gridZIndex' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'id' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'labels' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'lineColor' => array(
            'type' => 'string',
            'default' => '#C0D0E0',
            'value' => NULL
        ),
        'lineWidth' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'linkedTo' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'max' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'maxPadding' => array(
            'type' => 'integer',
            'default' => 0.01,
            'value' => NULL
        ),
        'min' => array(
            'type' => 'integer',
            'default' => 0.01,
            'value' => NULL
        ),
        'minRange' => array(
            'type' => 'integer',
            'default' => 0.01,
            'value' => NULL
        ),
        'minTickInterval' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'minorGridLineColor' => array(
            'type' => 'string',
            'default' => '#E0E0E0',
            'value' => NULL
        ),
        'minorGridLineDashStyle' => array(
            'type' => 'string',
            'default' => 'Solid',
            'value' => NULL
        ),
        'minorGridLineWidth' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'minorTickColor' => array(
            'type' => 'string',
            'default' => '#A0A0A0',
            'value' => NULL
        ),
        'minorTickInterval' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'minorTickLength' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'minorTickPosition' => array(
            'type' => 'string',
            'default' => 'outside',
            'value' => NULL
        ),
        'minorTickWidth' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'offset' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'opposite' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'plotBands' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'plotLines' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'reversed' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'showEmpty' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'showFirstLabel' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'showLastLabel' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'startOfWeek' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'startOnTick' => array(
            'type' => 'string',
            'default' => '#C0D0E0',
            'value' => NULL
        ),
        'tickInterval' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'tickLength' => array(
            'type' => 'integer',
            'default' => 5,
            'value' => NULL
        ),
        'tickPixelInterval' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'tickPosition' => array(
            'type' => 'string',
            'default' => 'outside',
            'value' => NULL
        ),
        'tickPositioner' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'tickPositions' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'tickWidth' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'tickmarkPlacement' => array(
            'type' => 'string',
            'default' => 'between',
            'value' => NULL
        ),
        'title' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'type' => array(
            'type' => 'string',
            'default' => 'linear',
            'value' => NULL
        )
    );

    /**
     * Retorna o Json contento os elementos Xaxis ou Yaxis
     * @see Output::render()
     * @access public
     * @return json
     */
    public function render(){
        return parent::render();
    }

}
