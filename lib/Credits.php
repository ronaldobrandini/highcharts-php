<?php

namespace HighCharts;

/**
 * Classe responsavel pelos Creditos do HighChart
 * 
 * @package core.tools.highchart 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
class Credits extends Output{

    /**
     * Definições utilizadas no highcharts Credits
     * Armazena a propriedade, o tipo de dados aceitos, o valor
     * default e o valor em si.
     * 
     * @access protected
     * @var array 
     */
    protected $definitions = array(
        'enabled' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'href' => array(
            'type' => 'string',
            'default' => 'http://www.highcharts.com',
            'value' => NULL
        ),
        'position' => array(
            'type' => 'array',
            'default' => array('align' => 'right', 'x' => -10, 'verticalAlign' => 'bottom', 'y' => -5),
            'value' => NULL
        ),
        'style' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'text' => array(
            'type' => 'string',
            'default' => 'Highcharts.com',
            'value' => NULL
        ),
    );

    /**
     * Retorna o Json contento o elemento Credito
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
        $this->code = 'credits: ' . json_encode($data);
        return parent::render();
    }

}
