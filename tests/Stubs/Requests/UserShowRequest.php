<?php

namespace Vigneshc91\LaravelSwagger\Tests\Stubs\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserShowRequest extends FormRequest
{
    public function rules()
    {
        return [
            'show_relationships' => 'boolean'
        ];
    }
}
