<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\Test;

class UserTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    public function tearDown(): void
    {
        parent::tearDown();
    }

    #[Test]
    public function it_creates_a_new_user()
    {
        // Create a new user
        $user = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // Assert that the user is in the database
        $this->assertDatabaseHas('users', [
            'email' => 'john.doe@example.com',
            'role' => 'user',
        ]);
    }

    #[Test]
    public function it_updates_a_user()
    {
        // Create an existing user
        $user = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // Update the user
        $user->update([
            'first_name' => 'Jane',
            'role' => 'admin',
        ]);

        // Assert that the user is updated in the database
        $this->assertDatabaseHas('users', [
            'email' => 'john.doe@example.com',
            'first_name' => 'Jane',
            'role' => 'admin',
        ]);
    }

    #[Test]
    public function it_deletes_a_user()
    {
        // Create an existing user
        $user = User::create([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john.doe@example.com',
            'password' => bcrypt('password'),
            'role' => 'user',
        ]);

        // Delete the user
        $user->delete();

        // Assert that the user is deleted from the database
        $this->assertDatabaseMissing('users', [
            'email' => 'john.doe@example.com',
        ]);
    }
}