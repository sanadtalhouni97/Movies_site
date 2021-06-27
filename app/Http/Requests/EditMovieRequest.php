<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMovieRequest extends FormRequest
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
            'movie_title'=>'required',
            'category_id'=>'required',
            'post_id'=>'required',
            'edit_movie'=>'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'about_movie'=>'required'
        ];
    }
}
