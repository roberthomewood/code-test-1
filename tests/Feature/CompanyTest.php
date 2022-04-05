<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\Company;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompanyTest extends TestCase
{    
    use RefreshDatabase;

    /**
     * Test view list of companies
     *
     * @return void
     */
    public function test_view_list_of_companies()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $companies = Company::factory()->count(10)->create();

        $response = $this->actingAs($user)->get('/companies');

        $response->assertStatus(200);
    }

    /**
     * Test view a company
     *
     * @return void
     */
    public function test_view_company()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $company = Company::factory()->create();

        $response = $this->actingAs($user)->get('/companies/' . $company->id);

        $response->assertStatus(200);
    }

    /**
     * Test creatoin of a new company
     *
     * @return void
     */
    public function test_create_a_company()
    {
        $user = User::factory()->create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $response = $this->actingAs($user)->from('companies/create')->post('/companies/create', [
            'name' => 'A Test Company'
        ]);

        $response->assertStatus(302);
        $response->assertValid(['name']);
    }
}
