<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Save extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => 'required',
            'email' => 'required',
            'telpon' => 'required|min:12',
            'alamat' => 'required',
            'pddkan' => 'required',
            'foto' => 'required|mimes:png,jpg'
        ];
    }
    public function messages():array
    {
        return[
        'nama.required'=>'asdsadas',
        'email.required'=>'adsadads',
        'telpon.min'=>'asdwafafa',
        'alamat.required'=>'asfafwafaw',
        'pddkan.requeired'=>'sadawafaf',
        'foto.mimes'=>'asfsafwafaf'
        ];
    }
}
