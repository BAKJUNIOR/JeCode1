{{--Hériter de la page master.blade.php--}}
@extends('layouts.master')

@section('title')
Service
@endsection


{{--Mettre le contenu --}}
@section('Contenu')
    <h1>Bienvenue sur la page des services </h1>

@if (Session::has('status'))
<div class="alert alert-success" >
    {{Session::get('status')}}
</div>
    
@endif
@foreach ($produits as $produit)

 <div class="well">
   <h1><a href="/show/{{$produit->id}}">{{$produit->product_name}}</a></h1>
 </div>

 @endforeach
{{$produits->links()}}

@endsection