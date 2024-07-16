<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|min:3',
            'description' => 'nullable|string|max:900',
            'thumb' => 'nullable|string|max:512',
            'price' => 'required|decimal:2',
            'series' => 'nullable|string',
            'sale_date' => 'required|date',
            'type' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'title' => 'Il titolo è obbligatorio e deve avere un minimo di 3 e un massimo di 255 caratteri',
            'description' => 'La descrizione può essere al massimo di 900 caratteri',
            'thumb' => "L' indirizzo dell'immagine è troppo lungo",
            'price' => 'Il prezzo è obbligatorio',
            'series' => 'La serie non può essere un numero',
            'sale_date' => 'La data di vendita è obbligatoria',
            'type' => 'Scegliere una tra le opzioni',
        ];
    }
}
