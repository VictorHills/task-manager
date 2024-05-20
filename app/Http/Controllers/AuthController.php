<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

/**
 * @group Authentication Endpoints
 */
class AuthController extends Controller
{

    /**
     * Register a user on the system.
     * @param UserRequest $userRequest
     * @return UserResource|JsonResponse
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function register(UserRequest $userRequest): UserResource|JsonResponse
    {
        try {
            $user = User::create($userRequest->validated());

            return new UserResource($user);
        } catch (QueryException) {
            return $this->respondBadRequest('User could not be created');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }
    }

    /**
     * Login a specified user.
     * @param LoginRequest $request
     * @return JsonResponse
     * @apiResourceCollection App\Http\Resources\UserResource
     * @apiResourceModel App\Models\User
     */
    public function login(LoginRequest $request): JsonResponse
    {
        try {
            if (!Auth::attempt($request->validated())) {
                return $this->respondUnauthorized('Invalid credentials');
            }
            $user = Auth::user();
            $token = $user->createToken('Personal Access Token')->accessToken;

            return $this->respondSuccessWithData('Login Successful', ['token' => $token, 'userDetails' => new UserResource($user)]);
        } catch (QueryException) {
            return $this->respondBadRequest('Login failed');
        } catch (Exception $exception) {
            return $this->respondBadRequest($exception->getMessage());
        }
    }
}
