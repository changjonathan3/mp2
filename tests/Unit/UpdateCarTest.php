<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Car::inRandomOrder()->first();
        $make = $car->Make;
        $model = $car->Model;
        $car->Year=2000;
        $car->save();
        $this->assertDatabaseHas('cars', [
            'Make' => $make,
            'Model' => $model,
            'Year' =>2000
        ]);    }
}
