<?php

namespace App\Http\Requests;

use App\Reaction;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


class CreateReactionRequest extends FormRequest
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
            'movieId' => $this->id,
        ]);

        return Validator::make($inputs, [
            'movieId' => 'exists:movies,id',
            'reactionType' => Rule::in(Reaction::REACTION_TYPE_DISLIKED, Reaction::REACTION_TYPE_LIKED)
        ]);
    }
}
