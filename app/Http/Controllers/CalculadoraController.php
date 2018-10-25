<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function calcular(Request $request)
    {
        $nombre =  "esta gud";
        $operacion = $request->input('operacion');
        $numero1 = $request->input('numero1');
        $numero2 = $request->input('numero2');
        $error = false;
        switch ($operacion) {
            case 'sumar':
            $resultado=$numero1+$numero2;
            break;
            case 'restar':
            $resultado=$numero1-$numero2;
            break;
            case 'multiplicar':
            $resultado=$numero1*$numero2;
            break;
            case 'dividir':
            if ($numero1 == 0 || $numero2 == 0) {
                $resultado="0 no se divide";
                $error = true;
            }else{
                $resultado=$numero1/$numero2;
            }
            break;
            case 'potencia':
            $resultado=pow($numero1, $numero2);
            break;
            default:
            $resultado="Eso no es un numero";
            break;
        }
        return view("calculadora",['nombre' => $request->input("nombre"),
            'numero1'=>$numero1,
            'numero2'=>$numero2,
            'error'=>$error,
            'resultado'=>$resultado]);
    }


    public function mostrarCalculadora(Request $request){

        return view("calculadora",['nombre' => $request->input("nombre")]);
    }
}
