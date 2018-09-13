<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Http\RedirectResponse;
// use Illuminate\Support\Facades\Redirect;
use App\Form;
use Storage;


class FormController extends Controller
{

  function append(Request $request) {
    try {
      $origList = Storage::disk('local')->exists('user-details.json') ? json_decode(Storage::disk('local')->get('user-details.json')) : [];
      $inputData = $request->only([ 'username', 'password','checkbox']);

      array_push($origList,$inputData);

      Storage::disk('local')->put('user-details.json', json_encode($origList, JSON_PRETTY_PRINT));

      $safeData = $request->only([ 'username', 'checkbox']);
      return $safeData;
      //This redirect is not working
      // return redirect('/')->with($inputData);

    } catch(Exception $e) {

      return ['error' => true, 'message' => $e->getMessage()];

    }
  }


}
