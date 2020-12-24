<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateYoutuberRequest extends FormRequest
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
            'yt_name' => 'required|string|min:2|max:191',
            'c_ID' => 'required',
            'birthdate' => 'nullable|dateearlier:onboarddate',
            'onboarddate' => 'nullable',
            'education' => 'required|string|min:2|max:191',
            'year' => 'required|numeric|min:0|max:20',
            'country' => 'required|string|min:2|max:191'
            //
        ];
    }
}
