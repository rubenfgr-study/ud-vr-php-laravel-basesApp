<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FruitController extends Controller
{
    public function index()
    {
        // $fruits = DB:table('frutas')->get();
        $fruits = Fruit::orderBy('id', 'asc')->get();
        return view('fruit.index', ['fruits' => $fruits]);
    }

    public function detail($id)
    {
        // $fruit = DB::table('fruits')->where('id', '=', $id);
        $fruit = Fruit::where('id', '=', $id)->first();
        return view('fruit.detail', ['fruit' => $fruit]);
    }

    public function create()
    {
        return view('fruit.create');
    }

    public function save(Request $request)
    {
        $fruit = DB::table('frutas')->insert(([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => now()
        ]));

        return redirect()->route('fruits.index');
    }

    public function delete($id)
    {
        $fruit = DB::table('frutas')->where(['id' => $id])->delete();
        return redirect()->route('fruits.index')->with('status', 'Fruta borrada correctamente');
    }

    public function edit($id)
    {
        $fruit = DB::table('frutas')->where(['id' => $id])->first();

        return view('fruit.create', ['fruit' => $fruit]);
    }

    public function update(Request $request)
    {
        $fruit = DB::table('frutas')->where(['id' => $request->input('id')])->update([
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion') || '',
            'precio' => $request->input('precio'),
        ]);

        return redirect()->route('fruits.index')->with('status', 'La fruta se actualizó con éxito');
    }
}
