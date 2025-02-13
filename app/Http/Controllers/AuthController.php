<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignInRequest;
use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function signin(Request $request){
        try{
            $credencial = $request->validate([
                'email' => 'required|min:4|max:60',
                'password' => 'required|min:5|max:20'
            ]);

            if(!Auth::guard('web')->attempt($credencial)){
                throw new AuthenticationException();
            }

            $user = Auth::guard('web')->user();
            $token = $user->createToken('userToken')->plainTextToken;


            return response()->json([
                'status' => 'success',
                'token' => $token
            ], 200);

        } catch(ValidationException $e)
        {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 401);

        } catch(AuthenticationException $e)
        {
            return response()->json([
                'status' => 'error',
                'message' => 'username dan password tidak terdaftar'
            ], 401);

        } catch(Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e
            ], 401);
        }

    }

    public function signout(Request $request){
        try{

            $request->user()->currentAccessToken()->delete();
            return response()->json([], 204);

        } catch(Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e
            ], 401);
        }
    }

    public function getUser(Request $request){
        try{

            $user = $request->user();
            return response()->json([
                'status' => 'success',
                'data' => $user
            ], 200);

        } catch(Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e
            ], 401);
        }
    }
}
