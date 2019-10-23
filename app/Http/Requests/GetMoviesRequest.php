<?php

namespace App\Http\Requests;

use App\Movie;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\FormRequest;

class GetMoviesRequest extends FormRequest
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
    public function validator()
    {
        $inputs = [
            'genreId' => $this->genreId,
            'sortBy' => $this->sortBy,
            'searchTerm' => $this->searchTerm
        ];

        return Validator::make($inputs, [
            'genreId' => 'nullable|exists:genres,id',
            'searchTerm' => 'nullable',
            'sortBy' => ['nullable', Rule::in(Movie::SORT_BY_COLUMNS)]
        ]);
    }
}
