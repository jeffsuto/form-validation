<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
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
            'nama'              => 'required|min:4|max:16',
            'jenis_kelamin'     => 'required',
            'tempat_lahir'      => 'required|min:4|max:16',
            'tanggal_lahir'     => 'required|date',
            'email'             => 'required|email',
            'alamat'            => 'nullable|between:4,16',
            'motto'             => 'nullable|max:128'
        ];
    }

    public function messages()
    {
        return [
            'required'           => 'Kolom harus diisi',
            'nama.min'           => 'Nama minimal 4 karakter',
            'nama.max'           => 'Nama maksimal 16 karakter',
            'tempat_lahir.min'   => 'Tempat lahir minimal 4 karakter',
            'tempat_lahir.max'   => 'Tempat lahir maksimal 16 karakter',
            'tanggal_lahir.date' => 'Tidak sesuai dengan format tanggal',
            'email'              => 'Tidak sesuai dengan format email',
            'alamat.between'     => 'Alamat harus antara 4 sampai 16 karakter',
            'motto.max:128'      => 'Motto maksimal 128 karakter'
        ];
    }
}
