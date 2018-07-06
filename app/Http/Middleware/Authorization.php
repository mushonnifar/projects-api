<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Model\User;
use App\Http\Model\AccessTokens;

class Authorization {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $route, $action) {
        $headers = $request->headers->all();
        $id = "";
        if (!empty($headers['x-access-token'][0])) {
            $id = $this->findIdentityByAccessToken($headers['x-access-token'][0]);
            if (!$this->cekAkses($id, $route, $action) > 0) {
                $response = [
                    'status' => 0,
                    'status_txt' => "errors",
                    'message' => "Unauthorized"
                ];
                response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
                die;
            }
        }
        return $next($request);
    }

    private function findIdentityByAccessToken($token) {
        $access_token = AccessTokens::where(['token' => $token])->first();

        if ($access_token) {
            if ($access_token->expires_at < time()) {

                $response = [
                    'status' => 0,
                    'status_txt' => "errors",
                    'message' => "Access token expired"
                ];
                response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
                die;
            }

            $data = User::where(['id' => $access_token->user_id])->first();

            return $data->id;
        } else {
            $response = [
                'status' => 0,
                'status_txt' => "errors",
                'message' => "Access token not found"
            ];
            response()->json($response, 400, [], JSON_PRETTY_PRINT)->send();
            die;
        }
    }

    private function cekAkses($id, $route, $action) {
        $akses = AccessTokens::cekAkses($id, $route, $action);
        return $akses;
    }

}
