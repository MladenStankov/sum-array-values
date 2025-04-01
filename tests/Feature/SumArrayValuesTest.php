<?php

namespace Tests\Feature;

use Tests\TestCase;

class SumArrayValuesTest extends TestCase
{
    public function test_sum_without666()
    {
        $this->assertEquals(10, sumArrayValues([1, 2, 3, 4]));
    }

    public function test_sum_with666()
    {
        $this->assertEquals(900, sumArrayValues([500, 666, 500]));
    }

    public function test_multiple666()
    {
        $this->assertEquals(800, sumArrayValues([500, 666, 666, 500]));
    }

    public function test_empty_array()
    {
        $this->assertEquals(0, sumArrayValues([]));
    }
}
