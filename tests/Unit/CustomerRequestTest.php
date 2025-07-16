<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\CustomerRequest;
use App\Http\Requests\StoreCustomerRequestRequest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\Test;

class CustomerRequestTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    public function tearDown(): void
    {
        parent::tearDown();
    }

    #[Test]
    public function it_creates_a_new_customer_request()
    {
        // Create a new customer request
        $customerRequest = CustomerRequest::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '1234567890',
            'course_id' => 1,
            'start_date' => '2023-10-01',
            'nice_to_have' => 'Flexible schedule',
            'payment_method_id' => 1,
            'message' => 'I am interested in this course.',
        ]);

        // Assert that the customer request is in the database
        $this->assertDatabaseHas('customer_requests', [
            'email' => 'john.doe@example.com',
            'phone_number' => '1234567890',
        ]);
    }

    
    #[Test]
    public function it_updates_a_customer_request()
    {
        // Create an existing customer request
        $customerRequest = CustomerRequest::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '1234567890',
            'course_id' => 1,
            'start_date' => '2023-10-01',
            'nice_to_have' => 'Flexible schedule',
            'payment_method_id' => 1,
            'message' => 'I am interested in this course.',
        ]);

        // Update the customer request
        $customerRequest->update([
            'phone_number' => '0987654321',
            'nice_to_have' => 'Weekend classes',
        ]);

        // Assert that the customer request is updated in the database
        $this->assertDatabaseHas('customer_requests', [
            'email' => 'john.doe@example.com',
            'phone_number' => '0987654321',
            'nice_to_have' => 'Weekend classes',
        ]);
    }

    #[Test]
    public function it_deletes_a_customer_request()
    {
        // Create an existing customer request
        $customerRequest = CustomerRequest::create([
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone_number' => '1234567890',
            'course_id' => 1,
            'start_date' => '2023-10-01',
            'nice_to_have' => 'Flexible schedule',
            'payment_method_id' => 1,
            'message' => 'I am interested in this course.',
        ]);

        // Delete the customer request
        $customerRequest->delete();

        // Assert that the customer request is deleted from the database
        $this->assertDatabaseMissing('customer_requests', [
            'email' => 'john.doe@example.com',
        ]);
    }
}