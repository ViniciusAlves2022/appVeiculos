<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Gastronomia;

class GastronomiaController extends Controller
{
    public function FormularioCadastro(){
        return view('cadastrarGastronomia');
    }

    public function MostrarEditarGastronomia(Request $request){

        //$dadosGastronomia = Gastronomia::all();
        //dd($dadosGastronomia);
        $dadosGastronomiae = Gastronomia::query();
        $$dadosGastronomia->when($request->marca,function($query, $v1){
            $query->where('marca','like','%'.$v1.'%');
        });

        $dadosGastronomia = $dadosGastronomia->get();
        return view('editarGastronomia',[
            'registrosGastronomia'=> $dadosGastronomia
        ]);
    }

    public function SalvarBanco(Request $request){

        $dadosGastronomiae = $request->validate([
            'modelo' => 'string|required',
            'marca' =>  'string|required',
            'ano'   =>  'string|required',
            'mês'   =>  'string|required',
            'valor' =>  'string|required'
        ]);

        Gastronomia::create($dadosGastronomiae);
        return Redirect::route('home');
    }


    public function ApagarBancoGastronomia(Gastronomia $registrosGastronomias){
        //dd($registroGastronomias);
        $registrosGastronomias->delete();
        //Gastronomia::findOrfall($id)->delete;
        return Redirect::route('editar-gastronomia');
        
    }
    public function MostrarAltrearGastronomia(Gastronomia $registrosGames){
        return view('alterarGame',['registrosGame' => $registrosGames]);
    }
    public function AlterarBancoCaminhao(  $registrosGames, Request $request){
        $banco = $request ->validate([
        'modelo' => 'string|required',
        'marca'  => 'string|required',
        'ano'    => 'string|required',
        'mês'    => 'string|required',
        'valor'  => 'string|required'
    ]);

    $registrosGastronomias->fill($banco);
    $registrosGastronomias->save();

    return Redirect::route('editar-Gastronomia');
    }
}
