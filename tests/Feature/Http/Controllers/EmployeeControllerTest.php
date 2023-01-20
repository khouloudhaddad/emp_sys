<?php

namespace Tests\Feature\Http\Controllers;

use App\Jobs\ComputeSalary;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\EmployeeController
 */
class EmployeeControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function test_behaves_as_expected()
    {
        $employee = Employee::factory()->create();

        Queue::fake();

        $response = $this->get(route('employee.test'));

        Queue::assertPushed(ComputeSalary::class, function ($job) use ($employee) {
            return $job->employee->is($employee);
        });
    }
}
