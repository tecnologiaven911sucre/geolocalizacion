<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDrawersRequest extends FormRequest
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
            'name' => 'required',
            "code" => 'required|alpha_num',
            "serial_t_lindus" => 'required|numeric',
            "ip_t_lindus" => 'required|ip',
            "order" => 'required|alpha_num',
            "circuit" => 'required|numeric',
            "location" => 'required',
            "vlan" => 'required|numeric',
            "command_id" => 'required',
            "operability_id" => 'required'
        ];
    }
}
