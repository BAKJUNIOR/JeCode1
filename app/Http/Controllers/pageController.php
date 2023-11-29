<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class pageController extends Controller
{
    public function index () {
        return view("pages.index");
    }

  public function apropos () {
        return view("pages.apropos");
    }

    public function service () {
      //  $produits = DB::table('products')->paginate(1); // récuperer tous les données de la table products et affiche 

      $produits = Product ::paginate(2);
        return view("pages.service")->with('produits' , $produits); // Affiche la page service with(avec) tous les données contenir dans la $produits qui contient les données de la table products
    }


    public function show ($id) {
   // $produit = DB :: table('products')
           //    ->where('id', $id)
            //   ->first();
      $produit = Product::find($id);// Trouve moi id et envoie moi les données de la table

       return view('pages.show')->with('produit' , $produit);       
    }






}
