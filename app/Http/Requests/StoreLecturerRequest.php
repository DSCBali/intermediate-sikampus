<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLecturerRequest extends FormRequest
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
          'name'    => 'required|string|max:150',
          'genre'   => 'required|integer|digits:1',
          'dob'     => 'required',
          'phone'   => 'required|string|max:15',
          'address' => 'required'
        ];
    }
}
