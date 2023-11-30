{{--Hériter de la page master.blade.php--}}
@extends('layouts.master')

@section('title')
Update
@endsection

{{--Mettre le contenu --}}
@section('Contenu')

@if (count($errors) > 0)
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li style="font-size: 1.2em">{{$error}}</li>
    @endforeach
    
  </ul>
</div>
@endif


<form action="{{url('updateproduct', [$produit->id]) }}" method="POST" class="form-horizontal">
  @csrf <!-- Donne un tocken de sécurité-->

  @method('PUT')<!-- Méthode pour la mise a jour-->
  
    <div class="form-group">
        <label>Product</label>
        <input type="text" name="product_name" value="{{$produit->product_name}}" placeholder="Product Name" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" name="product_price" value="{{$produit->product_price}}" placeholder="Product Price" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea name="product_description" cols="20" rows="10" class="form-control" required>{{$produit->product_description}}</textarea>
    </div>
    <input type="submit" value="Update Product" class="btn btn-primary">
  </form>

@endsection