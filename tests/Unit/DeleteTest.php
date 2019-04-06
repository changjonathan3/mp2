<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::inRandomOrder()->first();
        $name = $user->name;
        $email = $user->email;
        $user->delete();
        $this->assertDatabaseMissing('users', [
            'name' => $name,
            'email' => $email
        ]);
    }
}
