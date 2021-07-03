<?php

namespace App;

use App\DailyItemChange\ItemCalculatorFactory;

class GildedRose
{
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItem($which = null)
    {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    public function nextDay()
    {
        foreach ($this->items as $item) {
            $calculator = (new ItemCalculatorFactory())->getCalculator($item);
            $item = $calculator->update($item);
        }
    }
}
