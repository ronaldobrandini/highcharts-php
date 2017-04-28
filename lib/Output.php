<?php

namespace HighCharts;

use Exception\DefinitionNotFoundException;
use Exception\DefinitionValueInvalidException;

/**
 * Classe responsavel pela saída do codigo javascript em si
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 */
class Output{

    /**
     * Armazena o codigo javascript que sera enviado para o navegador.
     * @access protected
     * @var string 
     */
    protected $code;

    /**
     * Retorna o codigo javascript amarmazenado.
     * @access protected
     * @return string
     */
    protected function render(){
        if(!$this->code){
            return '_err: null';
        }
        return $this->code;
    }

    /**
     * Valida o tipo de dado passado no $value
     * @param type $value Valor que sera testado
     * @param type $type Tipo de dado 
     * @return boolean
     */
    protected function validate($value, $type){
        $funcName = 'is_' . $type;
        if(call_user_func($funcName, $value)){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Define o valor de uma propriedade do Chart
     * Verifica se esta com o tipo correto e se é diferente do valor padrão.
     * @param type $definition Nome da propriedade
     * @param type $value Valor da propriedade
     * @access public
     * @return void
     */
    public function setDefinitions($definition, $value){
        if(array_key_exists($definition, $this->definitions)){
            if($this->validate($value, $this->definitions[$definition]['type'])){
                if($this->definitions[$definition]['default'] !== $value){
                    $this->definitions[$definition]['value'] = $value;
                }
            }else{
                throw new DefinitionValueInvalidException();
            }
        }else{
            throw new DefinitionNotFoundException();
        }
    }

}
