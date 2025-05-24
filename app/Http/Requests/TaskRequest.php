<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ubah menjadi true agar request ini bisa digunakan
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
            'task' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'is_completed' => 'required|boolean',
        ];
    }

    /**
     * Custom messages (optional).
     */
    public function messages(): array
    {
        return [
            'task.required' => 'Kolom tugas wajib diisi.',
            'user_id.required' => 'Kolom user wajib diisi.',
            'user_id.exists' => 'User tidak ditemukan.',
            'is_completed.required' => 'Status tugas harus diisi.',
            'is_completed.boolean' => 'Status tugas harus bernilai true atau false.',
        ];
    }
}
