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
         
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = [
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
            "accessLevel" => $request->accessLevel,
            "isDeleted" => $request->isDeleted
        ];
        try { 
            $user = $this->user->create($user); 
            return response('Created',201);
        } 
        catch(Exception $ex) {
            echo $ex; 
            return response('Failed', 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        try {
            $users = $this->user->get();
            return response()->json($users, 200);
        }
        catch (Exception $ex) {
            echo $ex;
            return response('Failed', 400);
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showProfile($id) {
        try{
            $user = $this->user->where("id", "=", "$id")->get(); 
            return response()->json($user,200);
        }
        catch (Exception $ex) {
            echo $ex;
            return response('Failed', 400);
        }
       
    }

    public function edit($id)
    {
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
        try {
            $user = $this->user->find($id)->update([
                "firstName" => $request->firstName,
                "lastName" => $request->lastName,
                "username" => $request->username,
                "email" => $request->email,
                "password" => $request->password,
                "accessLevel" => $request->accessLevel,
                "isDeleted" => $request->isDeleted
            ]);
            $user = $this->user->where("id", "=", "$request->id")->get();

            return response()->json($user,200);
        }
        catch(Exception $ex) {
            return response()->json($ex, 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $user = $this->user->where("id", "=", "$id")->update(['isDeleted' => true]);;
            return response('Deleted',200);
        }
        catch(Exception $ex) {
            return response($ex, 400);
        }
    }
}
