@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["products"] as $product)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('product.show', ['id'=> $product["id"]]) }}"
          class="btn bg-primary text-white">{{ $product["name"] }}</a>
        @if ($product["price"] < 100)
          <a href="{{ route('product.show', ['id'=> $product["id"]]) }}"
          class="btn bg-primary text-white">{{ $product["price"] }}</a>
        @else
          <a href="{{ route('product.show', ['id'=> $product["id"]]) }}"
          class="btn bg-primary text-red">{{ $product["price"] }}</a>
        @endif
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection
