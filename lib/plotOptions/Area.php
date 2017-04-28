<?php

namespace HighCharts\PlotOptions;

class Area extends PlotOptions{

    public function render(){
        $data = array();
        foreach($this->definitions as $key => $definition){
            if($definition['value'] !== NULL && $definition['default'] !== $definition['value']){
                $data[$key] = $definition['value'];
            }
        }
        $this->code = 'plotOptions: ' . json_encode(array('area' => $data));
        return parent::render();
    }

}
