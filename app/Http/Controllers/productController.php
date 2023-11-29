<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class productController extends Controller
{
    //


    public function create () {
        return view('pages.create');
    }

    public function saveproduct (Request $request) {


        $this->validate($request, [
            'product_name'=> 'required',
            'product_price'=> 'required',
            'product_description'=> 'required',
        
        ]);

        $product = new Product();
     // Prendre les données du formulaire pour l'inserer dans la table
     $product->product_name = $request->input('product_name');
     $product->product_price = $request->input('product_price');
     $product->product_description = $request->input('product_description');

     $product->save();// pour sauvegarder

     return redirect('/service')->with('status','Le produit ' .$request->input('product_name'). ' a été ajouter avec succes !!');

    }


    public function deleteproduct ($id) {
        $produit = Product::find($id);
        $produit->delete();

        return redirect('/service')->with('status','Votre produita été supprimer avec succes !!');


    }
}
