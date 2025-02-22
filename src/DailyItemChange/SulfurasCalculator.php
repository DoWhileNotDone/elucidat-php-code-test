<?php

namespace App\DailyItemChange;

use App\Item;

/**
 * A sulfurus item never has to be sold or decreases in Quality
 */
class SulfurasCalculator implements Calculator
{
    public function update(Item $item): Item
    {
        return $item;
    }
}
