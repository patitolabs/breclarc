<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVideoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'subject_id' => 'required|integer|exists:subjects,id',
            'week' => 'required|integer|between:1,52',
            'resource_url' => 'required|url|max:255',
            'description' => 'required|max:255',
            'part' => 'required|integer|between:1,10|lte:session_parts',
            'session_parts' => 'required|integer|between:1,10',
        ];
    }
}
