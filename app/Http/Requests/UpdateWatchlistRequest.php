<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;

class UpdateWatchlistRequest extends FormRequest
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
        $inputs =  [
            'id' => $this->watchlist,
        ];

        return Validator::make($inputs, [
            'id' => 'exists:movies',
        ]);
    }
}
