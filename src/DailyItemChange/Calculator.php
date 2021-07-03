<?php

namespace App\DailyItemChange;

use App\Item;

interface Calculator
{
    public function update(Item $item): Item;
}
