<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStaffRequest extends FormRequest
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
        'required'          => 'Kolom ini masih kosong',
        'max.phone'         => 'Maximal karakter nomor telepon adalah 15 karakter',
        'name.max'          => 'Maximal karakter nomor telepon adalah 150 karakter',
        'unique.username'   => 'Username sudah digunakan'
      ];
    }

    public function all($keys = null){
      $data = parent::all();
      $data['password'] = 'thepassword';
      return $data;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name'      => 'required|string|max:150',
          'genre'     => 'required|integer|digits:1',
          'dob'       => 'required',
          'phone'     => 'required|string|max:15',
          'username'  => 'required|string|unique:staffs'
        ];
    }
}
