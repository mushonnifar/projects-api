<?php

namespace App\Http\Controllers;

use App\Http\Model\AccessTokens;
use App\Http\Model\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Lumen\Routing\Controller as BaseController;


class Controller extends BaseController {

    //
    protected function getIdentity(Request $request) {
        $headers = $request->headers->all();
        $token = $headers['x-access-token'];
        $access_token = AccessTokens::where(['token' => $token])->first();
        return $access_token;
    }

    protected function getToken(Request $request) {
        $token_timeout = Token::where('id',1)->first();
        
        $headers = $request->headers->all();
        $token = $headers['x-access-token'];
        
        $access_token = AccessTokens::where(['token' => $token])->first();
        
        $newtoken = Hash::make(uniqid());
        
        $access_token->token = $newtoken;
        $access_token->expires_at = time() + (60 * $token_timeout->valid_time); // 10 minutes
        $access_token->updated_at = time();
        $access_token->save();
        
        return $newtoken;
    }

    public function validate(Request $request, array $rules, array $messages = [], array $customAttributes = []) {

        $validator = $this->getValidationFactory()->make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            $response = [
                'status' => 0,
                'status_txt' => "errors",
                'message' => $validator->errors()
            ];

            response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
            die();
        }

        return true;
    }

}
