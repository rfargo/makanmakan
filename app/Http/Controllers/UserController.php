<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UserController extends Controller
{
    protected $user;

    //initialize user
    public function __construct(User $user){
        $this->user = $user;
    }

    //show all user
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

    //create new user
    public function store(Request $request)
    {
        $user = [
            "firstName" => $request->firstName,
            "lastName" => $request->lastName,
            "username" => $request->username,
            "email" => $request->email,
            "password" => $request->password,
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

    //show user by id
    public function show($id)
    {
        try {
            $user = $this->user->where("id", "=", "$id")->get();
            return response()->json($user, 200);
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

    //update an exisiting user data
    public function update(Request $request, $id)
    {   
        try {
            $user = $this->user->find($id)->update([
                "firstName" => $request->firstName,
                "lastName" => $request->lastName,
                "username" => $request->username,
                "email" => $request->email,
                "password" => $request->password,
                "isDeleted" => $request->isDeleted
            ]);
            $user = $this->user->where("id", "=", $id)->get();

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

    //set isDeleted true
    public function destroy($id)
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
