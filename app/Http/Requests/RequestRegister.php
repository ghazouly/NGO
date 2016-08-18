<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Validator;

class RequestRegister extends Request
{
  public function authorize()
  {
      return true;
  }
  public function rules()
  {
    return [
      'username' => 'required|max:60|unique:users',
      'password'=>'required|alpha_num|between:6,12|confirmed',
      'password_confirmation'=>'required|alpha_num|between:6,12',
    ];
  }
}
