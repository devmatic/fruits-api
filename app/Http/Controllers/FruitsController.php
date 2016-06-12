<?php

namespace App\Http\Controllers;

use App\Fruit;
use App\Http\Requests;
use Dingo\Api\Routing\Helpers;
use App\Transformers\FruitsTransformer;


class FruitsController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the fruits.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = Fruit::all();

//        return $this->response->array(['data' => $fruits], 200);
        return $this->collection($fruits, new FruitsTransformer);
    }

    /**
     * Store a newly created fruit.
     *
     * @param \App\Http\Requests\StoreFruitRequest|\Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\StoreFruitRequest $request)
    {
        if (Fruit::Create($request->all())) {
            return $this->response->created();
        }

        return $this->response->errorBadRequest();
    }

    /**
     * Returns the specified fruit info.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fruit = Fruit::where('id', $id)->first();

        if ($fruit) {
            return $this->item($fruit, new FruitsTransformer);
        }

        return $this->response->errorNotFound();
    }

    /**
     * Remove the specified fruit.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fruit = Fruit::find($id);

        if ($fruit) {
            $fruit->delete();
            return $this->response->noContent();
        }

        return $this->response->errorBadRequest();
    }
}
