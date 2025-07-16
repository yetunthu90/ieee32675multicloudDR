<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Message;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\Test;

class MessageTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    public function tearDown(): void
    {
        parent::tearDown();
    }

    #[Test]
    public function it_creates_a_new_message()
    {
        // Create a new message
        $message = Message::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message.',
        ]);

        // Assert that the message is in the database
        $this->assertDatabaseHas('messages', [
            'email' => 'john.doe@example.com',
            'subject' => 'Test Subject',
        ]);
    }

    #[Test]
    public function it_updates_a_message()
    {
        // Create an existing message
        $message = Message::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message.',
        ]);

        // Update the message
        $message->update([
            'subject' => 'Updated Subject',
            'message' => 'This is an updated message.',
        ]);

        // Assert that the message is updated in the database
        $this->assertDatabaseHas('messages', [
            'email' => 'john.doe@example.com',
            'subject' => 'Updated Subject',
            'message' => 'This is an updated message.',
        ]);
    }

    #[Test]
    public function it_deletes_a_message()
    {
        // Create an existing message
        $message = Message::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'subject' => 'Test Subject',
            'message' => 'This is a test message.',
        ]);

        // Delete the message
        $message->delete();

        // Assert that the message is deleted from the database
        $this->assertDatabaseMissing('messages', [
            'email' => 'john.doe@example.com',
        ]);
    }
}