<?php

namespace App\Controllers;

class c_Home extends BaseController
{
  public function index()
  {
    return view('v_Home');
  }
}