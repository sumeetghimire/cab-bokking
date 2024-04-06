<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = "Test2";
        return view('index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email',
        'phoneNumber' => 'required|string|unique:users,phoneNumber',
        'password' => 'required|string|min:8',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 422);
    }

    $user = new User();
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->phoneNumber = $request->input('phoneNumber');
    $user->password = bcrypt($request->input('password'));
    $user->save();

    return view('index');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
