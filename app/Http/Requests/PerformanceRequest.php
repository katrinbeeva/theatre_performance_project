<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PerformanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'name_of_performance' => 'required|min:3|max:255',
             'performance_date' => 'required|min:2|max:255',
            // 'venue_id' => 'required|exist:venue,id',
            // 'image' => 'required|mimetypes:png,jpeg,jpg,webp.jfif'

        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
