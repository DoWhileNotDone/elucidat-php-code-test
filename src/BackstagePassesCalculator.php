<?php

namespace App;

/**
 * Sell in period decreases daily
 * "Backstage passes", like aged brie, increases in Quality as its SellIn value approaches;
 *  Quality increases by 2 when there are 10 days or less
 *  and by 3 when there are 5 days or less
 *  but Quality drops to 0 after the concert
 */
class BackstagePassesCalculator implements Calculator
{
    public function update(Item $item): Item
    {
        $item->sellIn -= 1;

        $quality = $item->quality;

        switch (true) {
            case $item->sellIn < 0:
                $quality = 0;
                break;
            case $item->sellIn < 10 && $item->sellIn > 5:
                $quality += 2;
                break;
            case $item->sellIn <= 5:
                $quality += 3;
                break;
            default:
                $quality += 1;
                break;
        }

        $item->quality = $quality;
      
        if ($item->quality > 50) {
            $item->quality = 50;
        }

        return $item;
    }
}
