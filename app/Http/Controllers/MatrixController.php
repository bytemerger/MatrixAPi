<?php

namespace App\Http\Controllers;

use App\Helpers\MatrixManager;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class MatrixController extends Controller
{
    //
    public function multiply(Request $request, Response $response){
        $validator = Validator::make($request->all(), [
            'matrixA' => 'required|array',
            'matrixB' => 'required|array',
        ]);

        if ($validator->fails()) {
            $response->setStatusCode(400);
            $response->header('content-type', 'application/json');
            $response->setContent(["message" => $validator->errors()]);
            return $response;
        }
        $input = $validator->validated();
        var_dump($input['matrixA']);
        $result = MatrixManager::multiply($input['matrixA'],$input['matrixB']);
        if($result === false){
            $response->setStatusCode(400);
            $response->header('content-type', 'application/json');
            $response->setContent(["message" => "The matrix cannot be multiplied"]);
            return $response;
        }
        return $result;
    }
}
