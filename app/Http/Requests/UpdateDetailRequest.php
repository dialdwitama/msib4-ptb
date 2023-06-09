<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use Hashids;
use Redirect;
use Request;
use Hash;

final class UpdateDetailRequest extends FormRequest
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
            'tgl' => ['required', 'date'],
            'permintaan' => ['required', 'string'],
            'kegiatan' => ['required', 'string'],
            'hasil_keg' => ['required', 'string'],
            'lampiran' => ['required', 'string'],
            'ket' => ['required', 'string'],
        ];
    }
}
