<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class LoginController extends Controller
{
  function auth(Request $request) {
    try {
      $origList = json_decode(Storage::disk('local')->get('user-details.json'), true);
      $inputData = $request->only([ 'username', 'password']);

      foreach($origList as $item) {
         if($item['username'] === $inputData['username']){
           if($item['password'] === $inputData['password']){
             $auth = 'true';
             return $auth;
           }
           else{
             $auth = 'false';
             return $auth;
           }
         }
         else{
           $auth = 'false';
           return $auth;
         }
       };

    } catch(Exception $e) {

      return ['error' => true, 'message' => $e->getMessage()];

    }
  }
}
