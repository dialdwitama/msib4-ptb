<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class UpdateMonevRequest extends FormRequest
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
            'kode' => ['required', 'string', 'max:255'],
            'nama_pt' => ['required', 'string', 'max:255'],
            'tanggal_monev' => ['required', 'date'],
            'permasalahan' => ['required', 'string'],
            'alamat_monev' => ['required', 'string'],
            'alamat_direktori' => ['required', 'string'],
            'alamat_pddikti' => ['required', 'string'],
            'hasil_monev' => ['string', 'nullable'],
        ];
    }
}
