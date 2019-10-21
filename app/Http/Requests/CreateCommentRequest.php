<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;


class CreateCommentRequest extends FormRequest
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

    public function validator()
    {
        $inputs = array_merge($this->all(), [
            'movie_id' => $this->id,
        ]);

        return Validator::make($inputs, [
            'movie_id' => 'exists:movies,id',
            'commentBody' => 'max:500|required'
        ]);
    }
}
