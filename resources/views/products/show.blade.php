@extends('layouts.master')

@section('content')
<div class="row mb-2">
    <div class="col-md-12">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-smh-md-250 positin relative">
            <div class="col p-4 d-flex flex-column position-static">
                <p class="card-text"><strong>{{$product->title}}</strong> <br> {{$product->description}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="price">{{$product->getPrice()}} </span> <br>

                </div>
                <form action="{{route('cart.store')}}" method="POST">
                    @csrf

                    <input type="hidden" name="product_id" value="{{$product->id}}">
                    {{--<input type="hidden" name="title" value="{{$product->title}}">
                    <input type="hidden" name="price" value="{{$product->price}}">--}}
                    <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                </form>
            </div>

            <div class="col-auto d-none d-lg-block">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
@endsection
