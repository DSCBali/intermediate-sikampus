<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreScheduleRequest extends FormRequest
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

    public function messages()
    {
        return [
          'required'      => 'Kolom ini masih kosong',
          'integer'       => 'Kolom ini harus berupa integer',
          'date'          => 'Format tanggal tidak valid',
          'required.class_id'   => 'Silahkan pilih kelas yang tersedia',
          'required.course_id'  => 'Silahkan pilih matakuliah yang tersedia'
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
            'day'         => 'required|date',
            'time'        => 'required|string',
            'course_id'   => 'required|integer',
            'class_id' => 'required|integer'
        ];
    }
}
