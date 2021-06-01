<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Update user data
     *
     * @Response(
     *    code: 200
     *    description: updated user
     *    ref: User
     * )
     */
    public function patch(UpdateUserRequest $request) {}
}
