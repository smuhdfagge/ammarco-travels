<?php

namespace Tests\Feature;

use App\Models\Destination;
use App\Models\GuideArticle;
use App\Models\Package;
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

    public function test_flights_page_loads(): void
    {
        $this->get(route('flights'))->assertStatus(200)->assertSee('Flight Booking');
    }

    public function test_hotels_page_loads(): void
    {
        $this->get(route('hotels'))->assertStatus(200)->assertSee('Hotel Booking');
    }

    public function test_tours_page_loads(): void
    {
        $this->get(route('tours'))->assertStatus(200)->assertSee('Tours & Excursions');
    }

    public function test_visa_page_loads(): void
    {
        $this->get(route('visa'))->assertStatus(200)->assertSee('Visa Assistance');
    }

    public function test_corporate_page_loads(): void
    {
        $this->get(route('corporate'))->assertStatus(200)->assertSee('Corporate Travel Management');
    }

    public function test_quote_page_loads(): void
    {
        $this->get(route('quote'))->assertStatus(200)->assertSee('Request a Quote');
    }

    public function test_contact_page_loads(): void
    {
        $this->get(route('contact'))->assertStatus(200)->assertSee('Contact Us');
    }

    public function test_destinations_index_and_show(): void
    {
        $destination = Destination::factory()->create();

        $this->get(route('destinations.index'))->assertStatus(200);
        $this->get(route('destinations.show', $destination))->assertStatus(200)->assertSee($destination->name);
    }

    public function test_packages_index_and_show(): void
    {
        $package = Package::factory()->create();

        $this->get(route('packages.index'))->assertStatus(200);
        $this->get(route('packages.show', $package))->assertStatus(200)->assertSee($package->title);
    }

    public function test_guides_index_and_show(): void
    {
        $article = GuideArticle::factory()->create();

        $this->get(route('guides.index'))->assertStatus(200);
        $this->get(route('guides.show', $article))->assertStatus(200)->assertSee($article->title);
    }

    public function test_contact_form_can_be_submitted(): void
    {
        $response = $this->post(route('contact.submit'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'message' => 'Hello, I would like a quote.',
        ]);

        $response->assertRedirect(route('contact'));
        $this->assertDatabaseHas('enquiries', [
            'type' => 'contact',
            'email' => 'test@example.com',
        ]);
    }

    public function test_quote_form_can_be_submitted(): void
    {
        $response = $this->post(route('quote.submit'), [
            'departure_location' => 'Kano',
            'destination' => 'Dubai',
            'travellers' => 2,
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $response->assertRedirect(route('quote'));
        $this->assertDatabaseHas('enquiries', [
            'type' => 'quote',
            'email' => 'test@example.com',
        ]);
    }

    public function test_sitemap_is_accessible(): void
    {
        $this->get('/sitemap.xml')->assertStatus(200);
    }
}
