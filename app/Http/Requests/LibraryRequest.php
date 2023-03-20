<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class LibraryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $title_unique = Rule::unique('library', 'title');
        if ($this->method() !== 'POST') {
            $title_unique->ignore($this->route()->parameter('id'));
        }
        return [
            'title' => ['required', $title_unique],
            'author' => ['required'],
            'pages' => ['required', 'integer'],
            'status' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title must be filled!',
            'title.unique' => 'The book title already exists in the list',
            'author.required' => 'Book author must be filled!',
            'pages.required' => 'Number of pages must be filled',
            'pages.integer' => 'Number of pages must be filled with numbers!',
            'status.required' => 'Book status must be filled!'
        ];
    }
}
