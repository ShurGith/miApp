<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ProductoRequest;
use Illuminate\Support\Facades\DB;

  function actualizaCatgs($prMax, $llave){
        DB::table('categoria_product')->insert([
            'product_id' => $prMax,
            'categoria_id' => $llave,
        ]);
    }
class ProductController extends Controller
{
    public function main()
    {
        return view('product.main');
    }
    public function index()
    {
        $productos = Product::all();
        return view('product.index', compact('productos'));
    }

    public function create()
    {
        $productos = Product::all();
        return view('product.create', compact('productos'));
    }

    public function store(Request $request, ProductoRequest $productoRequest)
    {
        $product = new Product;
        $product->name = trim($request->name);
        $product->description = trim($request->description);
        $product->price = trim($request->price);
        if ($request->file_img) {
            $fileName = time() . '_' . $request->file_img->getClientOriginalName();
            $request->file_img->move(public_path('images/productos'), $fileName);
        } elseif ($request->files_select != $request->image) {
            $fileName = $request->files_select;
        } else {
            $fileName = $request->image;
        }

         $product->image = $fileName;
         $product->save();

        $prodMax = Product::max('id');
        if ($request->new_categ) {
           $nameNewCat = trim($request->new_categ);
           $insertarCat = true;

           $allCatgs = Categoria::all();
           foreach($allCatgs as $allCatg){
                if($nameNewCat ==  $allCatg->name){
                   $insertarCat = false;
                }
           }
            if($insertarCat){
                Categoria::insert([
                    'name' => $nameNewCat,
                ]);
                actualizaCatgs($prodMax, Categoria::max('id'));
            }
        }
        if($request->categoria){
            foreach ($request->categoria as $cat => $key) {
                 actualizaCatgs($prodMax, $key);
            }
        }

         return redirect()->route('product.index')
             ->with('success', 'Producto CREADO successfully');

    }

    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $product = Product::find($product->id);
        $borrar = false;
        $fileName_ant = $product->image;
        if ($request->file_img) {
            $fileName = time() . '_' . $request->file_img->getClientOriginalName();
            $request->file_img->move(public_path('images/productos'), $fileName);
            $borrar = true;
        } elseif ($request->files_select != $request->image) {
            $fileName = $request->files_select;
            $borrar = true;
        } else {
            $fileName = $request->image;
            $borrar = true;
        }
        //dd($fileName_ant);
        $fileNombre = $fileName ? $fileName : $fileName_ant;
        // $borrar = true;
        /* if ($product->image != $fileName && strlen($request->files_select)) {
             $productos = Product::all();
             foreach($productos as $pro){
                 if( $pro->image == $product->image AND $pro->id == $product->id){
                     $borrar = false;
                     //dd($product->image);
                 }
             }*/
        if ($borrar && $product->image != $fileName) {
            // unlink(public_path('images/productos/') . $product->image);
        }
        //}

        $product->update($request->all());
        $product->image = $fileNombre;
        $product->save();

        //? Categorias
        DB::table('categoria_product')
            ->where('product_id', $product->id)
            ->delete();

        foreach ($request->categoria as $catego) {
            actualizaCatgs($product->id, $catego);
        };
        return redirect()->route('product.index')
            ->with('success', 'producto ACTUALIZADO successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }

    public function prueba(Product $product)
    {
        return view('product.prueba', compact('product'));
    }
}
