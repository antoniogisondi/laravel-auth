<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'titolo' => 'required|max:5',
            'descrizione' => 'required|max:255',
            'inizio_progetto' => 'required|integer',
            'consegna_progetto' => 'required|integer'
        ];
    }

    public function messages(){
        return [
            'titolo.required' => 'Il campo del titolo deve essere compilato',
            'titolo.max' => 'Il campo del titolo deve contenere al massimo :max caratteri',
            'descrizione.required' => 'Il campo della descrizione deve essere compilato',
            'descrizione.max' => 'Il campo della descrizione deve contenere al massimo :max caratteri',
            'inizio_progetto.required' => 'Il campo dell\' inizio del progetto deve essere compilato',
            'inizio_progetto.integer' => 'Il campo dell\'inizio progetto deve essere di tipo numerico e deve contenere i seguenti caratteri: -',
            'consegna_progetto.required' => 'Il campo dell\' inizio del progetto deve essere compilato',
            'consegna_progetto.integer' => 'Il campo dell\'inizio progetto deve essere di tipo numerico e deve contenere i seguenti caratteri: -'
        ];
    }
}
