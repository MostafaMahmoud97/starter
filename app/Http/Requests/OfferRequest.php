<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'name'=>'required|max:100|unique:offers,name',
            'price'=>'required|numeric',
            'detail'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __("messages.Offer Name is Required"),
            'name.max'=> __('messages.Offer Length must be 100 Char'),
            'name.unique' => __('messages.Offer Name must be Unique'),
            'price.required'=> __('messages.Offer Price is Required'),
            'price.numeric'=> __('messages.Offer Price must be Numeric'),
            'detail.required'=> __('messages.Offer Detail is Required')
        ];
    }
}
