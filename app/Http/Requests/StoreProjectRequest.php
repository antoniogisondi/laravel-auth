<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'titolo' => 'required|max:50',
            'descrizione' => 'required|max:255',
            'inizio_progetto' => 'required',
            'consegna_progetto' => 'required'
        ];
    }

    public function messages(){
        return [
            'titolo.required' => 'Il campo del titolo deve essere compilato',
            'titolo.max' => 'Il campo del titolo deve contenere al massimo :max caratteri',
            'descrizione.required' => 'Il campo della descrizione deve essere compilato',
            'descrizione.max' => 'Il campo della descrizione deve contenere al massimo :max caratteri',
            'inizio_progetto.required' => 'Il campo dell\' inizio del progetto deve essere compilato',
            'consegna_progetto.required' => 'Il campo dell\' inizio del progetto deve essere compilato',
        ];
    }
}
