<?php

namespace App;

/**
 * Sell in period decreases daily
 * Quality decreases daily
 * Once the sell by date has passed, Quality degrades twice as fast
 * "Conjured" items degrade in Quality twice as fast as normal items
 * Quality cannot be negative
*/
class ConjuredCalculator implements Calculator
{
    public function update(Item $item): Item
    {
        $item->sellIn -= 1;

        $item->quality -= $this->getQualityDifference($item->sellIn);

        //If negative, set to zero
        if ($item->quality < 0) {
            $item->quality = 0;
        }

        return $item;
    }

    private function getQualityDifference(int $sellIn): int
    {
        return $sellIn <= 0 ? 4 : 2;
    }
}
