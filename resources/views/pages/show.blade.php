{{--Hériter de la page master.blade.php--}}
@extends('layouts.master')

@section('title')
show
@endsection


{{--Mettre le contenu --}}
@section('Contenu')

    <h1>Détail du produit</h1>

    <hr>
     <h1>{{$produit->product_name}}</h1>
     <h3>${{$produit->product_price}}</h3>
     <p>{{$produit->product_description}}</p>
     <hr>
     <h2>{{$produit->created_at}}</h2>
     <hr>

     <a href="{{ url('editeproduct', [$produit->id]) }}" class="btn btn-default">Edit</a>
     <form action="{{ url('deleteproduct', [$produit->id]) }}" method="POST" class="pull-right">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Supprimer</button>

    </form>
@endsection