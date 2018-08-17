<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassRequest extends FormRequest
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

    public function messages(){
      return [
        'max'       => 'Maximal panjang kolom nama 100 karakter',
        'string'    => 'Kolom harus berupa string',
        'integer'   => 'Kolom harus berupa bilangan bulat',
        'required'  => 'Kolom tidak boleh kosong'
      ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'        => 'required|string|max:100',
            'max_students' => 'required|integer'
        ];
    }
}
