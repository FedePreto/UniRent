<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

// Aggiunti per response JSON
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Symfony\Component\HttpFoundation\Response;

class NewHomeRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        // Nella form non mettiamo restrizioni d'uso su base utente
        // Gestiamo l'autorizzazione ad un altro livello
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *         $table->bigIncrements('id')->index();
     * @return array
     */
    public function rules() {
        return [
            'titolo' => 'required|max:30',
            'regione' => 'required',
            'citta' => 'required|max:30',
            'cap' => 'required|integer',
            'indirizzo' => 'required',
            'numero' => 'required|integer',
            'prezzo' => 'required|numeric|min:0',
            'descrizione' => 'required|max:2500',
            'superficie' => 'required|integer',
            'letti' => 'required|integer',
            'tipologia' => 'required|boolean',
            'foto' => 'file|mimes:jpeg,png|max:1024'
        ];
    }

    /**
     * Override: response in formato JSON
    */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY));
    }

}
