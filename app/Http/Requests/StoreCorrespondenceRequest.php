<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCorrespondenceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'file_number' => 'string|max:20',
            'subject' => 'required|string|max:255',
            'filing_area_id' => 'required|integer',
            'received_from' => 'required|string|max:255',
            'correspondence_date' => 'required|string',
            'date_received' => 'required|string',
            'date_sent' => 'required|string',
            'comments' => 'string|max:255',
            'flagged' => 'boolean',
            'user_id' => 'required|integer',
            'creator_department_id' => 'required|integer',
        ];
    }
}
