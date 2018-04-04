<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use Exception;

class RecipeController extends Controller
{
    protected $recipe;

    public function __construct(Recipe $recipe){
        $this->recipe = $recipe;
    }

    //show all recipe
    public function index()
    {
        return Recipe::all();
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

    //create a new recipe
    public function store(Request $request)
    {
         $recipe = [
            "user_id" => $request->user_id,
            "title" => $request->title,
            "about" => $request->about,
            "pictureURL" => $request->pictureURL,
            "servingQty" => $request->servingQty,
            "servingUnit" => $request->servingUnit,
            "preparation" => $request->preparation,
            "qty" => $request->qty,
            "price" => $request->price,
            "views" => $request->views,
            "dateCreated" => $request->dateCreated,
            "datePublished" => $request->datePublished,
            "isDeleted" => $request->isDeleted

        ];
        try { 
            $recipe = $this->recipe->create($recipe); 
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
            $recipe = $this->recipe->where("id", "=", "$id")->get();
            return response()->json($recipe, 200);
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
         try {
            $recipe = $this->recipe->find($id)->update([
                "user_id" => $request->user_id,
                "title" => $request->title,
                "about" => $request->about,
                "pictureURL" => $request->pictureURL,
                "servingQty" => $request->servingQty,
                "servingUnit" => $request->servingUnit,
                "preparation" => $request->preparation,
                "qty" => $request->qty,
                "price" => $request->price,
                "views" => $request->views,
                "dateCreated" => $request->dateCreated,
                "datePublished" => $request->datePublished,
                "isDeleted" => $request->isDeleted
            ]);
            $recipe = $this->recipe->where("id", "=", $id)->get();

            return response()->json($recipe,200);
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
    public function destroy($id)
    {
        try {
            $recipe = $this->recipe->where("id", "=", "$id")->update(['isDeleted' => true]);;
            return response('Deleted',200);
        }
        catch(Exception $ex) {
            return response($ex, 400);
        }
    }
}
