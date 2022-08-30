<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;
use Illuminate\Support\Facades\Hash;
use File;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo "Aquí se va a mostrar todos los Bootcamp";
        return Bootcamp::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Aquí se inserta un bootcamp
        //echo "Aquí se inserta un bootcamp";
        //Verificar que llegó aquí el payload
        //return $request->all();

        //Registrar el Bootcamp a partir del payload
        $newBootcamp = Bootcamp::create(
            [
                "name" => $request->input("name"),
                "description" => $request->input("description"),
                "website" => $request->input("website"),
                "phone" => $request->input("phone"),
                "user_id" => $request->input("user_id"),
            ]
        );
        return $newBootcamp;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar un bootcamp cuyo id es: $id
        //echo "Mostrar un bootcamp cuyo id es: $id";
        return Bootcamp::find($id);
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
        //Aquí se va a actualizar el bootcamp con id: $id
        echo "Aquí se va a actualizar el bootcamp con id: $id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Aquí se va a eliminar el bootcamp cuyo id es: $id
        echo "Aquí se va a eliminar el bootcamp cuyo id es: $id";
    }
}
