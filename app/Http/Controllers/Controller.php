<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $users = User::all();
        return response()->json([
            'status' => true,
            'message' => 'Get All User',
            'data' => $users
        ], 200);
    }
    public function store(UserRequest $request)
    {
        try {
            $validate = $request->validated();
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Created User Successfully',
                'data'   => $user,
            ], 201); //create success status 201

        } catch (\Exception $e) {
            echo '' . $e->getMessage();
        }
    }
    public function getUser(int $id)
    {
        try {

            $user = User::Find($id);
            return response()->json([
                'status' => true,
                'message' => 'Get User 1 Row',
                'data'   => $user,
            ], 200);
        } catch (\Exception $e) {
            echo '' . $e->getMessage();
        }
    }
    public function destroy(int $id)
    {
        $user = User::FindOrfail($id);
        $user->delete();
        return response()->json([
            'status' => true,
            'message' => 'delete successfully',
            'data'   => $user
        ], 200);
    }
    public function update(Request $request, int $id)
    {
        try {

            $user = User::findOrFail($id);

            $user->name = $request->name;
            $user->email = $request->email;

            if ($request->filled('password')) {
                $user->password = Hash::make($request->password);
            }

            $user->save();

            return response()->json([
                'status' => true,
                'message' => 'User Updated Successfully',
                'data' => $user,
            ]);
        } catch (\Exception $e) {

            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }
}
