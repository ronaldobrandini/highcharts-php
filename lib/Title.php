<?php

namespace HighCharts;

/**
 * Classe responsavel pelos Titulos e Subtitulos do HighChart
 * 
 * @package core.tools.highchart 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 * @version 1.0 25/04/2014 15:07:40;
 */
class Title extends Output{

    /**
     * Define se a classe represa um titulo ou um subtitulo
     * Por padrão representa um titulo
     * 
     * @access private
     * @var string 
     */
    private $type = 'title';

    /**
     * Definições utilizadas no highcharts Title
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
        'floating' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'margin' => array(
            'type' => 'integer',
            'default' => 'center',
            'value' => NULL
        ),
        'style' => array(
            'type' => 'array',
            'default' => array(),
            'value' => NULL
        ),
        'text' => array(
            'type' => 'string',
            'default' => 'Chart Title',
            'value' => NULL
        ),
        'useHtml' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'verticalAlign' => array(
            'type' => 'string',
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
     * Cria um novo Titulo ou Subtitulo.
     * 
     * @param string $type Define se retornara um Titulo ou Subtitulo
     * @return Title
     * @throws Exception Caso não passe os tipos possíveis dispara uma 
     * exception
     */
    public function __construct($type = 'title'){
        switch(strtolower($type)){
            case 'title':
                $this->type = $type;
                break;
            case 'subtitle':
                $this->type = $type;
                break;
            default :
                throw new Exception('Invalid type');
        }
    }

    /**
     * Retorna o Json contento os elementos Title
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
        $this->code = $this->type . ': ' . json_encode($data);
        return parent::render();
    }

}
