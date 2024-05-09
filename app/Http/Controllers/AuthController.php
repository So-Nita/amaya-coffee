<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;


class AuthController extends Controller
{
    
    // register api function
    public function register(Request $request) 
    {
        try
        {
            $validator = Validator::make($request->all(),[
                'firstName' => 'required',
                'lastName' => 'required',
                'email'    => 'required',
                'password' => 'required'
            ]);
    
            if($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validator->errors()->first()
                ]);
            }
    
            $user = User::create([
                'firstName'   => $request->firstName,
                'lastName'  => $request->lastName,
                'email'    => $request->email,
                'password' => Hash::make($request->password),
            ]);
    
            $user->createToken('token')->accessToken;
    
            return response()->json([
                'success' => true,
                'message' => 'User register successfully.'
            ]);
        }catch(Exception $e)
        {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    // Login api Funtion
    public function login(Request $request)
    {
        try {
            $credentials = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $request->user()->createToken($request->token_name);
                //return response()->json(['user' => $user, 'access_token' => $token], 200);
                // Redirect to '/cart' route upon successful login
                return redirect()->route('cartView');
            } else {
                // return response()->json(['error' => 'Unauthorized'], 401);
                // If authentication fails, throw ValidationException
                throw ValidationException::withMessages([
                    'email' => ['The provided credentials are incorrect.'],
                ]);
            }

        } catch (AuthenticationException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Login api Function
    // public function login(Request $request)
    // {
    //     try {
    //         $credentials = $request->validate([
    //             'email' => 'required|string|email',
    //             'password' => 'required|string',
    //         ]);

    //         if (Auth::attempt($credentials)) {
    //             $user = $request->user();
    //             $token = $user->createToken($request->token_name)->plainTextToken;
    //             return response()->json(['user' => $user, 'access_token' => $token], 200);
    //         } else {
    //             return response()->json(['error' => 'Unauthorized'], 401);
    //         }

    //     } catch (AuthenticationException $e) {
    //         return response()->json(['error' => $e->getMessage()], 401);
    //     } catch (Exception $e) {
    //         return response()->json(['error' => $e->getMessage()], 500);
    //     }
    // }

    
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json(['message' => 'Successfully logged out'], 200);
    }
}
