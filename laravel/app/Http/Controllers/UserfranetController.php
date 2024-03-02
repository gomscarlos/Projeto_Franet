<?php

namespace App\Http\Controllers;

use App\Models\Indicado;
use App\Models\Userfranet;
use Illuminate\Http\Request;

class UserfranetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nome' => 'required|string|max:191',
            'numero' => 'required|string|min:14',
            'nomeIndicado' => 'required|string|max:191',
            'numeroIndicado' => 'required|string|min:14',
            'parentesco' => 'required|string|max:191',
        ]);

        $userRef = Userfranet::where('numero', $request->numero)->first();

        if ($userRef) {
            try {
                $indicado = Indicado::create([
                    'nomeIndicado' => $request->nomeIndicado,
                    'numeroIndicado' => $request->numeroIndicado,
                    'userfranet_numero' => $request->numero,
                    'parentesco' => $request->parentesco,
                    'situacao' => $request->situacao,
                    'cadastradoEm' => $request->cadastradoEm,
                ]);
                return response()->json([
                    'status' => 200,
                    'message' => "Usuário criado com sucesso!"
                ], 200);
            } catch (\Throwable $th) {
                return response()->json([
                    'status' => 500,
                    'messageError' => "Já existe uma pessoa indicada com esse número!"
                ], 500);
            }
        } else {
            $user_franet = Userfranet::create([
                'nome' => $request->nome,
                'numero' => $request->numero,
            ]);

            $indicado = Indicado::create([
                'nomeIndicado' => $request->nomeIndicado,
                'numeroIndicado' => $request->numeroIndicado,
                'userfranet_numero' => $request->numero,
                'parentesco' => $request->parentesco,
                'situacao' => $request->situacao,
                'cadastradoEm' => $request->cadastradoEm,
            ]);

            if ($user_franet && $indicado) {
                return response()->json([
                    'status' => 200,
                    'message' => "Usuário criado com sucesso!"
                ], 200);
            } else {
                return response()->json([
                    'status' => 500,
                    'messageError' => "Algo deu errado"
                ], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($telefone)
    {
        $user = Indicado::where('userfranet_numero', $telefone)->get();

        return $user;
    }

    public function showPendentes()
    {
        $indicado = Indicado::where('situacao', 'Pendente')->get();

        return $indicado;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Userfranet $userfranet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Indicado::where('numeroIndicado', $request->telefoneIndicado)->update([
            'situacao' => $request->situacao
        ]);

        if ($user) {
            return response()->json([
                'status' => 200,
                'message' => "Situação atualizada para:",
                'situação' => $request->situacao
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Algo deu errado"
            ], 500);
        }
    }

    public function updateVencimento (Request $request){
        $indicado = Indicado::where('numeroIndicado', $request->telefoneIndicado)->update([
            'situacao' => $request->situacao,
            'vencimento' => $request->vencimento
        ]);

        if ($indicado) {
            return response()->json([
                'status' => 200,
                'message' => "Situação atualizada para:",
                'situação' => $request->situacao,
                'vencimento' => $request->vencimento
            ], 200);
        } else {
            return response()->json([
                'status' => 500,
                'message' => "Algo deu errado"
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Userfranet $userfranet)
    {
        //
    }
}
