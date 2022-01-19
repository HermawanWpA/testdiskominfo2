<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MapsRequest extends FormRequest
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
        return [
            'lokasi1' => 'required|string|max:255',
            'lokasi2' => 'required|string|max:255',
        ];
    }
}
