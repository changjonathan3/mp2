<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class DeleteCarTest extends TestCase
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
        $year = $car->Year;
        $car->delete();
        $this->assertDatabaseMissing('cars', [
            'Make' => $make,
            'Model' => $model,
            'Year' => $year
        ]);    }
}
