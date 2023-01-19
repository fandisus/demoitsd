<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {
    public function login(Request $request) {
        // return $request->all();
        // return response()->json($request->all());
        return response()->json(
            ['data'=>[
                ['nama'=>'abe', 'gender'=>'pria'],
                ['nama'=>'bella', 'gender'=>'wanita'],
                ['nama'=>'charlie', 'gender'=>'pria'],
                ['nama'=>'desi', 'gender'=>'wanita'],

            ]]
        );
    }
}
