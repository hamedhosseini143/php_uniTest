<?php

use PHPUnit\Framework\TestCase;
use App\Support\Collection;

class CollectionTest extends TestCase
{
    /** @test */
    public function emptyInstantiationReturnsNoItems()
    {
        $collection = new Collection([]);
        $this->assertEmpty($collection->get());
    }

    /** @test */
    public function countIsCorrectForItemsPassedIn()
    {
        $collection = new Collection([1, 2, 3]);
        $this->assertEquals(3, $collection->count());
    }

    /** @test */
    public function itemsReturnedMatchPassedIn()
    {
        $items = [1, 2, 3];
        $collection = new Collection($items);

        $this->assertCount(count($items), $collection->get());
    }



}
