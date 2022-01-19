<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BanFilterRequest extends FormRequest
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
            'jail' => 'required_without_all:port,ban,country|array|min:1',
            'port' => 'required_without_all:jail,ban,country|array|min:1',
            'ban' => 'required_without_all:jail,port,country|array|max:1',
            'country' => 'required_without_all:jail,port,ban|array|min:1',
        ];
    }
}
