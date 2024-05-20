<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'thumb' => 'required|min:20|max:65353',
            'price' => 'required|min:6|max:10',
            'series' => 'required|min:5|max:50',
            'sale_date' => 'required',
            'type' => 'required|min:4|max:30',
            'artists' => 'required|min:2',
            'writers' => 'required|min:2 ',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.min' => 'Il titolo deve contenere almeno :min caratteri',
            'title.max' => 'Il titolo non può contenere più di :max caratteri',
            'thumb.required' => 'La thumb è un campo obbligatorio',
            'thumb.min' => 'La thumb deve contenere almeno :min caratteri',
            'thumb.max' => 'La thumb non può contenere più di :max caratteri',
            'price.required' => 'Il prezzo è un campo obbligatorio',
            'price.min' => 'Il prezzo deve contenere almeno :min caratteri',
            'price.max' => 'Il prezzo non può contenere più di :max caratteri',
            'series.required' => 'La serie è un campo obbligatorio',
            'series.min' => 'La serie deve contenere almeno :min caratteri',
            'series.max' => 'La serie non può contenere più di :max caratteri',
            'sale_date.required' => 'Il giorno di vendita è un campo obbligatorio',
            'type.required' => 'Il tipo è un campo obbligatorio',
            'type.min' => 'Il tipo deve contenere almeno :min caratteri',
            'type.max' => 'Il tipo non può contenere più di :max caratteri',
            'artists.required' => 'Artisti è un campo obbligatorio',
            'artists.min' => 'Artisti deve contenere almeno :min caratteri',
            'writers.required' => 'Scrittori è un campo obbligatorio',
            'writers.min' => 'Scrittori deve contenere almeno :min caratteri',
        ];
    }
}
