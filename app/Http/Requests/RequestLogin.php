<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Validator;

class RequestLogin extends Request
{
  public function authorize()
  {
      return true;
  }
  public function rules()
  {
   return [
     'email' => 'required',
     'password'=>'required',
   ];
  }
}
