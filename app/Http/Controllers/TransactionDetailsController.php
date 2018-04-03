<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransactionDetails;
use Exception;

class TransactionDetailsController extends Controller
{
     protected $data;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(TransactionDetails $data){
        $this->data = $data;
    }

    public function index()
    {
        return TransactionDetails::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = [
            "transaction_id" => $request->transaction_id,
            "recipe_id" => $request->recipe_id,
            "price" => $request->price,
            "quantity" => $request->quantity
        ];
        try { 
            $data = $this->data->create($data); 
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
    public function show($id)
    {
        try {
            $data = $this->data->where("transaction_id", "=", "$id")->get();
            return response()->json($data, 200);
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
        //
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
        // try {
        //     $data = $this->data->find($id)->update([
        //         "transaction_id" => $request->transaction_id,
        //         "recipe_id" => $request->recipe_id,
        //         "price" => $request->price,
        //         "quantity" => $request->quantity
        //     ]);
        //     $data = $this->data->where("id", "=", $id)->get();

        //     return response()->json($data,200);
        // }
        // catch(Exception $ex) {
        //     return response()->json($ex, 400);
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // try {
        //     $data = $this->data->where("article_id", "=", "$id")->update(['isDeleted' => true]);;
        //     return response('Deleted',200);
        // }
        // catch(Exception $ex) {
        //     return response($ex, 400);
        // }
    }
}
