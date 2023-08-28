<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookPostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // create validation for isbn, title, author, image_path, publisher, category, page, language, publish_date, subjects, desc
        // only character and number and space
        return [
            'isbn' => 'required|regex:/^[a-zA-Z0-9 ]+$/',
            'title' => 'required',
            'author' => 'required',
            'image_path' => 'required',
            'publisher' => 'required',
            'category' => 'required',
            'page' => 'required',
            'language' => 'required',
            'publish_date' => 'required',
            'subjects' => 'required',
            'desc' => 'required'
        ];
    }
}
