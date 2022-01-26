<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'class'=>'required|numeric| min:9|max:14',
            'name'=>'required',
            'url'=>['required','url'],
            'points' => 'required|numeric|min:1|max:5',
            'message' => 'required',
            
        ];
    }
}
