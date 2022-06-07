<?php

namespace Mlk\Article\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Mlk\Article\Models\Article;

class ArticleRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() === true;
    }

    public function rules()
    {
        $rules = [
            'category_id' => 'required|exists:categories,id',
            'title' => 'required|string|min:3|max:190|unique:articles,title',
            'time_to_read' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
            'score' => 'required|numeric|in:0,1,2,3,4,5,6,7,8,9,10',
            'status' => ['required', Rule::in(Article::$statuses)],
            'type' => ['required', Rule::in(Article::$types)],
            'body' => 'required|string|min:3',
        ];

        if (request()->method === 'PATCH') {
            $rules['title'] = 'required|string|min:3|max:190|unique:articles,title,' . request()->id;
            $rules['image'] = 'nullable|mimes:jpg,jpeg,png|max:2048';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'score' => 'امتیاز'
        ];
    }
}
