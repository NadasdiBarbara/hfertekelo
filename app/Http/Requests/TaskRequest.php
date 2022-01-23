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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'class'=>'required|min:9|max:14',
            'name'=>'required',
            'url'=>'required',
            'points' => 'required|min:1|max:5',
            'message' => 'required',
            
        ];
    }
}
