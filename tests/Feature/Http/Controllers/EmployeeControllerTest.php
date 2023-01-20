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
    public function test_displays_view()
    {
        $employee = Employee::factory()->create();

        $response = $this->get(route('employee.test'));

        $response->assertOk();
        $response->assertViewIs('employee.show');
        $response->assertViewHas('employee');
    }
}
