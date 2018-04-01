<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $user = [
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
            "accesLevel" => $request->accesLevel,
            "isDeleted" => $request->isDeleted
        ];

        $user = $this->user->create($user);

        return response()->json($user,200);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $user = $this->user->where("id", "=", "$id")->get(); 

       return response()->json($user,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usernew = [
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
            "accesLevel" => $request->accesLevel,
            "isDeleted" => $request->isDeleted
        ];
        $user = $this->user->where("id", "=", "$request->id")->update($usernew);
        $user = $this->user->where("id", "=", "$request->id")->get();

        return response()->json($user,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->user->where("id", "=", "$id")->update(['isDeleted' => true]);;


        return response()->json($user,200);
    }
}
