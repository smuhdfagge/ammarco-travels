<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function storeFlight(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'trip_type' => ['required', 'in:one_way,round_trip,multi_city'],
            'departure' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'departure_date' => ['required', 'date'],
            'return_date' => ['nullable', 'date', 'after_or_equal:departure_date'],
            'passengers' => ['required', 'integer', 'min:1', 'max:20'],
            'cabin_class' => ['required', 'string', 'max:50'],
            'airline_preference' => ['nullable', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
        ]);

        $this->createEnquiry('flight', $validated);

        return back()->with('status', 'Flight enquiry received! A travel consultant will send you available fares shortly.');
    }

    public function storeHotel(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'destination' => ['required', 'string', 'max:255'],
            'check_in' => ['required', 'date'],
            'check_out' => ['required', 'date', 'after:check_in'],
            'guests' => ['required', 'integer', 'min:1', 'max:20'],
            'rooms' => ['required', 'integer', 'min:1', 'max:10'],
            'price_range' => ['nullable', 'string', 'max:100'],
            'hotel_category' => ['nullable', 'string', 'max:50'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
        ]);

        $this->createEnquiry('hotel', $validated);

        return back()->with('status', 'Hotel enquiry received! We\'ll send you options that match your dates and budget.');
    }

    public function storeVisa(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'destination_country' => ['required', 'string', 'max:255'],
            'visa_type' => ['nullable', 'string', 'max:100'],
            'travel_date' => ['nullable', 'date'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $this->createEnquiry('visa', $validated, $validated['message'] ?? null);

        return back()->with('status', 'Thank you — our visa team will review your request and get in touch with next steps.');
    }

    public function storeCorporate(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:255'],
            'company_size' => ['nullable', 'string', 'max:100'],
            'services_needed' => ['nullable', 'string', 'max:500'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $this->createEnquiry('corporate', $validated, $validated['message'] ?? null);

        return back()->with('status', 'Thank you — our corporate travel desk will contact you to discuss a tailored plan.');
    }

    public function storeQuote(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'departure_location' => ['required', 'string', 'max:255'],
            'destination' => ['required', 'string', 'max:255'],
            'travel_dates' => ['nullable', 'string', 'max:255'],
            'travellers' => ['required', 'integer', 'min:1', 'max:50'],
            'travel_type' => ['nullable', 'string', 'max:100'],
            'accommodation_preference' => ['nullable', 'string', 'max:100'],
            'budget_range' => ['nullable', 'string', 'max:100'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'message' => ['nullable', 'string', 'max:2000'],
        ]);

        $this->createEnquiry('quote', $validated, $validated['message'] ?? null);

        return back()->with('status', 'Your quote request has been received. A travel consultant will reach out within 24 hours with tailored options.');
    }

    public function storeContact(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['nullable', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        $this->createEnquiry('contact', $validated, $validated['message']);

        return redirect()->route('contact')->with('status', 'Thanks for reaching out! Our team will get back to you shortly.');
    }

    private function createEnquiry(string $type, array $data, ?string $message = null): Enquiry
    {
        return Enquiry::create([
            'type' => $type,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'] ?? null,
            'message' => $message,
            'details' => collect($data)->except(['name', 'email', 'phone', 'message'])->toArray(),
        ]);
    }
}
