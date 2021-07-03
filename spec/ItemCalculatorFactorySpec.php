<?php

use App\AgedBrieCalculator;
use App\BackstagePassesCalculator;
use App\Calculator;
use App\ConjuredCalculator;
use App\Item;
use App\ItemCalculatorFactory;
use App\NormalCalculator;
use App\SulfurasCalculator;

describe('Item Calculator', function () {
    describe('get calculator for item', function () {
        context('Normal Items', function () {
            it('gets normal calculator', function () {
                $calculator = (new ItemCalculatorFactory())->getCalculator(new Item('normal', 10, 5));
                expect($calculator)->toBeAnInstanceOf(NormalCalculator::class);
                expect($calculator)->toBeAnInstanceOf(Calculator::class);
            });
        });
        context('Aged Brie Items', function () {
            it('gets aged brie calculator', function () {
                $calculator = (new ItemCalculatorFactory())->getCalculator(new Item('Aged Brie', 10, 5));
                expect($calculator)->toBeAnInstanceOf(AgedBrieCalculator::class);
                expect($calculator)->toBeAnInstanceOf(Calculator::class);
            });
        });
        context('Backstage Passes Items', function () {
            it('gets backstage passes calculator', function () {
                $calculator = (new ItemCalculatorFactory())->getCalculator(new Item('Backstage passes to a TAFKAL80ETC concert', 10, 5));
                expect($calculator)->toBeAnInstanceOf(BackstagePassesCalculator::class);
                expect($calculator)->toBeAnInstanceOf(Calculator::class);
            });
        });
        context('Sulfuras Items', function () {
            it('gets sulfuras calculator', function () {
                $calculator = (new ItemCalculatorFactory())->getCalculator(new Item('Sulfuras, Hand of Ragnaros', 10, 5));
                expect($calculator)->toBeAnInstanceOf(SulfurasCalculator::class);
                expect($calculator)->toBeAnInstanceOf(Calculator::class);
            });
        });
        context('Conjured Items', function () {
            it('gets conjured calculator', function () {
                $calculator = (new ItemCalculatorFactory())->getCalculator(new Item('Conjured Mana Cake', 10, 5));
                expect($calculator)->toBeAnInstanceOf(ConjuredCalculator::class);
                expect($calculator)->toBeAnInstanceOf(Calculator::class);
            });
        });
    });
});
 