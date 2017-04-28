<?php

namespace HighCharts;
/**
 * Classe responsavel pelas Legendas do HighChart
 * 
 * @package core.tools.highchart 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
class Legend extends Output{
    /**
     * Definições utilizadas no highcharts Credits
     * Armazena a propriedade, o tipo de dados aceitos, o valor
     * default e o valor em si.
     * 
     * @access protected
     * @var array 
     */
    protected $definitions = array(
        'align' => array(
            'type' => 'string',
            'default' => 'center',
            'value' => NULL
        ),
        'backgroundColor' => array(
            'type' => 'string',
            'default' => 'center',
            'value' => NULL
        ),
        'borderColor' => array(
            'type' => 'string',
            'default' => '#909090',
            'value' => NULL
        ),
        'borderRadius' => array(
            'type' => 'integer',
            'default' => 5,
            'value' => NULL
        ),
        'borderWidth' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'enabled' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'floating' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'itemDistance' => array(
            'type' => 'integer',
            'default' => 8,
            'value' => NULL
        ),
        'itemHiddenStyle' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'itemHoverStyle' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'itemMarginBottom' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'itemMarginTop' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'itemStyle' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'labelFormat' => array(
            'type' => 'string',
            'default' => '{name}',
            'value' => NULL
        ),
        'labelFormatter' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'layout' => array(
            'type' => 'string',
            'default' => 'horizontal',
            'value' => NULL
        ),
        'lineHeight' => array(
            'type' => 'integer',
            'default' => 16,
            'value' => NULL
        ),
        'margin' => array(
            'type' => 'integer',
            'default' => 15,
            'value' => NULL
        ),
        'maxHeight' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'navigation' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'padding' => array(
            'type' => 'integer',
            'default' => 8,
            'value' => NULL
        ),
        'reversed' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'rtl' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'shadow' => array(
            'type' => 'string',
            'default' => 'false',
            'value' => NULL
        ),
        'style' => array(
            'type' => 'array',
            'default' => array(),
            'value' => NULL
        ),
        'symbolHeight' => array(
            'type' => 'integer',
            'default' => 12,
            'value' => NULL
        ),
        'symbolPadding' => array(
            'type' => 'integer',
            'default' => 5,
            'value' => NULL
        ),
        'symbolRadius' => array(
            'type' => 'integer',
            'default' => 2,
            'value' => NULL
        ),
        'symbolWidth' => array(
            'type' => 'integer',
            'default' => 16,
            'value' => NULL
        ),
        'title' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'useHTML' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'verticalAlign' => array(
            'type' => 'string',
            'default' => 'bottom',
            'value' => NULL
        ),
        'width' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'x' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'y' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        )
    );

    /**
     * Retorna o Json contento os elementos Legend
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
        $this->code = 'legend: ' . json_encode($data);
        return parent::render();
    }

}
