<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
    public function test_redirects()
    {
        $employee = Employee::factory()->create();

        $response = $this->get(route('employee.test'));

        $response->assertRedirect(route('employee.show', [$employee.id]));
    }


    /**
     * @test
     */
    public function showEmployee_behaves_as_expected()
    {
        $employee = Employee::factory()->create();

        $response = $this->get(route('employee.showEmployee'));
    }
}
