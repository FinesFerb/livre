<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBook extends FormRequest
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
            'title'=>'required|string|min:5|max:150',
            'cover'=>'required|image|mimes:pdf,jpg,png,gif,jpeg',
            'writer'=>'required|string|min:1|max:150',
            'category'=>'required|string|min:1|max:150',
            'country_str'=>'required|string|min:1|max:150',
            'time'=>'required|string|min:1|max:150',
            'year'=>'required|string|min:1|max:150',
            'age_limit'=>'required|string|min:1|max:150',
            'description'=>'required|string|min:5|max:1100',
            'data_izdaniy'=>'required|string|min:1|max:150',
            'volume'=>'required|string|min:1|max:150',
            'ISBN'=>'required|string|min:1|max:150',
            'translate'=>'required|string|min:1|max:150',
            'pdf'=>'required|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx'
        ];
    }
}
