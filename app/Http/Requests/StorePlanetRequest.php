<?php

namespace App\Http\Requests;

use App\Rules\ValidPlanetName;
use Illuminate\Foundation\Http\FormRequest;

class StorePlanetRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

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
			'name' => [
				'sometimes',
				'string',
				'max:255',
				'unique:planets',
				new ValidPlanetName,
			],
			'description' => 'sometimes|string',
			'size_km' => 'sometimes|integer|min:100|max:500000',
			'solar_system' => 'sometimes|string|max:100',
			'image_url' => 'nullable|url|max:2048',
			'is_habitable' => 'sometimes|boolean'
		];
    }

	public function messages()
	{
		return [
			'name.unique' => 'The planet with this name already exists!',
			'size_km.min' => 'Diameter cannot be less than 100 km'
		];
	}
}
