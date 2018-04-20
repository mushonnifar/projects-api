<?php

namespace App\Http\Controllers;

use App\Http\Model\Actions;
use Illuminate\Http\Request;

class ActionsController extends Controller {

    public function __construct(Request $request) {
        $this->middleware('authentication');
    }

    public function index() {
        $models = Actions::search();

        $response = $models;

        return response()->json($response, 200, [], JSON_PRETTY_PRINT);
    }

}
