<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarCarros');
    }

    public function MostrarEditarCarros(){

        $dadosCarros = Carros::all();
        //dd($dadosCarros);
        return view('editarCarros',[
            'registrosCarros'=> $dadosCarros
        ]);
    }

    public function SalvarBancoCarros(Request $request){

        $dadosCarros = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' =>'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        Carros::create($dadosCarros);
        return Redirect::route('home');
    }


    public function ApagarBancoCarros(Carros $registrosCarros){
        //dd($registrosCarros);
        $registrosCarros->delete();
        //Carros::findOrfall($id)->delete;
        return Redirect::route('editar-carros');
        
    }
    public function MotrarAltrearCarros(Carros $registrosCarros){
        return view('alterarCarros',['registrosCarros' => $registrosCarros]);
    }
    public function AlterarBancoCarros(Carros $registrosCarros, Request $request){

        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' =>'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        $registrosCarros->fill($banco);
        $registrosCarros->save();

        return Redirect::route('editar-carros');
    }

}
