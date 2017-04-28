<?php

namespace HighCharts;

/**
 * Classe XAxis
 * 
 * Responsavel pelo elemento xAxis do highchart, posibilitando
 * a inserção de todas as propriedades definidas no javascript
 * 
 * @access public
 * @author Ronaldo Silva <ronaldo.silva@xsystems.com.br>
 */
class XAxis extends Axis{

    /**
     * Retorna o Json contento o elemento xAxis
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
        $this->code = 'xAxis' . ': ' . json_encode($data);
        return parent::render();
    }

}
