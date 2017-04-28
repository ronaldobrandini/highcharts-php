<?php

namespace HighCharts;

/**
 * Classe responsavel pela propriedade Series do HighChart
 * 
 * @package core.tools.highchart 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
class Series extends Output{

    /**
     * Definições utilizadas no highcharts Series
     * Armazena a propriedade, o tipo de dados aceitos, o valor
     * default e o valor em si.
     * 
     * @access protected
     * @var array 
     */
    protected $definitions = array(
        'data' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'id' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'index' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'legendIndex' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        ),
        'name' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'stack' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'type' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'xAxis' => array(
            'type' => 'string',
            'default' => '0',
            'value' => NULL
        ),
        'yAxis' => array(
            'type' => 'string',
            'default' => '0',
            'value' => NULL
        ),
        'zIndex' => array(
            'type' => 'integer',
            'default' => NULL,
            'value' => NULL
        )
    );

    public function __construct($data = array()){
        $this->setDefinitions('data', $data);
    }

    /**
     * Retorna o Json contento os elementos Series
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
        $this->code = json_encode($data);
        return parent::render();
    }

}
