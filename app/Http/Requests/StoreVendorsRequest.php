<?php
namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreVendorsRequest extends Request
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
            'full_name' => 'required',
            'biz_name' => 'required',
            'website_1' => 'required',
            'email' => 'required|email',
            'prod_desc' => 'required',
            'booth_pref' => 'required',
            'paypal_email' => 'required|email',

        ];
    }
}
