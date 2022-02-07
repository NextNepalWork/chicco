<?php

namespace App\Http\Requests;

use App\Models\Admin\Language;
use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        $size = Language::count();
        $id = 0;
        if (isset($this->page['id'])) {
            $id = $this->page['id'];
        }
        return [
            'slug' => 'required|string|unique:pages,slug,' . $id,
            'title' => 'required|array',
            'title.*' => 'string|max:191',
            'description' => 'required|array',
            'description.*' => 'string',
            'language_id' => 'required|array|exists:languages,id',
        ];
    }
}
