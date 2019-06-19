<?php namespace App\Http\Requests\Admin\Student;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreStudent extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return  bool
     */
    public function authorize()
    {
        return Gate::allows('admin.student.create');
    }

/**
     * Get the validation rules that apply to the request.
     *
     * @return  array
     */
    public function rules()
    {
        return [
            'dob' => ['required', 'date'],
            'address' => ['required', 'string'],
            'mother_id' => ['nullable', 'integer'],
            'father_id' => ['nullable', 'integer'],
            'status' => ['required', 'string'],
            
        ];
    }
}
