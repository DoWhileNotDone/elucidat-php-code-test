<?php

namespace App;

/**
 * Sell in period decreases daily
 * Quality increases daily
 * Once the sell by date has passed, Quality increases twice as fast
 * The Quality of an item is never more than 50
 */
class AgedBrieCalculator implements Calculator
{
    public function update(Item $item): Item
    {
        $item->sellIn -= 1;

        $item->quality += $this->getQualityDifference($item->sellIn);

        if ($item->quality > 50) {
            $item->quality = 50;
        }

        return $item;
    }

    private function getQualityDifference(int $sellIn): int
    {
        return $sellIn <= 0 ? 2 : 1;
    }
}
