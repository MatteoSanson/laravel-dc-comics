<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:2|max:60',
            'series' => 'required|min:5|max:100',
            'type' => 'required|min:5|max:40',
            'price' => 'required|numeric|min:0|regex:/^\d{1,8}(\.\d{2})?$/',
            'sale_date' => 'nullable|date_format:Y-m-d',
            'description' => 'nullable',
            'artists' => 'required|min:5|max:300',
            'writers' => 'required|min:5|max:300',
            'thumb_img' => 'nullable|url|ends_with:.jpeg,.jpg,.png,.svg,.webp,.bmp|max:400',
        ];
    }

    /**
     * messaggio per gli errori.
     *
     * @return array<string, 
     */
    public function messages()
    {
        return [
            'title.min' => 'Il campo "title" deve essere lungo almeno :min caratteri.',
            'title.max' => 'Il campo "title" non può superare i :max caratteri.',
            'type.min' => 'Il campo "type" deve essere lungo almeno :min caratteri.',
            'type.max' => 'Il campo "type" non può superare i :max caratteri.',
            'series.min' => 'Il campo "series" deve essere lungo almeno :min caratteri.',
            'series.max' => 'Il campo "series" non può superare i :max caratteri.',
            'sale_date.date_format' => 'Il campo "date" deve essere in formato YYYY-MM-DD.',
            'artists.min' => 'Il campo "artists" deve essere lungo almeno :min caratteri.',
            'artists.max' => 'Il campo "artists" non può superare i :max caratteri.',
            'writers.min' => 'Il campo "writers" deve essere lungo almeno :min caratteri.',
            'writers.max' => 'Il campo "writers" non può superare i :max caratteri.',
            'thumb_img.url' => 'Il campo "image" deve contenere una url.',
            'thumb_img.ends_with' => 'Il campo "image" deve terminare con .jpeg,.jpg,.png,.svg,.webp,.bmp.',
            'price.numeric' => 'Il campo "price" deve essere un numero',
            'price.regex' => 'Il campo "price" deve essere in un formato valido, i numeri interi separati da "." e 2 cifre come decimali',
        ];
    }
}
