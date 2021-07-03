<?php

namespace App;

class ItemCalculatorFactory
{
    public function getCalculator(Item $item): Calculator
    {
        return match ($item->name) {
            'Aged Brie' => new AgedBrieCalculator(),
            'Backstage passes to a TAFKAL80ETC concert' => new BackstagePassesCalculator(),
            'Sulfuras, Hand of Ragnaros' => new SulfurasCalculator(),
            'Conjured Mana Cake' => new ConjuredCalculator(),
            default => new NormalCalculator(),
        };
    }
}
