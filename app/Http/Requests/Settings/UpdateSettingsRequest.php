<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingsRequest extends FormRequest
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
            'site_name' => 'required|min:10,max:200',
            'google_analytics' => 'required',
            'inside_sfs_link' => 'required',
            'free_scholarship_link' => 'required',
            'free_webinar_snippet' => 'required',
            'fb_link' => 'string',
            'yt_link' => 'string',
            'tw_link' => 'string',
            'ig_link' => 'nullable'
        ];
    }
}
