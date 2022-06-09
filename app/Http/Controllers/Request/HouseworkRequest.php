<?php

namespace App\Http\Controllers\Request;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class HouseworkRequest extends FormRequest
{
    
    
    public function rules()
    {
        return [
       'housework.title' =>'required|string',
       'housework.memo' =>'required|string',
        ];
    }
}
