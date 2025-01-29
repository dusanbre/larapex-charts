<?php

namespace Dusanbre\LarapexCharts;


use Dusanbre\LarapexCharts\Contracts\MustAddSimpleData;
use Dusanbre\LarapexCharts\Traits\SimpleChartDataAggregator;

class RadialChart extends LarapexChart implements MustAddSimpleData
{
    use SimpleChartDataAggregator;

    public function __construct()
    {
        parent::__construct();
        $this->type = 'radialBar';
    }

    public function addRings(array $data) :RadialChart
    {
        $this->addData($data);
        return $this;
    }
}