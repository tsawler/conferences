<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ConferenceRegistrationRequest extends Request {

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
            'title'         => 'required',
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required|email',
            'company'       => 'required',
            'zip'           => 'required',
            'city'          => 'required',
            'phone'         => 'required',
            'commission_id' => 'required',
            'conference_id' => 'required',
        ];
    }

}
