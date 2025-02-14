<?php
use PHPUnit\Framework\TestCase; // 1
use Collect\Collect; // 2

class CollectTest extends TestCase // 3
{
    public function testKeysFunction() // 4
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']); // 5
        $this->assertEquals(['name', 'age', 'city'], $collection->keys()->toArray()); // 6
    }

    public function testValues() // 7
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']); // 8
        $this->assertEquals(['Alex', 25, 'Los Angeles'], $collection->values()->toArray()); // 9
    }

    public function testGet() // 10
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']); // 11
        $this->assertEquals(25, $collection->get('age')); // 12
        $this->assertEquals(null, $collection->get('surname')); // 13
    }

    public function testExcept() // 14
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']); // 15
        $this->assertEquals(['name' => 'Alex', 'city' => 'Los Angeles'], $collection->except('age')->toArray()); // 16
    }
}