<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:160'],
            'phone' => ['required', 'string', 'max:40'],
            'service' => ['required', 'string', 'in:Hajj and Umrah Visas,Flight Ticketing,Hotel Reservations,All Visa Categories,Travel Consultancy,General Contracts'],
            'message' => ['required', 'string', 'max:2000'],
            'website' => ['nullable', 'string', 'max:0'],
        ];
    }
}
