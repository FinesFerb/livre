<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBook extends FormRequest
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
            'title'=>'sometimes|string|min:5|max:150',
            'cover'=>'sometimes|image|mimes:pdf,jpg,png,gif,jpeg',
            'writer'=>'sometimes|string|min:1|max:150',
            'category'=>'sometimes|string|min:1|max:150',
            'country_str'=>'sometimes|string|min:1|max:150',
            'time'=>'sometimes|string|min:1|max:150',
            'year'=>'sometimes|string|min:1|max:150',
            'age_limit'=>'sometimes|string|min:1|max:150',
            'description'=>'sometimes|string|min:5|max:1100',
            'data_izdaniy'=>'sometimes|string|min:1|max:150',
            'volume'=>'sometimes|string|min:1|max:150',
            'ISBN'=>'sometimes|string|min:1|max:150',
            'translate'=>'sometimes|string|min:1|max:150',
            'pdf'=>'sometimes|file|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx'
        ];
    }
}
