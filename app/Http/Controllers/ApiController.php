<?php

namespace App\Http\Controllers;

use App\Http\Model\AccessTokens;
use Illuminate\Http\Request;

class ApiController extends Controller {
//
//    public function __construct(Request $request) {
//        $this->middleware('authentication');
//    }

    public function cekToken(Request $request) {
        $token = $request->token;
        
        $response = [
            'status' => 'success'
        ];

        if ($token) {
            $response['message'] = $this->getStatusToken($token);
        } else {
            $response['message'] = 'null';
        }

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

    public function getStatusToken($token) {
        $access_token = AccessTokens::where(['token' => $token])->first();
        $message = '';

        if ($access_token) {
            if ($access_token->expires_at < time()) {
                $message = "expired";
            } else {
                $message = "active";
            }
            return $message;
        } else {
            $message = "not found";
            return $message;
        }
    }

}
