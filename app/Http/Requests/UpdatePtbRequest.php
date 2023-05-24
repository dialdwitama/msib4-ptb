<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class UpdatePtbRequest extends FormRequest
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
            'tgl' => ['required', 'date'],
            'deadline' => ['required', 'date'],
            'status' => ['required', 'string'],
            'progressReport' => ['required', 'string'],
            'pic' => ['required', 'string'],
            'permintaan' => ['required', 'string'],
            'kegiatan' => ['required', 'string'],
            'hasil_keg' => ['required', 'string'],
            'lampiran' => ['required', 'string'],
            'ket' => ['required', 'string'],
        ];
    }
}
