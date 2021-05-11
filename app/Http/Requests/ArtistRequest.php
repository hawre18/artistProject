<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if($this->method() == 'POST') {
            return [
                'phone' => 'required|max:15',
                'cellPhone' => 'required|max:15',
                'email' => 'required',
                'address' => 'required',
                'body' => 'required',
            ];
        }

        return [
            'phone' => 'required|max:15',
            'cellPhone' => 'required|max:15',
            'email' => 'required',
            'address' => 'required',
            'body' => 'required',
        ];
    }
}
