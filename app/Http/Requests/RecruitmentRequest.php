<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecruitmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $route = $this->route()->getName();

        $rule = [
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:2000',
            'period' => 'required|string|max:50',
            'number' => 'required|string|max:20',
            'due_date' => 'required|after:yesterday',
            'gain' => 'required|string|max:2000',
            'caution' => 'required|string|max:2000',
            'comment' => 'required|string|max:2000',
            'category_id' => 'required|exists:categories,id',
        ];

        if ($route == 'recruitments.update') {
            $rule['due_date'] = 'required|date';
        }

        return $rule;
    }
}
