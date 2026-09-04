<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PagesTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_loads(): void
    {
        $this->get(route('home'))->assertStatus(200)->assertSee('Ammarco');
    }

    public function test_about_page_loads(): void
    {
        $this->get(route('about'))->assertStatus(200)->assertSee('About Ammarco Travels');
    }

    public function test_services_page_loads(): void
    {
        $this->get(route('services'))->assertStatus(200)->assertSee('Our Services');
    }

    public function test_contact_page_loads(): void
    {
        $this->get(route('contact'))->assertStatus(200)->assertSee('Contact Us');
    }

    public function test_contact_form_can_be_submitted(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'Hello, I would like a quote.',
        ]);

        $response->assertRedirect(route('contact'));
        $this->assertDatabaseHas('contact_messages', [
            'email' => 'test@example.com',
        ]);
    }
}
