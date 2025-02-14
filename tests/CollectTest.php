<?php
use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase {
    public function testKeysFunction()
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']);
        $this->assertEquals(['name', 'age', 'city'], $collection->keys()->toArray());
    }

    public function testValues()
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']);
        $this->assertEquals(['Alex', 25, 'Los Angeles'], $collection->values()->toArray());
    }

    public function testGet()
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']);
        $this->assertEquals(25, $collection->get('age'));
        $this->assertEquals(null, $collection->get('surname'));
    }

    public function testExcept()
    {
        $collection = new Collect(['name' => 'Alex', 'age' => 25, 'city' => 'Los Angeles']);
        $this->assertEquals(['name' => 'Alex', 'city' => 'Los Angeles'], $collection->except('age')->toArray());
    }
}