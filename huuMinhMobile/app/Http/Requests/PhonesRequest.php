<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhonesRequest extends FormRequest
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
            'name' => 'required|min:2',
            'color' => 'required',
            'ram' => 'required',
            'internal_memory' => 'required',
            'sim' => 'required',
            'screen_size' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Cannot be empty',
            'name.min' => 'more than 2 ',
            'color.required' => 'Cannot be empty',
            'ram.required' => 'Cannot be empty',
            'internal_memory.required' => 'Cannot be empty',
            'sim.required' => 'Cannot be empty',
            'screen_size.required' => 'Cannot be empty',
            'price.required' => 'Cannot be empty',
        ];
    }
}
