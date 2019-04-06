<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class InsertCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = factory(Car::class)->create();
        $this->assertDatabaseHas('cars', [
            'Make' => $car->Make,
            'Model' => $car->Model,
            'Year' => $car->Year
        ]);    }
}
