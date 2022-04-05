<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Employee;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Hash;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test view list of employees
     *
     * @return void
     */
    public function test_view_list_of_employees()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $employees = Employee::factory()->count(10)->create();

        $response = $this->actingAs($user)->get('/employees');

        $response->assertStatus(200);
    }

    /**
     * Text view an employee
     *
     * @return void
     */
    public function test_view_employee()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $employee = Employee::factory()->create();

        $response = $this->actingAs($user)->get('/employees/' . $employee->id);

        $response->assertStatus(200);
    }
}
