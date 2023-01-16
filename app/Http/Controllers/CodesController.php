<?php

namespace App\Http\Controllers;

use App\Models\Code;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use function view;

class CodesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codes = DB::table('codes')
        ->join('users', 'users.id', '=', 'codes.user_id')
        ->join('offers', 'offers.id', '=', 'codes.offers_id')
        ->select('codes.*', 'users.name as user_name', 'offers.name as user_offer')
        ->get();
        return view('Codes.index', ['codes' => $codes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($offer)
    {

        $name = $this->generate_code();
        $user = Auth::id();

        // 0 tiene el valor de False y 1 el valor de True

        return view('Codes.create', ['name' => $name, 'activated' => 0, 'user' => $user, 'offer' => $offer]);
    }

    /**
     * Genera un numero entre dos numeros y se asegura de que no
     * sea un numero ya existente
     *
     * @return $number
     */
    function generate_code() {
        do {
            $number = random_int(1000000, 9999999);
        } while (Code::where("name", "=", $number)->first());

        return $number;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Code::create($request->all())) {
            return redirect()->route('dashboard', ['message' => "Codigo creado correctamente"]);
        } else {
            abort(500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function show(Code $code)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function edit(Code $code)
    {
        $id = last(request()->segments());
        $code = Code::find($id);
        return view('Codes.edit', ['id' => $id,'name' => $code->name, 'user' => $code->user_id, 'offer' => $code->offers_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Code $code)
    {
        $id = $request->id;
        $code = Code::find($id);
        
        $code->update([
            "name" => $request->name,
            "activated" => 1,
            "user_id" => $request->user,
            "offers_id" => $request->offers,
        ]);

        return redirect()->route('dashboard', ['message' => "Codigo canjeado correctamente"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Code  $code
     * @return \Illuminate\Http\Response
     */
    public function destroy(Code $code)
    {
        //
    }
}
