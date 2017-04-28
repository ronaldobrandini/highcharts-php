<?php

namespace HighCharts;

/**
 * Classe responsavel pela propriedade Tooltip do HighChart
 * 
 * @package core.tools.highchart 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
class Tooltip extends Output{

    /**
     * Definições utilizadas no highcharts Tooltip
     * Armazena a propriedade, o tipo de dados aceitos, o valor
     * default e o valor em si.
     * 
     * @access protected
     * @var array 
     */
    protected $definitions = array(
        'animation' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'backgroundColor' => array(
            'type' => 'string',
            'default' => 'rgba(255, 255, 255, 0.85)',
            'value' => NULL
        ),
        'borderColor' => array(
            'type' => 'string',
            'default' => 'auto',
            'value' => NULL
        ),
        'borderRadius' => array(
            'type' => 'integer',
            'default' => 3,
            'value' => NULL
        ),
        'borderWidth' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'crosshairs' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'dateTimeLabelFormats' => array(
            'type' => 'string',
            'default' => '{
                millisecond:"%A, %b %e, %H:%M:%S.%L",
                second:"%A, %b %e, %H:%M:%S",
                minute:"%A, %b %e, %H:%M",
                hour:"%A, %b %e, %H:%M",
                day:"%A, %b %e, %Y",
                week:"Week from %A, %b %e, %Y",
                month:"%B %Y",
                year:"%Y"
            }',
            'value' => NULL
        ),
        'enabled' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'followPointer' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'followTouchMove' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'footerFormat' => array(
            'type' => 'string',
            'default' => false,
            'value' => NULL
        ),
        'formatter' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'headerFormat' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'hideDelay' => array(
            'type' => 'integer',
            'default' => 500,
            'value' => NULL
        ),
        'pointFormat' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'positioner' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'shadow' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'shared' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'snap' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'style' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'useHTML' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'valueDecimals' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'valuePreffix' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'valueSuffix' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'xDateFormat' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        )
    );

    /**
     * Retorna o Json contento o elemento Tooltip
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
        $this->code = 'tooltip: ' . json_encode($data);
        return parent::render();
    }

}
