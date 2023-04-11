<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class InstrumentRequest1 extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'options1' => 'required',
            'options2' => 'required',
            'options3' => 'required',
            'options4' => 'required',
            'options5' => 'required',
            'options6' => 'required',
            'options7' => 'required',
            'options8' => 'required',
            'options9' => 'required',
            'options10' => 'required',
            'options11' => 'required',
            'options12' => 'required',
            'options13' => 'required',
            'options14' => 'required',
            'options15' => 'required',
            'options16' => 'required',
            'options17' => 'required',
            'options18' => 'required',
            'options19' => 'required',
            'options20' => 'required',
            'options21' => 'required',
            'options22' => 'required'
        ];
    }
}
