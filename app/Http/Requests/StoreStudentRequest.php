<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Student;

class StoreStudentRequest extends FormRequest
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

    public function all($keys = null)
    {
        $data = parent::all();
        $year = now()->year;
        $nim = substr($year, 2, strlen($year));
        $data['nim'] = $nim.'00'.Student::count()+1;
        $data['password'] = 'alwaysthefirst';
        return $data;
    }

    public function messages(){
      return [
        'required'    => 'Kolom ini masih kosong',
        'max.phone'   => 'Maximal karakter nomor telepon adalah 15 karakter',
        'name.max'    => 'Maximal karakter nomor telepon adalah 150 karakter'
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
            'name'      => 'required|string|max:150',
            'genre'     => 'required|integer|digits:1',
            'dob'       => 'required',
            'phone'     => 'required|string|max:15',
            'address'   => 'required',
            'class_id'  => 'required|integer'
        ];
    }
}
