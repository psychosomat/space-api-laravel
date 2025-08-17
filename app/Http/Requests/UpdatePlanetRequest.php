<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePlanetRequest extends FormRequest
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
        $planet = $this->route('planet');

        return [
		'name' => [
             'sometimes',
             'required',
             'string',
             'max:255',
             Rule::unique('planets')->ignore($planet->id),
         ],
		'description'  => 'sometimes|required|string',
		'size_km'      => 'sometimes|required|integer|min:100|max:500000',
		'solar_system' => 'required|string|max:100',
		'image_url' => 'nullable|url|max:2048',
		'is_habitable' => 'boolean'
     ];
    }
}
