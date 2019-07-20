<?php

namespace App\Http\Requests\Channels;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChannelsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        //only the auth users can authorize and update the channels

       return $this->channel->user_id == auth()->user()->id ;
       //only the owner of channel can update the channel

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //

            'name'         => 'required',
            'image'        => 'image|required',
            'description'  => 'max:1000'
        ];
    }
}
