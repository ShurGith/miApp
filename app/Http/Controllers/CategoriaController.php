<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }
    public function update(Request $request)
    {
        $categorias = Categoria::all();
        $count = 0;
        foreach ($categorias as $categ) {
            if (!in_array($categ->id, $request->categoria)) {
                Categoria::find($categ->id)->delete();
                DB::table('categoria_product')
                    ->where('categoria_id', $categ->id)
                    ->delete();
                $count++;
        }

        if ($request->new_catg) {
            Categoria::insert([
                'name' => $request->new_catg,
            ]);
            $mensajeAdd = __('utiles.categAddSuccess');
        }
       $addMsj =  isset($mensajeAdd) ? $mensajeAdd . ' <br> ' : "";
        $delMsj="";
        if($count == 1){
            $delMsj =  __('utiles.categDelSuccess');
        }elseif($count > 1){
            $delMsj = __('utiles.categDelSuccessPlus');
        }elseif(!isset($mensajeAdd) && $count == 0){
            $delMsj = __('utiles.categNoChanges');
        }
        return redirect()->route('catIndex')
            ->with('success', $addMsj . $delMsj  );
    }
}
