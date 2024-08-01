<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Session;
class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
             $data =[
            'imagen' =>'imagen',
            'modal' => 'encontrado',
            'mensaje'=> __('utiles.datoEncontrado'),
        ];
        session()->flash('postData', $data);
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
            ->with('success', $addMsj . $delMsj);
    }
    public function imageDelete(Request $request){
        $products = Product::where('image', $request->files_select)->get();

        $data =[
            'imagen' => $request->files_select,
            'modal' => 'encontrado',
            'mensaje'=> __('utiles.datoEncontrado'),
        ];
        if(count($products) < 1){
            $data = [
                'modal' => 'success',
                'mensaje' => __('utiles.imgDelSuccess'),
            ];
            unlink(public_path('images/productos/') . $request->files_select);

            //return redirect()->route('catIndex')->with('encontrados', 'Encontrados');
        }
        session()->flash('postData', $data);
        return redirect()->route('catIndex');//->with('success', $data['mesaje']);

    }

    public function imgDelSeg(Request $request){
        unlink(public_path('images/productos/') . $request->archivo);
         return redirect()->route('catIndex')->with('success', __('utiles.imgDelSuccess'));
    }
    public function imageUpload(Request $request){
        $pretime = "xy_".substr(time(), -5);
        $prename = substr($request->file_subida->getClientOriginalName(),-10);
        $fileName = $pretime. '_'. $prename;
        $request->file_subida->move(public_path('images/productos'), $fileName);
       return redirect()->route('catIndex')->with('success',__('utiles.uploadedImage'));
    }


}
