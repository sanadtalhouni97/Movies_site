<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'blog_name'=>'required',
            'phone_number'=>'required',
            'blog_Email'=>'required',
            'address'=>'required',
            'linkedIn'=>'required',
            'twitter'=>'required',
            'facebook'=>'required',
        ];
    }
}
