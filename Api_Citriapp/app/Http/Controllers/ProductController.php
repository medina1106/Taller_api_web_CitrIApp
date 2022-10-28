<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Products::all();

        return response()->json([
            'message' => 'success',
            'info' => 'Lista de Productos',
            'producto' => $product,
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Products();
        $product->codigo = $request->codigo;
        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->estado = $request->estado;
        $product->cantidad = $request->cantidad;
        $product->category_id = $request->category_id;
        $product->save();


        return response()->json([
            'message'=> 'success',
            'info' => 'Producto Creado',
            'producto' => $product,

        ],201);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product =  Products::find($id);
         
        return response()->json([
            'mesage' => 'sucess',
            'info ' => 'busqueda exitosa',
            'product_find' => $product

        ],200);
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
        $product = Products::find($id);
        $product->codigo = $request->codigo;
        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->estado = $request->estado;
        $product->cantidad = $request->cantidad;
        $product->category_id = $request->category_id;
        $product->save();

        return response()->json([
            'message'=> 'succes',
            'info'=>'actualizada',
            'categoria' => $product,


        ],201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
