<?php

namespace Tests\Feature;

use App\Models\Contact;
use Database\Seeders\PortfolioSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_portfolio_page_is_accessible(): void
    {
        $this->seed(PortfolioSeeder::class);

        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Quantum Analytics Suite');
        $response->assertSee('Full-Stack Software Engineer');
    }

    public function test_contact_form_can_be_submitted_via_ajax(): void
    {
        $payload = [
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'subject' => 'Proyek Web Application Baru',
            'message' => 'Halo, kami ingin berdiskusi mengenai proyek sistem berbasis Laravel.',
        ];

        $response = $this->postJson('/contact', $payload);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
        ]);

        $this->assertDatabaseHas('contacts', [
            'email' => 'budi@example.com',
            'name' => 'Budi Santoso',
        ]);
    }

    public function test_contact_form_requires_valid_fields(): void
    {
        $response = $this->postJson('/contact', [
            'name' => '',
            'email' => 'not-an-email',
            'subject' => '',
            'message' => '',
        ]);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors(['name', 'email', 'subject', 'message']);
    }

    public function test_resume_download_works(): void
    {
        $response = $this->get('/resume/download');
        $response->assertStatus(200);
        $response->assertHeader('Content-Disposition', 'attachment; filename="Curriculum_Vitae_FullStack_Engineer.md"');
    }
}
