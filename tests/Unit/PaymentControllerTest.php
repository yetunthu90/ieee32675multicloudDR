<?php
namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Payment;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;

class PaymentControllerTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    public function tearDown(): void
    {
        parent::tearDown();
    }

    #[Test]
    public function it_fetches_all_payments()
    {
        // Create some payments in the database
        Payment::create(['payment_method' => 'PayPal']);
        Payment::create(['payment_method' => 'Credit Card']);

        // Call the controller method
        $controller = new PaymentController();
        $response = $controller->index();

        // Assert that the view is returned with the correct data
        $this->assertEquals('payments.index', $response->name());
        $this->assertArrayHasKey('payments', $response->getData());
    }

    #[Test]
    public function it_creates_a_new_payment()
    {
        // Mock request
        $request = Request::create('/payments', 'POST', [
            'payment_method' => 'Stripe'
        ]);

        // Call the store method
        $controller = new PaymentController();
        $response = $controller->store($request);

        // Assert redirection
        $this->assertEquals(302, $response->getStatusCode());
        $this->assertEquals(url('/payments'), $response->headers->get('Location'));

        // Assert that the payment is in the database
        $this->assertDatabaseHas('payments', [
            'payment_method' => 'Stripe',
        ]);
    }

    #[Test]
    public function it_does_not_allow_duplicate_payment_methods()
    {
        // Create an existing payment method
        Payment::create(['payment_method' => 'Stripe']);
    
        // Mock request with duplicate entry
        $request = Request::create('/payments', 'POST', [
            'payment_method' => 'Stripe'
        ]);
    
        // Call the store method
        $controller = new PaymentController();
        
        // Assert that the validation exception is thrown and it redirects back with errors
        try {
            $response = $controller->store($request);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Assert that the error message is for 'payment_method' field
            $this->assertEquals('The payment method has already been taken.', $e->validator->errors()->first('payment_method'));
        }
    }
    

    #[Test]
    public function it_updates_a_payment()
    {
        // Create an existing payment method
        $payment = Payment::create(['payment_method' => 'Old Payment Method']);

        // Mock request
        $request = Request::create('/payments/' . $payment->id, 'PUT', [
            'payment_method' => 'Google Pay'
        ]);

        // Call the update method
        $controller = new PaymentController();
        $response = $controller->update($request, $payment->id);

        // Assert redirection
        $this->assertEquals(302, $response->getStatusCode());

        // Assert that the payment is updated in the database
        $this->assertDatabaseHas('payments', [
            'payment_method' => 'Google Pay',
        ]);
    }

    #[Test]
    public function it_returns_error_when_updating_non_existent_payment_method()
    {
        $request = Request::create('/payments/999', 'PUT', [
            'payment_method' => 'Google Pay'
        ]);

        $controller = new PaymentController();
        $this->expectException(\Illuminate\Database\Eloquent\ModelNotFoundException::class);
        $controller->update($request, 999);
    }

    #[Test]
    public function it_deletes_a_payment()
    {
        // Create an existing payment method
        $payment = Payment::create(['payment_method' => 'Stripe']);

        // Call the destroy method
        $controller = new PaymentController();
        $response = $controller->destroy($payment->id);

        // Assert redirection
        $this->assertEquals(302, $response->getStatusCode());

        // Assert that the payment is deleted from the database
        $this->assertDatabaseMissing('payments', [
            'payment_method' => 'Stripe',
        ]);
    }

    #[Test]
    public function it_returns_error_when_deleting_non_existent_payment_method()
    {
        $controller = new PaymentController();
        $this->expectException(\Illuminate\Database\Eloquent\ModelNotFoundException::class);
        $controller->destroy(999);
    }
}
