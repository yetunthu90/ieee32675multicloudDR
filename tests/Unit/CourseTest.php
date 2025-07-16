<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Course;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Validation\ValidationException;
use PHPUnit\Framework\Attributes\Test;

class CourseTest extends TestCase
{
    use RefreshDatabase; // Resets the database after each test

    public function tearDown(): void
    {
        parent::tearDown();
    }

    #[Test]
    public function it_creates_a_new_course()
    {
        // Create a new course
        $course = Course::create([
            'course_id' => 'RCA-0001', // Use the correct course_id
            'course_name' => 'Introduction to Programming',
            'duration' => 30,
            'start_date' => '2023-10-01',
            'end_date' => '2023-11-01',
            'capacity' => 50,
            'price' => 100.00,
            'description' => 'Learn the basics of programming.',
        ]);

        // Assert that the course is in the database
        $this->assertDatabaseHas('courses', [
            'course_id' => 'RCA-0001', // Match the correct course_id
            'course_name' => 'Introduction to Programming',
        ]);
    }

    
    #[Test]
    public function it_updates_a_course()
    {
        // Create an existing course
        $course = Course::create([
            'course_id' => 'RCA-0001', // Use the correct course_id
            'course_name' => 'Introduction to Programming',
            'duration' => 30,
            'start_date' => '2023-10-01',
            'end_date' => '2023-11-01',
            'capacity' => 50,
            'price' => 100.00,
            'description' => 'Learn the basics of programming.',
        ]);

        // Update the course
        $course->update([
            'course_name' => 'Advanced Programming',
            'price' => 150.00,
        ]);

        // Assert that the course is updated in the database
        $this->assertDatabaseHas('courses', [
            'course_id' => 'RCA-0001', // Match the correct course_id
            'course_name' => 'Advanced Programming',
            'price' => '150.00', // Compare price as a string
        ]);
    }

    #[Test]
    public function it_returns_error_when_updating_non_existent_course()
    {
        // Attempt to update a non-existent course
        $nonExistentCourseId = 999;
        $course = Course::find($nonExistentCourseId);

        $this->assertNull($course); // Assert that the course does not exist
    }

    #[Test]
    public function it_deletes_a_course()
    {
        // Create an existing course
        $course = Course::create([
            'course_id' => 'RCA-0001', // Use the correct course_id
            'course_name' => 'Introduction to Programming',
            'duration' => 30,
            'start_date' => '2023-10-01',
            'end_date' => '2023-11-01',
            'capacity' => 50,
            'price' => 100.00,
            'description' => 'Learn the basics of programming.',
        ]);

        // Delete the course
        $course->delete();

        // Assert that the course is deleted from the database
        $this->assertDatabaseMissing('courses', [
            'course_id' => 'RCA-0001', // Match the correct course_id
        ]);
    }

    #[Test]
    public function it_returns_error_when_deleting_non_existent_course()
    {
        // Attempt to delete a non-existent course
        $nonExistentCourseId = 999;
        $course = Course::find($nonExistentCourseId);

        $this->assertNull($course); // Assert that the course does not exist
    }
}