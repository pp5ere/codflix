<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Category;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $category = new Category();
        $this->assertEquals(
            ['name', 'description', 'is_active'],
            $category->getFillable()
        );
    }
}
