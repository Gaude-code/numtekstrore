@extends('layouts.master')

@section('content')
@foreach ($products as $product)
<div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
      <div class="card-body">
        <p class="card-text"><strong>{{$product->title}}</strong> <br> {{$product->subtitle}}</p>
        <div class="d-flex justify-content-between align-items-center">
            <span class="price">{{$product->getPrice()}} </span> <br>

            <div class="btn-group">
            <a href="{{route('products.show', $product->slug)}}" class="btn btn-primary">Voir le produit</a>
            {{--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>--}}
            {{--<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>--}}
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection
