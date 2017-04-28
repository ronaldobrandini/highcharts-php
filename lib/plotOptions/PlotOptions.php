<?php

namespace HighCharts\PlotOptions;

abstract class PlotOptions extends \core\tools\highchart\Output{

    protected $definitions = array(
        'allowPointSelect' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'animation' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'color' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'connectEnds' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'connectNulls' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'cropThreshold' => array(
            'type' => 'integer',
            'default' => 300,
            'value' => NULL
        ),
        'cursor' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'dashStyle' => array(
            'type' => 'string',
            'default' => 'Solid',
            'value' => NULL
        ),
        'dataLabels' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'enableMouseTracking' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'events' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'fillColor' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'fillOpacity' => array(
            'type' => 'float',
            'default' => 0.75,
            'value' => NULL
        ),
        'format' => array(
            'type' => 'string',
            'default' => '{y}',
            'value' => NULL
        ),
        'formatter' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'lineColor' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'lineWidth' => array(
            'type' => 'integer',
            'default' => 2,
            'value' => NULL
        ),
        'linkedTo' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'marker' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'negativeColor' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'negativeFillColor' => array(
            'type' => 'string',
            'default' => NULL,
            'value' => NULL
        ),
        'point' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'pointInterval' => array(
            'type' => 'integer',
            'default' => 1,
            'value' => NULL
        ),
        'pointPadding' => array(
            'type' => 'float',
            'default' => 0.1,
            'value' => NULL
        ),
        'pointPlacement' => array(
            'type' => 'string',
            'default' => 'between',
            'value' => NULL
        ),
        'pointStart' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'selected' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'shadow' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'showCheckbox' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'showInLegend' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'stacking' => array(
            'type' => 'string',
            'default' => false,
            'value' => NULL
        ),
        'states' => array(
            'type' => 'array',
            'default' => NULL,
            'value' => NULL
        ),
        'stickyTracking' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        ),
        'threshold' => array(
            'type' => 'integer',
            'default' => 0,
            'value' => NULL
        ),
        'tooltip' => array(
            'type' => 'array',
            'default' => 0,
            'value' => NULL
        ),
        'trackByArea' => array(
            'type' => 'bool',
            'default' => false,
            'value' => NULL
        ),
        'turboThreshold' => array(
            'type' => 'integer',
            'default' => 1000,
            'value' => NULL
        ),
        'visible' => array(
            'type' => 'bool',
            'default' => true,
            'value' => NULL
        )
    );

    public function render(){
        return parent::render();
    }

}
