<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119405,
        'name' => 'Mochammad Edrick firjatullah',
        'gender' => 'Male',
        'phone' => '081383515525',
        'class' => 'XII RPL 4'];
  }
}