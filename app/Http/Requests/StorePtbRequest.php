<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class StorePtbRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kode' => ['required', 'string', 'max:255', 'unique:ptbs,kode'],
            'pt' => ['required', 'string', 'max:255'],
            'progressTerakhir' => ['required', 'string'],
            'status' => ['required', 'string'],
            'tgl' => ['required', 'date'],
            'deadline' => ['required', 'date'],
            'permasalahan' => ['required','string'],
            'progressReport' => ['required', 'string'],
            'pic' => ['required', 'string'],
        ];
    }
}
